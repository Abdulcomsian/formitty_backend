<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssessmentTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Response;
use Illuminate\Support\Facades\Auth;

class AssessmentToolController extends ApiController
{
    public function assessmentTools(){
        try {
            $assessment_tools = AssessmentTool::latest()->get();
            return $this->successResponse($assessment_tools, 'Assessment tools get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function userAssessmentTools(Request $request){

        $validator = Validator::make(request()->all(), [
            'user_assessment_id' => 'required|integer',
        ]);

        ### On fail returns responses ###
        if ($validator->fails()) {
            return $this->errorResponse($validator->messages(), 422);
        }

        try{
            $assessment_tools = Response::with('assessment_tool')->where([['user_id', Auth::user()->id ?? '2'],['user_form_id', $request->user_form_id]])->get();
            return $this->successResponse($assessment_tools, 'Assessment tools get successfully!.', 200);
        } catch(\Throwable $th){
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

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

    public function storeQuestions(Request $request)
    {
        $input = $request->all();

        try {
            // Create a new response object
            $response = new Response([
                'assessment_tool_id' => $request->input('assessment_id'),
                'user_id' => Auth::user()->id ?? '2',
                'user_form_id' => $request->user_form_id,
            ]);

            // Save the response object to the database
            $response->save();

            // Loop through the answers and create Answer objects for each
            foreach ($input as $key=>$value) {
                If($key == 'assessment_id' || $key == 'user_form_id'){
                    continue;
                }
                $result = extract_values_assessment($key);
                $name = $result[0];
                $question_id = $result[1];
                $option_id = $result[2] ?? null;

                if ($name == 'multiple_choice') {
                    $answer = new Answer([
                        'question_id' => $question_id,
                        'option_id' => $option_id,
                        'response_id' => $response->id
                    ]);
                } elseif ($name == 'open_ended') {
                    $answer = new Answer([
                        'question_id' => $question_id,
                        'answer' => $value,
                        'response_id' => $response->id
                    ]);
                }

                $answer->save();
            }

            return $this->successResponse($response, 'Questions get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }


    public function editAssessment(Request $request){

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user_assessment_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            // Find the response with the given ID
            $response = Response::with('assessment_tool', 'assessment_tool.questions', 'assessment_tool.questions.options')->findOrFail($request->user_assessment_id);

            $answerData = [];
            foreach ($response->answers as $answer) {
                $answerData[$answer->question_id] = $answer->option_id ?? $answer->answer;
            }
            $responseData = [
                'response' => $response,
                'answers' => $answerData,
            ];
            return $this->successResponse($responseData, 'Questions get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function storeAssessmentTool(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'assessment_id' => 'required|integer',
            'user_form_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }
        
        try {

            $response = new Response();
            $response->user_id = Auth::user()->id ?? '2';
            $response->user_form_id = $request->user_form_id;
            $response->assessment_tool_id = $request->assessment_id;
            $response->save();

            return $this->successResponse($response, 'Assessment tools stored successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }
}
