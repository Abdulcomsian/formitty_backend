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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'assessment_tool_id' => 'required|integer',
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|integer',
            'answers.*.option_id' => 'required_without:answers.*.answer|integer',
            'answers.*.answer' => 'required_without:answers.*.option_id|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }

        try {

        // Create a new response object
        $response = new Response([
            'assessment_tool_id' => $request->input('assessment_tool_id'),
            'user_id' => Auth::user()->id ?? '2',
        ]);

        // Save the response object to the database
        $response->save();

        // Loop through the answers and create Answer objects for each
        foreach ($request->input('answers') as $answerData) {
            if (isset($answerData['option_id'])) {
                $answer = new Answer([
                    'question_id' => $answerData['question_id'],
                    'option_id' => $answerData['option_id'],
                    'response_id' => $response->id
                ]);

            } elseif (isset($answerData['answer'])) {
                $answer = new Answer([
                    'question_id' => $answerData['question_id'],
                    'answer' => $answerData['answer'],
                    'response_id' => $response->id
                ]);
            }
            $answer->save();
        }
        return $this->successResponse($assessment_tools, 'Questions get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function editAssessment(Request $request){
        try {

            // Find the response with the given ID
            $response = Response::with('assessment_tool', 'assessment_tool.questions', 'assessment_tool.questions.options')->findOrFail($request->assessment_id);

           /* // Load the assessment tool and questions
            $assessmentTool = $response->assessment_tool;

            $questions = $assessmentTool->questions->options;

            // Load the answer data for the response*/
            $answerData = [];
            foreach ($response->answers as $answer) {
                $answerData[$answer->question_id] = $answer->option_id ?? $answer->answer;
            }
            $responseData = [
                'response' => $response,
//                'questions' => $questions,
                'answers' => $answerData,
            ];
            return $this->successResponse($responseData, 'Questions get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }
}
