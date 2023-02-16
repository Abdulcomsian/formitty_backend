<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormHeading;
use App\Models\FormData;
use App\Models\FormField;
use App\Models\UserForm;
use App\Models\CustomHeading;
use App\Models\UserFormHeading;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
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

    public function storeFormField(Request $request)
    {
        $input = $request->all();
        $array = [];
        $user_form = new UserForm();
        $user_form->form_id = '1';
        $user_form->user_id = Auth::user()->id ?? '2';
        $user_form->save();
//        try {
        //get selected form columns from forms table
        foreach ($input as $key => $value) {
            if ($key == 'form_id' || $key == 'marked' || $key == 'form_heading_id') {
                continue; // skip to the next iteration of the loop
            }

            $result = extract_values($key);
            $name = $result[0];
            $heading_id = $result[1];
            $order_id = $result[2];

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
//                $custom_field = CustomHeading::where('user_form_id', $user_form->id)
//                    ->where('user_heading_id', $order_id)
//                    ->first();
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

        self::generateWordDocument($user_form->id);

//            $my_template->saveAs(public_path('download.docx'));
        $success['file_path'] = 'https://accrualdev.com/formity/public/download.docx';
        $success['fields'] = $input;
        $success['user_form_id'] = $user_form->id;
        return $this->successResponse($success, 'Document Generated Successfully.');

//        } catch (\Throwable $th) {
//            return $this->errorResponse($th->getMessage(), 401);
//        }
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

        $count = 1;
        $html = View::make('users.sections.header')->render();
        foreach ($usr_forms->userFormHeadings as $userFormHeading) {
            if ($userFormHeading->heading_type == 'custom') {
//                dd($userFormHeading->customHeading->form_heading);
                $section_html = $userFormHeading->customHeading->form_heading;
            } else {
                $section_html = $userFormHeading->formHeading->section_html;
            }
            if ($userFormHeading->heading_type != 'custom') {
                foreach ($userFormHeading->formData as $formData) {
                    /*$data = $formData->toArray();
                    foreach ($data as $key => $value) {
                        if ($userFormHeading->formHeading->section_html) {
                            dd($value);
                        }
                        $section_html = str_replace('{{' . $key . '}}', $value, $section_html);
                    }*/
                    $field_name = $formData->name;
                    $field_value = $formData->value;
                    $section_html = str_replace("{{" . $field_name . "}}", $field_value, $section_html);
                }
            }
            $html .= $section_html;
        }
        /*foreach ($usr_forms->customHeadings as $customHeading) {
            $html .= $customHeading->custom_heading . " : " . $customHeading->custom_field;
        }*/
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
            foreach ($user_form_headings as $ufh) {
                $form_heading = FormHeading::find($ufh->heading_id);
                $field_data = FormData::where('user_form_heading_id', $ufh->id)->get();

                if ($ufh->heading_type === 'custom') {
                    $custom_heading = CustomHeading::where('id', $ufh->heading_id)->first();
                    $form_data[] = [
                        'heading_name' => $custom_heading->form_heading,
                        'order_id' => $ufh->order_id,
                        'heading_type' => $ufh->heading_type,
                        'field_name' => $custom_heading->custom_field,
                    ];
                } else {
                    $form_data[] = [
                        'heading_name' => $form_heading->form_heading,
                        'order_id' => $ufh->order_id,
                        'heading_type' => $ufh->heading_type,
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

    public function markComplete($user_heading_id)
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

}
