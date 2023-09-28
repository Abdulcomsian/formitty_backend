<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interaction;
use App\Models\Report;
use App\Models\Form;
use App\Models\FormHeading;
use App\Models\AssessmentTool;
use App\Models\FormData;
use App\Models\FormField;
use App\Models\UserForm;
use App\Models\CustomHeading;
use App\Models\UserFormHeading;
use App\Models\Response;
use App\Models\Answer;
use App\Models\Option;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TherapistCreated;
use App\Models\AssessmentGroupPoint;
use App\Models\SpeechText;

//create complete crud operation using ajax
class FormBuilderController extends ApiController
{
  public function getFormFields(Request $request)
  {
    $validator = Validator::make(request()->all(), [
      'form_id' => 'required|integer',
    ]);

    ### On fail returns responses ###
    if ($validator->fails()) {
      return $this->errorResponse($validator->messages(), 422);
    }

    try {
      //fetch form with form_heading table and then form_fields table
      //            $forms = Form::findorfail(2)->with('form_headings.form_fields')->first();
      $forms = Form::with('form_headings.form_fields')->findorfail($request->form_id);


      //get selected form columns from forms table
      //            $forms = Form::with(['form_fields'])->select('id', 'form_field')->get();

      return $this->successResponse($forms, 'Form fields get successfully!.', 200);
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 500);
    }
  }

  public function getForms()
  {
    try {
      //fetch form with form_heading table and then form_fields table
      $forms = Form::latest()->get();

      //get selected form columns from forms table
      //            $forms = Form::with(['form_fields'])->select('id', 'form_field')->get();

      return $this->successResponse($forms, 'Form fields get successfully!.', 200);
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 500);
    }
  }

  public function storeFormField(Request $request, $update = null)
  {
    $input = $request->all();
    $array = [];
    $globalArray = [];

    if (!auth('sanctum')->user()) {
      return $this->errorResponse("User is not authenticated", 401);
    }

    $user_id = auth('sanctum')->user()->id;

    $user_form = $this->createUserForm($request);
    //        try {
    //get selected form columns from forms table
    foreach ($input as $key => $value) {
      if ($key == 'form_id' || $key == 'marked' || $key == 'form_heading_id') {
        continue; // skip to the next iteration of the loop
      }
      if ($update) {
        $string = $key;
        $heading_id = substr($string, strpos($string, "part_") + 5, 1);
        $result = update_extract_values($key);
        $heading_id = $result[0];
        $name = $result[1];
        $order_id = $result[3];
        if ($name == 'assessment_tool') {
        $heading_id = $result[2];
          $this->storeAssessmentToolOrder($name, $heading_id, $order_id, $value, $user_form, $update);
          continue;
        }
      } else {
        $result = extract_values($key);
        $name = $result[0];
        $heading_id = $result[1];
        $order_id = $result[2];
      }

      if ($name == 'custom_heading') {
        $custom_heading = $this->createCustomHeading($name, $heading_id, $order_id, $value, $user_form);
      } else if ($name == 'custom_field') {
        $custom_field = $this->customField($value, $custom_heading);
      } else {
        if ($name != 'custom_heading' && $name != 'custom_field') {
          $form_data = new FormData();
          $form_data->name = $name;
          $form_data->form_heading_id = $heading_id;
          $form_data->order_id = $order_id;
          $form_data->value = $value;
          $form_data->user_id = $user_id;
          $form_data->save();

          if (!in_array($heading_id, $array)) {
            array_push($array, $heading_id);
            $user_form_heading = new UserFormHeading();
            $user_form_heading->user_id = $user_id;
            $user_form_heading->order_id = $order_id;
            $user_form_heading->heading_id = $heading_id;
            $user_form_heading->user_form_id = $user_form->id;
            $user_form_heading->save();
          }

          $form_data = FormData::findorfail($form_data->id);
          $form_data->user_form_heading_id = $user_form_heading->id;
          $form_data->save();
        }
      }
    }

    $user_id = auth('sanctum')->user()->id;
    $randomNumber = random_int(100000, 999999);
    $fileName = $randomNumber . '.docx';
    $local_file_path = public_path($fileName);
    if (file_exists($local_file_path)) {
      unlink($local_file_path);
    }
    self::generateWordDocument($user_form->id, $fileName);
    $file_path = env('APP_URL');
    $file_path = $file_path . $fileName;
    $success['file_path'] = $file_path;
    $success['fields'] = $input;
    $success['user_form_id'] = $user_form->id;
    $success['assessmentDetail'] = $globalArray;
    return $success;
    // return $this->successResponse($success, 'Document Generated Successfully.');
  }

  private function createUserForm($request)
  {

    if (!auth('sanctum')->user()) {
      return $this->errorResponse("User is not authenticated", 401);
    }

    $user_id = auth('sanctum')->user()->id;

    $user_form = new UserForm();
    $user_form->form_id = $request->form_id ?? '1';
    $user_form->user_id = $user_id;
    $user_form->save();

    return $user_form;
  }

  private function storeAssessmentToolOrder($name, $heading_id, $order_id, $value, $user_form_data, $update)
  {
    // $user_form = Response::where('user_form_id', $update, '')->first();
    $user_form = Response::find($heading_id);
    if ($user_form) {
      //            foreach ($user_forms as $user_form){
      $user_form->user_form_id = $user_form_data->id;
      $user_form->save();

      $userFormHeading = new UserFormHeading;
      $userFormHeading->user_id = auth('sanctum')->user()->id;
      $userFormHeading->heading_id = $user_form->id;
      $userFormHeading->order_id = $order_id;
      $userFormHeading->user_form_id = $user_form_data->id;
      $userFormHeading->heading_type = 'assessment_tool';
      $userFormHeading->save();
    }
    //        }
  }

  private function createCustomHeading($name, $heading_id, $order_id, $value, $user_form)
  {

    $custom_heading = new CustomHeading();
    $custom_heading->user_form_id = $user_form->id;
    $custom_heading->user_heading_id = $order_id;
    $custom_heading->form_heading = $value;
    $custom_heading->save();

    $userFormHeading = new UserFormHeading;
    $userFormHeading->user_id = auth('sanctum')->user()->id;
    $userFormHeading->heading_id = $custom_heading->id;
    $userFormHeading->order_id = $order_id;
    $userFormHeading->user_form_id = $user_form->id;
    $userFormHeading->heading_type = 'custom';
    $userFormHeading->save();

    $custom_heading = CustomHeading::findorfail($custom_heading->id);
    $custom_heading->user_heading_id = $userFormHeading->id;
    $custom_heading->save();

    return $custom_heading;
  }

  private function customField($value, $custom_heading)
  {
    $custom_field = CustomHeading::findorfail($custom_heading->id);
    if ($custom_field) {
      $custom_field->custom_field = $value;
      $custom_field->save();
    }
  }

  private function checkCustomHeadingOrCustomField($name, $heading_id, $order_id, $value, &$array, $user_form)
  {
    $form_data = new FormData();
    $form_data->name = $name;
    $form_data->form_heading_id = $heading_id;
    $form_data->order_id = $order_id;
    $form_data->value = $value;
    $form_data->user_id = auth('sanctum')->user()->id;
    $form_data->save();
    $user_form_heading = null;
    if (!in_array($heading_id, $array)) {
      array_push($array, $heading_id);
      $user_form_heading = new UserFormHeading();
      $user_form_heading->user_id = auth('sanctum')->user()->id;
      $user_form_heading->order_id = $order_id;
      $user_form_heading->heading_id = $heading_id;
      $user_form_heading->user_form_id = $user_form->id;
      $user_form_heading->save();
    }
    if ($user_form_heading) {
      $form_data = FormData::findorfail($form_data->id);
      $form_data->user_form_heading_id = $user_form_heading->id;
      $form_data->save();
    }
  }

  private function updateResponse($update, $user_form_data)
  {
    $user_forms = Response::where('user_form_id', $update)->get();
    if (count($user_forms) > 0) {
      foreach ($user_forms as $user_form) {
        $user_form->user_form_id = $user_form_data->id;
        $user_form->save();
      }
    }
  }


  public function updateFormField(Request $request, $user_form_id)
  {
    try{
      DB::beginTransaction();
      $user_form = UserForm::find($user_form_id);

      if ($user_form) {

        // find all the user form headings that correspond to the given $user_form_id
        $user_form_headings = UserFormHeading::where('user_form_id', $user_form_id)->get();

        foreach ($user_form_headings as $user_form_heading) {
          // find all the form data that correspond to the user form heading
          $form_data = FormData::where('user_form_heading_id', $user_form_heading->id)->get();

          // delete all the form data
          foreach ($form_data as $data) {
            $data->delete();
          }

          // delete the user form heading
          $user_form_heading->delete();
        }

        
        // delete the user form
        $user_form = UserForm::find($user_form_id);
        $user_form->delete();
        
        
        $response = self::storeFormField($request, $user_form_id);
        //new code starts here
        $formId = $response['user_form_id'];
        Interaction::where('report_id' , $user_form_id)->update(['report_id' => $formId]);
        SpeechText::where('report_id' , $user_form_id)->update(['report_id' => $formId]);
        DB::commit();

        return $this->successResponse($response, 'User form updated successfully.');
      } else {
        return $this->errorResponse('User form not found.', 404);
      }
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage().' '.$th->getLine(), 500);
    }
    
  }


  private function storeCustomHeading($user_form, $value, $order_id)
  {
    $custom_heading = new CustomHeading();
    $custom_heading->user_form_id = $user_form->id;
    $custom_heading->user_heading_id = $order_id;
    $custom_heading->form_heading = $value;
    $custom_heading->save();
    $userFormHeading = new UserFormHeading;
    $userFormHeading->user_id = auth('sanctum')->user()->id;
    $userFormHeading->heading_id = $custom_heading->id;
    $userFormHeading->order_id = $order_id;
    $userFormHeading->user_form_id = $user_form->id;
    $userFormHeading->heading_type = 'custom';
    $userFormHeading->save();
    $custom_heading = CustomHeading::findorfail($custom_heading->id);
    $custom_heading->user_heading_id = $userFormHeading->id;
    $custom_heading->save();
  }

  public function updateCustomField($user_form, $value, $order_id)
  {
    $custom_field = CustomHeading::findorfail($custom_heading->id);
    if ($custom_field) {
      $custom_field->custom_field = $value;
      $custom_field->save();
    }
  }

  public function storeFormData($value, $name, $order_id, $heading_id, &$array, $user_form)
  {
    if (!in_array($heading_id, $array)) {
      array_push($array, $heading_id);
      $user_form_heading = new UserFormHeading();
      $user_form_heading->user_id = auth('sanctum')->user()->id;
      $user_form_heading->order_id = $order_id;
      $user_form_heading->heading_id = $heading_id;
      $user_form_heading->user_form_id = $user_form->id;
      $user_form_heading->save();
    }

    $form_data = new FormData();
    $form_data->name = $name;
    $form_data->form_heading_id = $heading_id;
    $form_data->order_id = $order_id;
    $form_data->value = $value;
    $form_data->user_id = auth('sanctum')->user()->id;
    $form_data->save();

    if (!in_array($heading_id, $array)) {
      array_push($array, $heading_id);
      $user_form_heading = new UserFormHeading();
      $user_form_heading->user_id = auth('sanctum')->user()->id;
      $user_form_heading->order_id = $order_id;
      $user_form_heading->heading_id = $heading_id;
      $user_form_heading->user_form_id = $user_form->id;
      $user_form_heading->save();
    }

    $form_data = FormData::findorfail($form_data->id);
    $form_data->user_form_heading_id = $user_form_heading->id;
    $form_data->save();
  }


  public function getUserForms(Request $request)
  {
    try {


      $forms = FormData::with(['formHeading', 'formHeading.form'])->where('user_id', 2)->get();

      $groupedForms = $forms->groupBy('form_heading_id');

      $return = [];
      $return_array = ['form_name' => $forms[0]->formHeading->form->name];

      foreach ($groupedForms as $forms) {
        $form_heading = $forms[0]->formHeading;
        if (!is_null($form_heading)) {
          $form = $form_heading->form;
          $return[] = [
            //                        'form_headings' => [
            'id' => $form_heading->id,
            'heading_name' => $form_heading->form_heading,
            'order_id' => $forms[0]->order_id,
            'user_data' => $forms->map(function ($data) {
              return [
                'id' => $data->id,
                'form_heading_id' => $data->form_heading_id,
                'name' => $data->name,
                'value' => $data->value,
              ];
            }),
            //                        ],
          ];
        }
      }
      $return_array['form_headings'] = $return;
      return $return_array;


      return $this->successResponseFormField($return_array, 'Document Generated Successfully.');
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 500);
    }
  }

  public function generateWordDocument($id, $fileName)
  {
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    $section = $phpWord->addSection();

    $usr_forms = UserForm::with(['userFormHeadings', 'userFormHeadings.formData', 'userFormHeadings.formHeading'])->findorfail($id);

    $usr_forms->userFormHeadings = $usr_forms->userFormHeadings->sortBy('order_id');

    $count = 1;
    $view = 'users.sections.header'.$usr_forms->form_id;
    $html = View::make($view)->render();
    $section_html = '';
    /*$image_path = asset('image.jpg');
        $image = $section->addImage(
            'data:image/jpeg;base4,' . $image_path, // Use the base 4 notation as the image source
            ['width' => 300, 'height' => 200] // Set the image size
        );
        $section_html = "<h1>".$image."</h1>";*/
    foreach ($usr_forms->userFormHeadings as $userFormHeading) {
      $count++;
      if ($userFormHeading->heading_type == 'custom') {
        $section_html = $userFormHeading->customHeading->section_html;
      } elseif ($userFormHeading->heading_type == 'predefined') {
        // $section_html = $userFormHeading->formHeading->section_html;
        $section_html = $userFormHeading->formHeading->section_html;
      } elseif ($userFormHeading->heading_type == 'assessment_tool') {
        $response = Response::with('assessment_tool', 'assessment_tool.questions', 'assessment_tool.questions.answers')->find($userFormHeading->heading_id);
        // $section_html = $response->assessment_tool->title;
        $section_html = $this->generateAssessmentToolHtml($response, $section_html);
      }
      if ($userFormHeading->heading_type != 'custom' && $userFormHeading->heading_type != 'assessment_tool') {
        foreach ($userFormHeading->formData as $formData) {
          $field_name = $formData->name;
          $field_value = $formData->value;
          $section_html = str_replace("{{" . $field_name . "}}", $field_value, $section_html);
        }
      }

      $html .= $section_html;
    }
    // Save file
    // $fileName = "export_download.docx";
    \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

    $objWriter->save($fileName);
  }

  public function testgenerateWordDocument($id)
  {
    $fileName = 'test.docx';
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    $section = $phpWord->addSection();

    $usr_forms = UserForm::with(['userFormHeadings', 'userFormHeadings.formData', 'userFormHeadings.formHeading'])->findorfail($id);

    // $usr_forms = UserForm::with(['userFormHeadings','userFormHeadings.formHeading'])->findorfail($id);

    $usr_forms->userFormHeadings = $usr_forms->userFormHeadings->sortBy('order_id');
    $count = 0;
    $html = View::make('users.sections.header')->render();
    $section_html = '';
    /*$image_path = asset('image.jpg');
        $image = $section->addImage(
            'data:image/jpeg;base4,' . $image_path, // Use the base 4 notation as the image source
            ['width' => 300, 'height' => 200] // Set the image size
        );
        $section_html = "<h1>".$image."</h1>";*/
    foreach ($usr_forms->userFormHeadings as $userFormHeading) {
      $count++;
      if ($userFormHeading->heading_type == 'custom') {
        $section_html = $userFormHeading->customHeading->section_html;
      } elseif ($userFormHeading->heading_type == 'predefined') {
        // $section_html = $userFormHeading->formHeading->section_html;
        $section_html = $userFormHeading->formHeading->section_html;
      } elseif ($userFormHeading->heading_type == 'assessment_tool') {
        $response = Response::with('assessment_tool', 'assessment_tool.questions', 'assessment_tool.questions.answers')->find($userFormHeading->heading_id);
        // $section_html = $response->assessment_tool->title;
        $section_html = $this->generateAssessmentToolHtml($response, $section_html);
      }
      if ($userFormHeading->heading_type != 'custom' && $userFormHeading->heading_type != 'assessment_tool') {
        foreach ($userFormHeading->formData as $formData) {
          $field_name = $formData->name;
          $field_value = $formData->value;
          $section_html = str_replace("{{" . $field_name . "}}", $field_value, $section_html);
        }
      }

      $html .= $section_html;
    }
    // dd($count);
    // Save file
    // $fileName = "export_download.docx";
    \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

    $objWriter->save($fileName);
  }

  public function generateAssessmentToolHtml($response, $section_html)
  {
    $section_html = '';
    if ($response->assessment_tool->id == '1') {
      $section_html2 = $this->createECANSTool($response, $section_html);
    }
    if ($response->assessment_tool->id == '2') {
      $section_html2 = $this->createWHODASTool($response, $section_html);
    }
    if ($response->assessment_tool->id == '3') {
      $section_html2 = $this->createDSMSELFTool($response, $section_html);
    }
    if ($response->assessment_tool->id == '4' || $response->assessment_tool->id == '5') {
      $section_html2 = $this->createDSMPARENTTool($response, $section_html);
    }
    if ($response->assessment_tool->id == '6' || $response->assessment_tool->id == '7') {
      $section_html2 = $this->createLEVEL2TTool($response, $section_html);
    }
    if (
      $response->assessment_tool->id == '8'
      || $response->assessment_tool->id == '9'
      || $response->assessment_tool->id == '10'
      || $response->assessment_tool->id == '15'
      || $response->assessment_tool->id == '16'
      || $response->assessment_tool->id == '19'
    ) {
      $section_html2 = $this->createMRS9QTool($response, $section_html);
    }
    if ($response->assessment_tool->id == '11' || $response->assessment_tool->id == '14') {
      $section_html2 = $this->createLSPTool($response, $section_html);
    }
    if($response->assessment_tool->id == '12'){
        $section_html2 = $this->createBarthalTool($response, $section_html);
    }
    if ($response->assessment_tool->id == '13' || $response->assessment_tool->id == '18') {
      $section_html2 = $this->createCaregiverBurdenTool($response, $section_html);
    }
    // if ($response->assessment_tool->id == '17' || $response->assessment_tool->id == '12') {
    if ($response->assessment_tool->id == '17') {
      $section_html2 = $this->createLawtonBrodyTool($response, $section_html);
    }
    return $section_html2;
  }

  public function createECANSTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse'>
        <tbody>
          <tr>
            <td
              colspan='3'
              style='
                border: 1px solid black;
                text-align: center;
                background-color: #505D30;
                color: white;
              '
            ><span style='font-weight: bold; font-size: x-large'>Care And Needs Scale (CANS)</span><br /><span style='padding: 0px; font-size: large'>Date: Today</span></td>
          </tr>
          <tr>
            <td colspan='3' style='border: 1px solid black'>
              <table style='width: 100%'>
                <tr><td style='width: 5%;'>Date:</td><td style='width: 20%;'>Client Name:</td><td style='width: 5%;'>Age:</td><td style='width: 5%;'>MRN:</td><td style='width: 15%;'>Assessed By:</td></tr>
              </table>
            </td>
          </tr>
          <tr>
            <td
              colspan='3'
              style='
                border: 1px solid black;
                border-top: none;
                background-color: #C3D59B;
              '
            >
              <table style='width: 100%'>
                <tr><td style='width: 1%'></td><td style='width: 99%; font-size: 16px; font-weight: bold'>Needs Checklist</td></tr>
              </table>
            </td>
          </tr>";
    $section_html .= "<tr>
        <td
          style='
            width: 40%;
            text-align: end;
            border: 1px solid black;
            background-color: #EBF1DD;
          '
        >
          <table style='width: 100%'>
            <tr><td style='width: 50%'></td><td style='width: 49%'>Tick yes or no</td><td style='width: 1%'></td></tr>
          </table>
        </td>
        <td
          style='
            width: 10%;
            text-align: center;
            border: 1px solid black;
            background-color: #EBF1DD;
          '
        >CANS LEVELS</td>
        <td
          style='
            width: 45%;
            text-align: left;
            border: 1px solid black;
            background-color: #EBF1DD;
          '
        >
          <table style='width: 100%'>
            <tr><td style='width: 1%'></td><td style='width: 99%'>Comments</td></tr>
          </table>
        </td>
      </tr>";
    $section_html .= "";
    $total_questions = 0;
    $total_achieved_points = 0;
    foreach ($response->assessment_tool->assessment_groups as $assessment_group) {
      $total_group_questions = 0;
      $total_group_questions_achieved = 0;
      $assessment_group_title = $assessment_group->title ?? '';
      $section_html .= "<tr>
            <td
              colspan='3'
              style='
                border: 1px solid black;
                border-right: none;
                background-color: #EBF1DD;
              '
            >
              <table style='width: 100%'>
                <tr><td style='width: 1%'></td><td style='width: 99%'>" . $assessment_group_title . "</td></tr>
              </table>
            </td>
          </tr>";
      //            $section_html .= "<tr><td colspan='3' style='border: 1px solid black'>".$assessment_group_title."</td></tr>";
      foreach ($assessment_group->questions as $question) {
        $total_questions++;
        $total_group_questions++;
        $answer = Answer::with('option')->where('question_id', $question->id)->where('response_id', $response->id)->first();
        $quest = $question->title ?? '';
        if ($question->type === 'multiple_choice') {
          $answer1 = $answer->option->title ?? '';

          $point = $question->point ?? 0;
          if ($answer1 == "Yes") {
            $total_achieved_points++;
            $total_group_questions_achieved++;
          }
          $answer2 = $answer->answer ?? '';
          $level = $answer->level ?? 0;
          $section_html .= "<tr>
                    <td style='width: 45%; border: 1px solid black'>
                      <table style='width: 100%'>
                        <tr><td style='width: 1%'></td><td style='width: 85%'>" . $quest . "</td><td style='width: 14%; text-align: center'>" . ($answer1 == 'Yes' ? 'Yes' : 'No') . "</td></tr>
                      </table>
                    </td>
                    <td style='width: 10%; text-align: center; border: 1px solid black'>" . ($level == 0 ? '' : $level) . "</td>
                    <td style='width: 45%; border: 1px solid black; border-right: none'><table  style='width: 100%;'><tr><td style='width: 1%'></td><td style='width: 99%'>" . $answer2 . "</td></tr></table></td>
                  </tr>";
        } elseif ($question->type === 'open_ended') {
          $answer1 = $answer->answer ?? '';
          $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $quest . "</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $answer1 . "</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Nill</p>
                                </td>
                            </tr>";
        }
      }
      $section_html .= "<tr>
                        <td colspan='3' style='border: 1px solid black; border-right: none'>
                          <table style='width: 100%'><tr><td style='width: 20%'></td><td style='width: 60%'><span style='font-weight: bold'>Group A subtotal </span><span style='text-decoration: underline'>" . $total_group_questions_achieved . "</span> /" . $total_group_questions . "</td><td style='width: 20%'></td></tr></table>
                        </td>
                      </tr>";
    }

    $section_html .= "<tr>
                        <td colspan='3' style='width: 45%; border: 1px solid black'>
                          <table style='width: 100%'>
                            <tr>
                              <td style='width: 20%;'></td><td style='width: 60%; text-align: start'><span style='font-weight: bold;'>Group A + Group B + Group C + Group D = " . $total_achieved_points . " / " . $total_questions . " = </span><span style='text-decoration: underline'></span></td><td style='width: 20%;'></td>
                            </tr>
                          </table>
                        </td>
                      </tr></tbody>
                    </table>";

    return $section_html;
  }

  public function createWHODASTool($response, $section_html)
  {
    //Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse'>
                            <thead>
                              <tr style='background-color: #6A2C75'>
                                <td colspan='8'>
                                  <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                      margin-bottom: 8px;
                                      color: white; '>" . $title . "
                                    </p>
                                </td>
                              </tr>
                            </thead>
        <tbody>
          <tr style='background-color: #F0F9FF'>
            <th style='width: 5%'></th>
            <th style='width: 53%'></th>
            <th style='width: 8%; border: 1px solid black'>None</th>
            <th style='width: 8%; border: 1px solid black'>Mild</th>
            <th style='width: 8%; border: 1px solid black'>Moderate</th>
            <th style='width: 8%; border: 1px solid black'>Severe</th>
            <th style='width: 10%; border: 1px solid black'>Extreme or cannot do</th>
          </tr>";
    $count = 0;
    foreach ($response->assessment_tool->questions as $question) {
      $quest = $question->title ?? '';
      $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
      $answer = $answer->answer ?? '';

      if ($question->type == 'multiple_choice') {
        // $answer = $question->answers->answer ?? '';

        $answer0 = ($answer == '0' ? $answer : '');
        $answer1 = ($answer == '1' ? $answer : '');
        $answer2 = ($answer == '2' ? $answer : '');
        $answer3 = ($answer == '3' ? $answer : '');
        $answer4 = ($answer == '4' ? $answer : '');
      }

      if ($question->type == 'multiple_choice') {
        $section_html .= "
                    <tr>
                        <td style='width: 5%; text-align: center; background-color: #F0F9FF'>" . $count++ . "</td>
                        <td style='width: 53%; border: 1px solid black; background-color: #F0F9FF'>" . $quest . "</td>
                        <td style='width: 8%; border: 1px solid black; text-align: center'>" . $answer0 . "</td>
                        <td style='width: 8%; border: 1px solid black; text-align: center'>" . $answer1 . "</td>
                        <td style='width: 8%; border: 1px solid black; text-align: center'>" . $answer2 . "</td>
                        <td style='width: 8%; border: 1px solid black; text-align: center'>" . $answer3 . "</td>
                        <td style='width: 10%; border: 1px solid black; text-align: center'>" . $answer4 . "</td>
                    </tr>";
      }

      if ($question->type == 'open_ended') {
        // $answer = $question->answers->answer ?? '';
        $section_html .= "
                      <tr>
                        <td style='width: 5%; text-align: center; background-color: #F0F9FF'>" . $count . "</td>
                        <td colspan='6' style='width: 5%; border: 1px solid black; background-color: #F0F9FF'>" . $quest . "</td>
                      </tr>
                      <tr>
                        <td style='width: 5%; text-align: center; background-color: #F0F9FF'><br /></td><td colspan='6' style='width: 5%; border: 1px solid black'>" . $answer . "</td>
                      </tr>";
      }
    }

    $section_html .= "
        </tbody>
        </table>";

    return $section_html;
  }

  public function createDSMSELFTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black'>
                            <thead>
                              <tr style='background-color: #6A2C75'>
                                <td colspan='8'>
                                  <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                      margin-bottom: 8px;
                                      color: white; '>" . $title . "
                                    </p>
                                </td>
                              </tr>
                            </thead>
        <tbody>
          <tr style='background-color: #DBE4F0'>
            <td colspan='2' style='width: 58%'>During the past TWO (2) WEEKS, how much (or how often) have you been bothered by the following problems?</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >None Not at all</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Slight Rare, less than a day or two</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Mild Several days</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Moderate More than half the days</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Severe Nearly every day</td>
            <td
              style='
                width: 7%;
                background-color: #DBE4F0;
                font-weight: bold;
                text-align: center;
                border-top: 1px solid #DBE4F0;
                border: 1px solid black;
              '
            >Highest Domain Score (clinician)</td>
          </tr>";
    $count = 0;
    $group_point = 0;
    foreach($response->assessment_tool->assessment_groups as $assessment_group) {
      $assessment_group_point = AssessmentGroupPoint::where('response_id', $response->id)
        ->where('assessment_group_id', $assessment_group->id)
        ->latest() // This will order the results by the created_at column in descending order (latest first).
        ->first();
      $group_point = $assessment_group_point->point;
      foreach ($assessment_group->questions as $question) {
        $count++;
        $quest = $question->title ?? '';
        $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
        $answer = $answer->answer ?? '';
        // $answer = $question->answers->answer ?? '';


        $answer0 = ($answer == '0' ? $answer : '');
        $answer1 = ($answer == '1' ? $answer : '');
        $answer2 = ($answer == '2' ? $answer : '');
        $answer3 = ($answer == '3' ? $answer : '');
        $answer4 = ($answer == '4' ? $answer : '');

        $section_html .= "
              <tr>
                  <td rowspan='2' style='width: 4%; border: 1px solid black; text-align: center;'>" . $count . "</td>
                  <td style='width: 54%; border: 1px solid black'>" . $count . "  " . $quest . "</td>
                  <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer0</td>
                  <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer1</td>
                  <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer2</td>
                  <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer3</td>
                  <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer4</td>
                  <td style=' width: 7%; background-color: #DBE4F0; border: 1px solid black; text-align: center;'>" . $group_point . "</td>
              </tr>";
      }
    }

    $section_html .= "
        </tbody>
        </table>";

    return $section_html;
  }

  public function createDSMPARENTTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black'>
                            <thead>
                              <tr style='background-color: #6A2C75'>
                                <td colspan='8'>
                                  <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                      margin-bottom: 8px;
                                      color: white; '>" . $title . "
                                    </p>
                                </td>
                              </tr>
                            </thead>
        <tbody>
          
          <tr style='background-color: #DBE4F0'>
            <td colspan='2' style='width: 58%'>During the past TWO (2) WEEKS, how much (or how often) has your child…</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >None Not at all</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Slight Rare, less than a day or two</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Mild Several days</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Moderate More than half the days</td>
            <td
              style='
                width: 7%;
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
              '
            >Severe Nearly every day</td>
            <td
              style='
                width: 7%;
                background-color: #DBE4F0;
                font-weight: bold;
                text-align: center;
                border-top: 1px solid #DBE4F0;
                border: 1px solid black;
              '
            >Highest Domain Score (clinician)</td>
          </tr>";
    $count = 0;
    foreach($response->assessment_tool->assessment_groups as $assessment_group) {
        $assessment_group_point = AssessmentGroupPoint::where('response_id', $response->id)
        ->where('assessment_group_id', $assessment_group->id)
        ->latest() // This will order the results by the created_at column in descending order (latest first).
        ->first();
  
        $group_point = $assessment_group_point->point;
      foreach ($assessment_group->questions as $question) {
        $count++;
        $quest = $question->title ?? '';
        $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
        $answer = $answer->answer ?? '';

        $answer0 = ($answer == '0' ? $answer : '');
        $answer1 = ($answer == '1' ? $answer : '');
        $answer2 = ($answer == '2' ? $answer : '');
        $answer3 = ($answer == '3' ? $answer : '');
        $answer4 = ($answer == '4' ? $answer : '');
        $yes = ($answer == 'Yes' ? $answer : '');
        $no = ($answer == 'No' ? $answer : '');
        $none = ($answer == 'Don\'t Know' ? $answer : '');

        if ($question->type == 'multiple_choice') {
          $section_html .= "
                  <tr>
                      <td rowspan='2' style='width: 4%; border: 1px solid black; text-align: center;'>" . $count . "</td>
                      <td style='width: 54%; border: 1px solid black'>" . $count . "  " . $quest . "</td>
                      <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer0</td>
                      <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer1</td>
                      <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer2</td>
                      <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer3</td>
                      <td style='width: 7%; border: 1px solid black; text-align: center;'>$answer4</td>
                      <td style=' width: 7%; background-color: #DBE4F0; border: 1px solid black; text-align: center;'>" . $group_point . "</td>
                  </tr>";
        }

        if ($question->type == 'open_ended') {
          $section_html .= "
                  <tr>
                      <td rowspan='2' style='width: 4%; border: 1px solid black; text-align: center;'>" . $count . "</td>
                      <td style='width: 54%; border: 1px solid black'>" . $count . "  " . $quest . "</td>
                      <td style='width: 7%; border: 1px solid black; text-align: center;'>" . $yes . "</td>
                      <td colspan='2' style='width: 7%; border: 1px solid black; text-align: center;'>" . $no . "</td>
                      <td colspan='2' style='width: 7%; border: 1px solid black; text-align: center;'>" . $none . "</td>
                      <td style=' width: 7%; background-color: #DBE4F0; border: 1px solid black; text-align: center;'>" . $group_point . "</td>
                  </tr>";
        }
      }
    }
    $section_html .= "
        </tbody>
        </table>";

    return $section_html;
  }

  public function createLEVEL2TTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black'>
                            <thead>
                              <tr style='background-color: #6A2C75'>
                                <td colspan='8'>
                                  <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                      margin-bottom: 8px;
                                      color: white; '>" . $title . "
                                    </p>
                                </td>
                              </tr>
                            </thead>
                        <tbody>
                          <tr>
                            <td colspan='7' style='width: 90%; border: 1px solid black'></td>
                            <td
                              style='
                                width: 10%;
                                border: 1px solid black;
                                background-color: #DBE4F0;
                                font-weight: bold;
                                text-align: center;
                              '
                            >Clinician Use</td>
                          </tr>
                          <tr style='border: 1px solid black'>
                            <td colspan='7' style='width: 93%; font-weight: bold; border: 1px solid black'>In the past SEVEN (7) DAYS....</td>
                            <td
                              style='
                                width: 7%;
                                background-color: #DBE4F0;
                                font-weight: bold;
                                text-align: center;
                                border-bottom: 1px solid #DBE4F0;
                              '
                            >Item</td>
                          </tr>
                          <tr style='background-color: #DBE4F0'>
                            <td colspan='2' style='width: 58%'></td>
                            <td
                              style='
                                width: 7%;
                                border: 1px solid black;
                                font-weight: bold;
                                text-align: center;
                              '
                            >Never</td>
                            <td
                              style='
                                width: 7%;
                                border: 1px solid black;
                                font-weight: bold;
                                text-align: center;
                              '
                            >Rarely</td>
                            <td
                              style='
                                width: 7%;
                                border: 1px solid black;
                                font-weight: bold;
                                text-align: center;
                              '
                            >Sometimes</td>
                            <td
                              style='
                                width: 7%;
                                border: 1px solid black;
                                font-weight: bold;
                                text-align: center;
                              '
                            >Often</td>
                            <td
                              style='
                                width: 7%;
                                border: 1px solid black;
                                font-weight: bold;
                                text-align: center;
                              '
                            >Always</td>
                            <td
                              style='
                                width: 7%;
                                background-color: #DBE4F0;
                                font-weight: bold;
                                text-align: center;
                                border-top: 1px solid #DBE4F0;
                                border: 1px solid black;
                              '
                            >Score</td>
                          </tr>";
    $count = 0;
    foreach ($response->assessment_tool->questions as $question) {
      $count++;
      $quest = $question->title ?? '';
      $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
      // $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->get();
      $point = $answer->level ?? '';
      $answer = $answer->answer ?? '';
      // $answer = $question->answers->answer ?? '';
      $answer1 = ($answer == '1' ? $answer : '');
      $answer2 = ($answer == '2' ? $answer : '');
      $answer3 = ($answer == '3' ? $answer : '');
      $answer4 = ($answer == '4' ? $answer : '');
      $answer5 = ($answer == '5' ? $answer : '');
      $section_html .= "
             <tr>
                <td style='width: 7%; border: 1px solid black; text-align: center;'>" . $count . "</td>
                <td style='width: 51%; border: 1px solid black'><table><tr><td></td><td>" . $quest . "</td></tr></table></td>
                <td style='width: 7%; border: 1px solid black; text-align: center;'>" . $answer1 . "</td>
                <td style='width: 7%; border: 1px solid black; text-align: center;'>" . $answer2 . "</td>
                <td style='width: 7%; border: 1px solid black; text-align: center;'>" . $answer3 . "</td>
                <td style='width: 7%; border: 1px solid black; text-align: center;'>" . $answer4 . "</td>
                <td style='width: 7%; border: 1px solid black; text-align: center;'>" . $answer5 . "</td>
                <td style=' width: 7%; background-color: #DBE4F0; border: 1px solid black; text-align: center;'>" . $point . "</td>
              </tr>";
    }
    $section_html .= "
          <tr>
            <td colspan='7' style='font-weight: bold; text-align: right; background-color: #DBE4F0; border: 1px solid black'>Total/Partial Raw Score:</td>
            <td style='width: 7%; border: 1px solid black; text-align: center; background-color: #DBE4F0'></td>
          </tr>
          <tr>
            <td colspan='7' style='font-weight: bold; text-align: right; background-color: #DBE4F0; border: 1px solid black'>Prorated Total Raw Score:</td>
            <td style='width: 7%; border: 1px solid black; text-align: center; background-color: #DBE4F0'></td>
          </tr>
          <tr>
            <td colspan='7' style='font-weight: bold; text-align: right; background-color: #DBE4F0; border: 1px solid black'>T-Score:</td>
            <td style='width: 7%; border: 1px solid black; text-align: center; background-color: #DBE4F0'></td>
          </tr>";

    $section_html .= "
        </tbody>
        </table>";

    return $section_html;
  }

  public function createMRS9QTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black; margin-top: 8px;'>
                            <thead>
                                      <tr style='background-color: #6A2C75'>
                                        <td colspan='3'>
                                          <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                              margin-bottom: 8px; color: white; '>" . $title . "
                                            </p>
                                        </td>
                                      </tr>
                            </thead>
                            <tbody>";
    $count = 0;
    foreach ($response->assessment_tool->questions as $question) {
      $count++;
      $quest = $question->title ?? '';
      $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
      // $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->get();
      // dd($answer);
      $answer1 = $answer->answer ?? '';
      // $answer = $question->answers->answer ?? '';
      if ($response->assessment_tool->id == 10) {
        $answer1 = mapAnswerToText($answer1);
      }
      if ($response->assessment_tool->id == 19) {
        $answer1 = $answer->option->title ?? $answer1;
      }
      if ($response->assessment_tool->id == 16) {
        $option = $answer->option->title ?? '';
      }
      $section_html .= "<tr style='border: 1px solid black;'>
                <td style='width: 80%; border-top: 1px solid black; border-left: 1px solid black; border-bottom: 1px solid black; border-right: none'><table><tr><td>" . $quest . "</td></tr></table></td>";
      if ($response->assessment_tool->id == 16) {
        $section_html .= "<td style='width: 5%; text-align: center; border-top: 1px solid black; border-left: none; border-bottom: 1px solid black; border-right: 1px solid black'>" . $option . "</td>";
        }
      $section_html .= "<td style='width: 15%; text-align: center; border-top: 1px solid black; border-left: none; border-bottom: 1px solid black; border-right: 1px solid black'>" . $answer1 . "</td>
              </tr>";
    }

    $section_html .= "
        </tbody>
        </table>";

    return $section_html;
  }

  public function createLSPTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black; margin-top: 8px;'>
                            <thead>
                                      <tr style='background-color: #6A2C75'>
                                        <td colspan='2'>
                                          <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                              margin-bottom: 8px; color: white; '>" . $title . "
                                            </p>
                                        </td>
                                      </tr>
                            </thead>
                            <tbody>";
    $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Question</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Answer</p>
                                </td>
                            </tr>";
    $section_html .= "";
    foreach ($response->assessment_tool->questions as $question) {
      $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
      $quest = $question->title ?? '';
      // if ($response->assessment_tool->id == '14') {
        $answer1 = $answer->option->title ?? '';
      // } else {
      //   $answer1 = $answer->answer ?? '';
      // }
      if ($question->type === 'multiple_choice') {
        $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $quest . "</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $answer1 . "</p>
                                </td>
                            </tr>";
      }
    }

    $section_html .= "</tbody>
                    </table>";

    return $section_html;
  }

  public function createBarthalTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black; margin-top: 8px;'>
                            <thead>
                                      <tr style='background-color: #6A2C75'>
                                        <td colspan='2'>
                                          <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                              margin-bottom: 8px; color: white; '>" . $title . "
                                            </p>
                                        </td>
                                      </tr>
                            </thead>
                            <tbody>";
    $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Question</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Answer</p>
                                </td>
                            </tr>";
    $section_html .= "";
    foreach ($response->assessment_tool->questions as $question) {
      $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
      $quest = $question->title ?? '';
      $answer1 = $answer->option->title ?? '';
      $section_html .= "<tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $quest . "</p>
                            </td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $answer1 . "</p>
                            </td>
                        </tr>";
    }

    $section_html .= "</tbody>
                    </table>";

    return $section_html;
  }

  public function createCaregiverBurdenTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black; margin-top: 8px;'>
                            <thead>
                                      <tr style='background-color: #6A2C75'>
                                        <td colspan='2'>
                                          <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                              margin-bottom: 8px; color: white; '>" . $title . "
                                            </p>
                                        </td>
                                      </tr>
                            </thead>
                            <tbody>";
    $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Question</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Answer</p>
                                </td>
                            </tr>";
    $section_html .= "";
    foreach ($response->assessment_tool->assessment_groups as $assessment_group) {
      $assessment_group_title = $assessment_group->title ?? '';
      $section_html .= "<tr>
            <td colspan='2'
              style='
                border: 1px solid black;
                border-right: none;
                background-color: #EBF1DD;
              '>
              <table style='width: 100%'>
                <tr><td style='width: 1%'></td><td style='width: 99%'>" . $assessment_group_title . "</td></tr>
              </table>
            </td>
            </tr>";
      foreach ($assessment_group->questions as $question) {
        $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
        $quest = $question->title ?? '';
        $answer1 = $answer->answer ?? '';
        if ($response->assessment_tool->id == '18') {
          $answer1 = $answer->option->title ?? '';
        }
        $section_html .= "<tr>
                    <td style='width: 10%; text-align: center; border: 1px solid black'>" . $quest . "</td>
                    <td style='width: 45%; border: 1px solid black; border-right: none'>" . $answer1 . "</td>
                  </tr>";
      }
      /*$section_html .= "<tr>
                        <td colspan='3' style='border: 1px solid black; border-right: none'>
                          <table style='width: 100%'><tr><td style='width: 20%'></td><td style='width: 60%'><span style='font-weight: bold'>Group A subtotal </span><span style='text-decoration: underline'></span> /</td><td style='width: 20%'></td></tr></table>
                        </td>
                      </tr>";*/
    }

    $section_html .= "</tbody>
                    </table>";

    return $section_html;
  }

  public function createCIQRTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black; margin-top: 8px;'>
                            <thead>
                                      <tr style='background-color: #6A2C75'>
                                        <td colspan='2'>
                                          <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                              margin-bottom: 8px; color: white; '>" . $title . "
                                            </p>
                                        </td>
                                      </tr>
                            </thead>
                            <tbody>";
    $section_html .= "<tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Question</p>
                            </td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Answer</p>
                            </td>
                        </tr>";
    foreach ($response->assessment_tool->questions as $question) {
      // foreach ($assessment_group->questions as $question) {
      $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
      $quest = $question->title ?? '';
      $answer1 = $answer->option->title ?? '';
      $section_html .= "<tr>
                    <td style='width: 10%; text-align: center; border: 1px solid black'>" . $quest . "</td>
                    <td style='width: 45%; border: 1px solid black; border-right: none'>" . $answer1 . "</td>
                  </tr>";
    }

    $section_html .= "</tbody>
                    </table>";

    return $section_html;
  }

  public function createLawtonBrodyTool($response, $section_html)
  {
    // Add questions and answers to the HTML
    $title = $response->assessment_tool->title ?? '';
    $section_html .= "<br /> <table style='width: 100%; border-collapse: collapse; border: 1px solid black; margin-top: 8px;'>
                            <thead>
                                      <tr style='background-color: #6A2C75'>
                                        <td colspan='3'>
                                          <p style=' font-size: 14pt; font-weight: bold; margin-top: 8px;
                                              margin-bottom: 8px; color: white; '>" . $title . "
                                            </p>
                                        </td>
                                      </tr>
                            </thead>
                            <tbody>";
    $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Question</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Answer</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Score</p>
                                </td>
                            </tr>";
    $section_html .= "";
    $total_score = 0;
    foreach ($response->assessment_tool->questions as $question) {
      $answer = Answer::with('option')->where('response_id', $response->id)->where('question_id', $question->id)->first();
      $quest = $question->title ?? '';
      if ($question->type === 'multiple_choice') {
        $answer1 = $answer->option->title ?? '';
        $score = $answer->option->point ?? '';
        $total = intval($score);
        $total_score +=$total;
        $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $quest . "</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $answer1 . "</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $score . "</p>
                                </td>
                            </tr>";
      }
    }

    $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px;' colspan='2'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Total Score</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>" . $total_score . "</p>
                                </td>
                            </tr>";

    $section_html .= "</tbody>
                    </table>";

    return $section_html;
  }

  public function getUserForm(Request $request)
  {
    try {
      if (!auth('sanctum')->user()) {
        return $this->errorResponse("User is not authenticated", 401);
      }
      $user_id = auth('sanctum')->user()->id;
      $user_form = UserForm::where('user_id', $user_id)->latest()->get();
      $data = [];

      foreach ($user_form as $uf) {
        $form = Form::find($uf->form_id);

        $data[] = [
          'id' => $uf->id,
          'form_id' => $uf->form_id,
          'form_status' => $uf->form_type,
          'form_name' => $form->name,
          'created_at' => $uf->created_at,
        ];
      }

      return $this->successResponse($data, 'Form fields get successfully!.', 200);
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 500);
    }
  }

  public function getUserFormsData(Request $request)
  {
    //write custom query for getting user form data

    try {
      $user_form = UserForm::with('openaiResponse')->find($request->user_form_id);
      $form = Form::find($user_form->form_id);

      if (!$user_form) {
        return $this->errorResponse("User form not found", 401);
      }

      $user_form_headings = UserFormHeading::where('user_form_id', $user_form->id)
        ->orderBy('order_id')
        ->get();

      $form_data = [];
      $count = 0;
      foreach ($user_form_headings as $ufh) {
        $count++;
        $form_heading = FormHeading::find($ufh->heading_id);
        $field_data = FormData::where('user_form_heading_id', $ufh->id)->get();

        if ($ufh->heading_type === 'custom') {
          $custom_heading = CustomHeading::where('id', $ufh->heading_id)->first();
          $form_data[] = [
            'counter' => $count,
            'heading_name' => $custom_heading->form_heading,
            'user_form_heading_id' => $ufh->id,
            'heading_id' => $ufh->heading_id,
            'order_id' => $ufh->order_id,
            'heading_type' => $ufh->heading_type,
            'heading_status' => $ufh->heading_status,
            'field_name' => $custom_heading->custom_field,
          ];
        } elseif ($ufh->heading_type === 'assessment_tool') {
          $response = Response::with('assessment_tool')->find($ufh->heading_id);
          /*$response_data = DB::table('responses')
                        ->join('assessment_tools', 'responses.assessment_tool_id', '=', 'assessment_tools.id')
                        ->where('responses.user_form_heading_id', $ufh->id)
                        ->select('responses.response_data', 'assessment_tools.name')
                        ->get();*/

          $form_data[] = [
            'counter' => $count,
            'heading_name' => $response->assessment_tool->title,
            'user_form_heading_id' => $ufh->id,
            'heading_id' => $ufh->heading_id,
            'order_id' => $ufh->order_id,
            'heading_type' => $ufh->heading_type,
            'heading_status' => $ufh->heading_status,
            'assessment_tool_id' => $response->assessment_tool_id,
            'saved_assessment_tool_id' => $response->id,
          ];
        } else {
          $form_data[] = [
            'counter' => $count,
            'heading_name' => $form_heading->form_heading,
            'user_form_heading_id' => $ufh->id,
            'heading_id' => $ufh->heading_id,
            'order_id' => $ufh->order_id,
            'heading_type' => $ufh->heading_type,
            'heading_status' => $ufh->heading_status,
            'field_data' => $field_data,
          ];
        }
      }

      // Add openai_response to the form_data
      if ($user_form->openaiResponse) {
        $openai_response_data = [
          'note_response' => $user_form->openaiResponse->note_response,
          'audio_response' => $user_form->openaiResponse->audio_response,
        ];
        $form_data[]['openai_response'] = $openai_response_data;
      }

      $data = [
        'form_title' => $form->name,
        'form_id' => $form->id,
        'form_data' => $form_data
      ];


      return $this->successResponse($data, 'Form data retrieved successfully!.', 200);
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 401);
    }
  }

  public function markComplete($id)
  {
    try {
      $user_form_id = UserFormHeading::find($user_form_id);
      $user_form_id->heading_status = 'completed';
      $user_form_id->save();
      return $this->successResponse($user_form_id, 'Status marked as complete!.', 200);
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 500);
    }
  }


  public function changeStatus($user_form_heading_id)
  {
    try {
      $user_form_heading = UserFormHeading::findorfail($user_form_heading_id);
      $user_form_heading->heading_status = 'completed';
      $user_form_heading->save();

      return $this->successResponse($user_form_heading, "Heading retrieved successfully", 200);
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 500);
    }
  }

  public function searchFilter(Request $request)
  {
    try {
      $user_id = auth('sanctum')->user()->id;

      $user_form = UserForm::where('user_id', $user_id)
        ->where(function ($query) use ($request) {
          $query->where('user_form.id', $request->value)
            ->orWhere('forms.name', 'like', '%' . $request->value . '%');
        })
        ->leftjoin('forms', 'user_form.form_id', '=', 'forms.id')
        ->select('user_form.*', 'forms.name')
        ->get();
      $data = [];

      foreach ($user_form as $uf) {
        $data[] = [
          'id' => $uf->id,
          'form_id' => $uf->form_id,
          'form_status' => $uf->form_type,
          'form_name' => $uf->form->name,
          'created_at' => $uf->created_at,
        ];
      }

      return $this->successResponse($data, "Data retrieved successfully", 200);
    } catch (\Throwable $th) {
      return $this->errorResponse($th->getMessage(), 500);
    }
  }




  // Create Note API
  public function create_note(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'date' => 'required|date',
      'related_goal' => 'required|string',
      'interaction_type' => 'required|string',
      'participants' => 'required|string',
      'activity' => 'required|string',
      'impact' => 'required|string',
      'next_steps' => 'required|string',
      'report_id' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->errorResponse($validator->messages(), 422);
    }

    $validatedData = $validator->validated(); // Retrieve the validated data

    $interaction = Interaction::create($validatedData);

    return $this->successResponse($interaction, 'Create Note created successfully', 201);
  }

  // Update Note API
  public function updateCreateNote(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'report_id' => 'required',
      'date' => 'required|date',
      'related_goal' => 'required|string',
      'interaction_type' => 'required|string',
      'participants' => 'required|string',
      'activity' => 'required|string',
      'impact' => 'required|string',
      'next_steps' => 'required|string',
      'id' => 'required|numeric'
    ]);
    // dd($request->all());

    if ($validator->fails()) {
      return $this->errorResponse($validator->messages(), 422);
    }

    $reportId = $validator->validated()['report_id'];
    $id = $validator->validated()['id'];

    // Find the interaction based on the report_id
    // $interaction = Interaction::where('report_id', $reportId)->first();
    $interaction = Interaction::where('id', $id)->first();

    if (!$interaction) {
      return $this->errorResponse('Create Note not found', 404);
    }

    // Update the interaction fields
    $interaction->date = $request->input('date');
    $interaction->related_goal = $request->input('related_goal');
    $interaction->interaction_type = $request->input('interaction_type');
    $interaction->participants = $request->input('participants');
    $interaction->activity = $request->input('activity');
    $interaction->impact = $request->input('impact');
    $interaction->next_steps = $request->input('next_steps');

    $interaction->save();

    return $this->successResponse($interaction, 'Create Note updated successfully', 200);
  }


  // get Created note by report_id 

  public function getCreateNote(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'report_id' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->errorResponse($validator->messages(), 422);
    }

    $reportId = $validator->validated()['report_id'];

    // Get the interactions based on the report_id
    $interactions = Interaction::where('report_id', $reportId)->get();

    return $this->successResponse($interactions, 'Create Note retrieved successfully', 200);
  }

  //  Delete Create Note API

  public function deleteCreateNote(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'id' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->errorResponse($validator->messages(), 422);
    }

    $Id = $validator->validated()['id'];

    // Find the interaction based on the report_id
    $interaction = Interaction::where('id', $Id)->first();

    if (!$interaction) {
      return $this->errorResponse('Create Note not found', 404);
    }

    // Delete the interaction
    $interaction->delete();

    return $this->successResponse(null, 'Create Note deleted successfully', 200);
  }


  public function storeTherapists(Request $request)
  {
    try {
      DB::beginTransaction();

      $user = new User();
      $name = $request->input('first_name');
      $surename = $request->input('last_name');

      $name = $name . ' ' . $surename;
      $user->name = $name;
      $user->email = $request->email;
      $user->password = bcrypt('12345678');
      $user->save();

      $user_detail = new UserDetail();
      $user_detail->state = $request->input('state');
      $user_detail->profession = $request->input('profession');
      $user_detail->graduation_year = $request->input('graduation_year');
      $user_detail->institution = $request->input('institution');
      $user_detail->save();

      $permissions = Permission::pluck('id', 'id')->all();

      $role = Role::findByName('user'); // Replace 'admin' with the desired role name
      $user->assignRole($role);
      $adminEmail = 'admin@example.com'; // Replace with the admin's email address
      $emailData = [
        'name' => $user->name,
        'email' => $user->email,
        'state' => $user_detail->state,
        'profession' => $user_detail->profession,
        'graduation_year' => $user_detail->graduation_year,
        'institution' => $user_detail->institution,
      ];

      Mail::to($adminEmail)->send(new TherapistCreated($emailData));

      DB::commit();

      return $this->successResponse($user_detail, 'Form data saved successfully!.', 200);
    } catch (\Throwable $th) {
      DB::rollBack();
      return $this->errorResponse($th->getMessage(), 500);
    }
  }
}
