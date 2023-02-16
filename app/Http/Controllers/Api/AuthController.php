<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\ApiController;

class AuthController extends ApiController
{

    //convert c
    public function register(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
                [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required',
                ]);

            if ($validateUser->fails()) {
                return $this->errorResponse($validateUser->messages(), 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole('user');

            $success['token'] = $user->createToken('API TOKEN')->plainTextToken;
            $success['name'] = $user->first_name . ' ' . $user->last_name;

            return $this->successResponse($success, 'User register successfully.', 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($validateUser->messages(), 401);
        }
    }

    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]);

            if ($validateUser->fails()) {
                return $this->errorResponse($validateUser->messages(), 401);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {

                return $this->errorResponse('Email & Password does not match with our record.', 401);

            }

            $user = User::where('email', $request->email)->first();

            $success['token'] = $user->createToken('API TOKEN')->plainTextToken;
            $success['name'] = $user->first_name . ' ' . $user->last_name;
            $success['user_id'] = $user->id;
            if($user->hasRole('admin') == 'admin')
            {
                $role = "admin";
            }
            if($user->hasRole('user') == 'user')
            {
                $role = "user";
            }

            $success['role'] = $role;

            return $this->successResponse($success, 'User Logged In Successfully.');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function logout(Request $request)
    {
        try {
            if (!Auth::id()) {
                return $this->errorResponse('You are already logout.', 401);
            } else {
                $request->user()->currentAccessToken()->delete();
                return $this->successResponse("", 'Successfully Logout', 200);
            }

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function getLoggedInUser(Request $request)
    {
        try {
            $user = Auth::user();
            return $this->successResponse($user, "", 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function import(Request $request)
    {
        try {
            /*$report = new Report();
            $report->full_name = $request->full_name;
            $report->ndis_number = $request->ndis_number;
            $report->phone_number = $request->phone_number;
            $report->email = $request->email;
            $report->qualifications = $request->qualifications;
            $report->date_of_assesment = $request->date_of_assesment;
            $report->date_of_report = $request->date_of_report;
            $report->plan_method = $request->plan_method;
            $report->plan_provider = $request->plan_provider;
            $report->contact_person = $request->contact_person;
            $report->plan_phone = $request->plan_phone;
            $report->plan_email = $request->plan_email;
            $report->plan_goals = $request->plan_goals;
            $report->file_name = 'download.docx';
            $report->save();*/
            $my_template = new \PhpOffice\PhpWord\TemplateProcessor(public_path('word.docx'));
            $my_template->setValue('email', $report->email);
            $my_template->setValue('date_of_report', $report->date_of_report);
            $my_template->setValue('full_name', $report->full_name);
            $my_template->setValue('ndis_number', $report->ndis_number);
            $my_template->setValue('contact_person', $report->contact_person);
            $my_template->saveAs(public_path($report->file_name));
//            $success['file_path'] = storage_path('helloWorld3.docx');
//            $success['file_path'] = public_path($report->file_name);
            $success['file_path'] = 'https://accrualdev.com/formity/public/'.$report->file_name;

            $success['id'] = $report->id;
//            return response()->download(public_path($report->file_name));
            return $this->successResponse($success, 'Document Generated Successfully.');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function download($id)
    {
        $report = Report::findorfail($id);
        return response()->download(public_path($report->file_name));
    }

    public function delete($id)
    {
       $user = User::findorfail($id);
        $user->delete();
    return $this->successResponse($user, 'User Deleted Successfully.');
    }
}
