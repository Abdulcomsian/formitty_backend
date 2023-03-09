<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
use Illuminate\Support\Facades\DB;
use Auth;

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
            return $this->errorResponse($th->getMessage(), 401);
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
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function storeFormField(Request $request, $update = null)
    {
        $input = $request->all();
        $array = [];

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
                $result = extract_values($key);
                $name = $result[0];
                $heading_id = $heading_id;
                $order_id = $result[2];
                if ($name == 'assessment_tool') {
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
                    $form_data->user_id = Auth::user()->id ?? '2';
                    $form_data->save();

                    if (!in_array($heading_id, $array)) {
                        array_push($array, $heading_id);
                        $user_form_heading = new UserFormHeading();
                        $user_form_heading->user_id = Auth::user()->id ?? '2';
                        $user_form_heading->order_id = $order_id;
                        $user_form_heading->heading_id = $heading_id;
                        $user_form_heading->user_form_id = $user_form->id;
                        $user_form_heading->save();
                    }

                    $form_data = FormData::findorfail($form_data->id);
                    $form_data->user_form_heading_id = $user_form_heading->id;
                    $form_data->save();
//                    $custom_heading = $this->checkCustomHeadingOrCustomField($name, $heading_id, $order_id, $value, $array, $user_form);
                }
            }
        }
        /*if($update){
            $this->updateResponse($update, $user_form);
        }*/

        self::generateWordDocument($user_form->id);

        $success['file_path'] = 'https://accrualdev.com/formity/public/download.docx';
        $success['fields'] = $input;
        $success['user_form_id'] = $user_form->id;
        return $this->successResponse($success, 'Document Generated Successfully.');

    }

    /*public function storeFormField(Request $request, $update = null)
    {
        $input = $request->all();
        $array = [];
        $user_form = new UserForm();
        $user_form->form_id = 1;
        $user_form->user_id = Auth::user()->id ?? '2';
        $user_form->save();
        $new_response = $user_form;
//        try {
        //get selected form columns from forms table
        foreach ($input as $key => $value) {
            if ($key == 'form_id' || $key == 'marked' || $key == 'form_heading_id') {
                continue; // skip to the next iteration of the loop
            }
            if ($update) {
                $string = $key;
                $heading_id = substr($string, strpos($string, "part_") + 5, 1);
                $result = extract_values($key);
                $name = $result[0];
                if ($name == 'assessment_tool') {
                    continue;
                }
                $heading_id = $heading_id;
                $order_id = $result[2];
            } else {
                $result = extract_values($key);
                $name = $result[0];
                $heading_id = $result[1];
                $order_id = $result[2];
            }


            if ($name == 'custom_heading') {
                $custom_heading = new CustomHeading();
                $custom_heading->user_form_id = $user_form->id;
                $custom_heading->user_heading_id = $order_id;
                $custom_heading->form_heading = $value;
                $custom_heading->save();

                $userFormHeading = new UserFormHeading;
                $userFormHeading->user_id = Auth::user()->id ?? '2';
                $userFormHeading->heading_id = $custom_heading->id;
                $userFormHeading->order_id = $order_id;
                $userFormHeading->user_form_id = $user_form->id;
                $userFormHeading->heading_type = 'custom';
                $userFormHeading->save();

                $custom_heading = CustomHeading::findorfail($custom_heading->id);
                $custom_heading->user_heading_id = $userFormHeading->id;
                $custom_heading->save();

            } else if ($name == 'custom_field') {
                $custom_field = CustomHeading::findorfail($custom_heading->id);

                if ($custom_field) {
                    $custom_field->custom_field = $value;
                    $custom_field->save();
                }
            } else {

                if ($name != 'custom_heading' && $name != 'custom_field') {
                    $form_data = new FormData();
                    $form_data->name = $name;
                    $form_data->form_heading_id = $heading_id;
                    $form_data->order_id = $order_id;
                    $form_data->value = $value;
                    $form_data->user_id = Auth::user()->id ?? '2';
                    $form_data->save();

                    if (!in_array($heading_id, $array)) {
                        array_push($array, $heading_id);
                        $user_form_heading = new UserFormHeading();
                        $user_form_heading->user_id = Auth::user()->id ?? '2';
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

        if ($update) {
            $user_forms = Response::where('user_form_id', $update)->get();
            if (count($user_forms) > 0) {
                foreach ($user_forms as $user_form) {
                    $user_form->user_form_id = $new_response->id;
                    $user_form->save();
                }
            }
        }

        self::generateWordDocument($user_form->id);

        $success['file_path'] = 'https://accrualdev.com/formity/public/download.docx';
        $success['fields'] = $input;
        $success['user_form_id'] = $new_response->id;
        return $this->successResponse($success, 'Document Generated Successfully.');

//        } catch (\Throwable $th) {
//            return $this->errorResponse($th->getMessage(), 401);
//        }
    }*/


    private function createUserForm($request)
    {
        $user_form = new UserForm();
        $user_form->form_id = $request->form_id ?? '1';
        $user_form->user_id = Auth::user()->id ?? '2';
        $user_form->save();

        return $user_form;
    }

    private function storeAssessmentToolOrder($name, $heading_id, $order_id, $value, $user_form_data, $update)
    {
        $user_form = Response::where('user_form_id', $update)->first();
        if ($user_form) {
//            foreach ($user_forms as $user_form){
            $user_form->user_form_id = $user_form_data->id;
            $user_form->save();

            $userFormHeading = new UserFormHeading;
            $userFormHeading->user_id = Auth::user()->id ?? '2';
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
        $userFormHeading->user_id = Auth::user()->id ?? '2';
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
        $form_data->user_id = Auth::user()->id ?? '2';
        $form_data->save();
        $user_form_heading = null;
        if (!in_array($heading_id, $array)) {
            array_push($array, $heading_id);
            $user_form_heading = new UserFormHeading();
            $user_form_heading->user_id = Auth::user()->id ?? '2';
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

            DB::commit();

            return $this->successResponse($response, 'User form deleted successfully.');
        } else {
            return $this->errorResponse('User form not found.', 404);
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
        $userFormHeading->user_id = Auth::user()->id ?? '2';
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
            $user_form_heading->user_id = Auth::user()->id ?? '2';
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
        $form_data->user_id = Auth::user()->id ?? '2';
        $form_data->save();

        if (!in_array($heading_id, $array)) {
            array_push($array, $heading_id);
            $user_form_heading = new UserFormHeading();
            $user_form_heading->user_id = Auth::user()->id ?? '2';
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
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function generateWordDocument($id)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $usr_forms = UserForm::with(['userFormHeadings', 'userFormHeadings.formData', 'userFormHeadings.formHeading'])->findorfail($id);

        $usr_forms->userFormHeadings = $usr_forms->userFormHeadings->sortBy('order_id');

//        $assessment_tool = AssessmentTool::with('questions', 'answers')->findOrFail($assessment_tool_id);

        $count = 1;
        $html = View::make('users.sections.header')->render();
        $section_html = '';
        foreach ($usr_forms->userFormHeadings as $userFormHeading) {
            if ($userFormHeading->heading_type == 'custom') {
//                dd($userFormHeading->customHeading->form_heading);
                $section_html = $userFormHeading->customHeading->form_heading;
            } else {
                $section_html = $userFormHeading->formHeading->section_html;
            }
            if ($userFormHeading->heading_type != 'custom') {
                foreach ($userFormHeading->formData as $formData) {
                    $field_name = $formData->name;
                    $field_value = $formData->value;
                    $section_html = str_replace("{{" . $field_name . "}}", $field_value, $section_html);
                }
            }
            if($userFormHeading->heading_type == 'assessment_tool'){
                $response = Response::with('assessment_tool', 'assessment_tool.questions', 'assessment_tool.questions.answers')->find($userFormHeading->heading_id);
                // Add questions and answers to the HTML
                $section_html .= "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                        <tr>
                            <td>
                                <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>".$response->assessment_tool->title."</p>
                            </td>
                        </tr>
                        </table>";
                $section_html .= "<table
                        style='
                            border-collapse: collapse;
                            width: 100%;
                            margin: auto;
                            border: 1px solid lightslategray;
                        '
                        >
                        <tbody>
                            ";
                $total_points = 0;
                foreach ($response->assessment_tool->questions as $question) {
                    $answer = Answer::with('option')->where('question_id', $question->id)->first();
                    $quest = $question->title ?? '';
                    if ($question->type === 'multiple_choice') {
                        $answer1 = $answer->option->title ?? '';
                        $point = $answer->option->point ?? '';
                        $total_points += $point;
                        $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>".$quest."</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>".$answer1."</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>".$point."</p>
                                </td>
                            </tr>";
                    } elseif($question->type === 'open_ended') {
                        $answer1 = $answer->answer ?? '';
                        $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>".$quest."</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>".$answer1."</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Nill</p>
                                </td>
                            </tr>";
                    }
                    /*if ($question->type === 'multiple_choice') {
                        $html .= "<table>";
                        $html .= "<tr><td>" . $question->title ?? '' . "</td><td>" . ($answer ? $answer->option->title : '')  . "</td></tr>";

                    } elseif($question->type === 'open_ended') {
                        $html .= "<h2>".$question->title ?? ''."</h2>";
                        $html .= "<h2>".($question->answers ? $answer->option->title : '')."</h2>";
                    }*/
                }
                $section_html .= "<tr>
                                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Total pointds</p>
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>".$total_points."</p>
                                </td></tr></tbody>
                    </table>";
            }
            $html .= $section_html;
        }
        // Save file
        $fileName = "download.docx";
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $objWriter->save($fileName);
    }

    public function getUserForm(Request $request)
    {
        try {
            $user_id = Auth::user()->id ?? '2';
            $user_form = UserForm::where('user_id', $user_id)->get();
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
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function getUserFormsData(Request $request)
    {
        //write custom query for getting user form data

        try {
            $user_form = UserForm::find($request->user_form_id);
            $form = Form::find($user_form->form_id);

            if (!$user_form) {
                return $this->errorResponse("User form not found", 404);
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
                        'order_id' => $ufh->order_id,
                        'heading_type' => $ufh->heading_type,
                        'heading_status' => $ufh->heading_status,
                        'form_id' => $form->id,
                        'field_name' => $custom_heading->custom_field,
                    ];
                } elseif($ufh->heading_type === 'assessment_tool'){
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
                        'order_id' => $ufh->order_id,
                        'heading_type' => $ufh->heading_type,
                        'heading_status' => $ufh->heading_status,
                        'assessment_tool_id' => $response->assessment_tool_id,
                        'saved_assessment_tool_id' => $ufh->id,
                    ];
                } else {
                    $form_data[] = [
                        'counter' => $count,
                        'heading_name' => $form_heading->form_heading,
                        'user_form_heading_id' => $ufh->id,
                        'order_id' => $ufh->order_id,
                        'heading_type' => $ufh->heading_type,
                        'heading_status' => $ufh->heading_status,
                        'field_data' => $field_data,
                    ];
                }
            }

            $data = [
                'form_title' => $form->name,
                'form_data' => $form_data
            ];


            return $this->successResponse($data, 'Form data retrieved successfully!.', 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    /*    public function markComplete()
        {
            dd("ttt");
            try {
                $user_form_id = UserFormHeading::find($user_form_id);
                $user_form_id->heading_status = 'completed';
                $user_form_id->save();
                return $this->successResponse($user_form_id, 'Status marked as complete!.', 200);
            } catch (\Throwable $th) {
                return $this->errorResponse($th->getMessage(), 401);
            }
        }*/

    public function markComplete($id)
    {
        try {
            $user_form_id = UserFormHeading::find($user_form_id);
            $user_form_id->heading_status = 'completed';
            $user_form_id->save();
            return $this->successResponse($user_form_id, 'Status marked as complete!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }


    public function changeStatus($user_form_heading_id)
    {
        /*if($predifined == 1){
            $status = 'predefined';
        } else {
            $status = 'custom';
        }*/
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
            $user_id = Auth::user()->id ?? '2';

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

}
