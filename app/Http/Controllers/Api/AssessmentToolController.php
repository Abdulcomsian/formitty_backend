<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssessmentTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Models\Question;

class AssessmentToolController extends ApiController
{
    public function getQuestions(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'assessment_id' => 'required|integer',
        ]);

        ### On fail returns responses ###
        if ($validator->fails()) {
            return $this->errorResponse($validator->messages(), 422);
        }

        try {

            $assessment_tools = AssessmentTool::with('questions', 'questions.options')->find($request->assessment_id);
            return $this->successResponse($assessment_tools, 'Questions get successfully!.', 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }
}
