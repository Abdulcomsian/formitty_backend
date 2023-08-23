<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends ApiController
{
    public function dashboardApi()
    {
        try {
            $total_reports = UserForm::where('user_id', auth()->user()->id)->count();
            $total_drafts = UserForm::where('form_type','draft')->where('user_id', auth()->user()->id)->count();
            $total_submitted = UserForm::where('form_type','submitted')->where('user_id', auth()->user()->id)->count();
            $total_approved = UserForm::where('form_type','approved')->where('user_id', auth()->user()->id)->count();
            if(auth()->user()->id == 1){
                $total_reports = UserForm::count();
                $total_drafts = UserForm::where('form_type','draft')->count();
                $total_submitted = UserForm::where('form_type','submitted')->count();
                $total_approved = UserForm::where('form_type','approved')->count();
            }
            $data = [
              'total_reports' => $total_reports,
              'total_drafts' => $total_drafts,
              'total_submitted' => $total_submitted,
              'total_approved' => $total_approved,
            ];
            return $this->successResponse($data, 'Form data retrieved successfully!.', 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }
}
