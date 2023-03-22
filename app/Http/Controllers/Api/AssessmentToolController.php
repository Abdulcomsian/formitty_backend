<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssessmentTool;
use App\Models\FlowchartQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Models\Question;
use App\Models\FlowchartResponse;
use App\Models\Answer;
use App\Models\Response;
use App\Models\FlowchartAnswer;
use Illuminate\Support\Facades\Auth;

class AssessmentToolController extends ApiController
{
    public function assessmentTools()
    {
        try {
            $assessment_tools = AssessmentTool::latest()->get();
            return $this->successResponse($assessment_tools, 'Assessment tools get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function userAssessmentTools(Request $request)
    {

        $validator = Validator::make(request()->all(), [
            'user_form_id' => 'required|integer',
        ]);

        ### On fail returns responses ###
        if ($validator->fails()) {
            return $this->errorResponse($validator->messages(), 422);
        }

        try {
            $assessment_tools = [];
            $assessment_tools[] = Response::with('assessment_tool')->where([['user_id', Auth::user()->id ?? '2'], ['user_form_id', $request->user_form_id]])->get();
            $assessment_tools[] = FlowchartResponse::with('assessment_tool')->where([['user_id', Auth::user()->id ?? '2'], ['user_form_id', $request->user_form_id]])->get();
            return $this->successResponse($assessment_tools, 'Assessment tools get successfully!.', 200);
        } catch (\Throwable $th) {
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

            $assessment_tools = AssessmentTool::with('assessment_groups', 'assessment_groups.questions', 'assessment_groups.questions.options')->find($request->assessment_id);
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
            if ($request->user_assessment_id) {
                $response = Response::find($request->user_assessment_id);
                $response->update([
                    'assessment_tool_id' => $response->assessment_tool_id,
                    'user_id' => Auth::user()->id ?? '2',
                    'user_form_id' => $request->user_form_id,
                ]);

                $answer = Answer::where('response_id', $request->user_assessment_id)->delete();
            } else {
                $response = new Response([
                    'assessment_tool_id' => $request->input('assessment_id'),
                    'user_id' => Auth::user()->id ?? '2',
                    'user_form_id' => $request->user_form_id,
                ]);
            }

            // Save the response object to the database
            $response->save();

            // Loop through the answers and create Answer objects for each
            foreach ($input as $key => $value) {
                if ($key == 'assessment_id' || $key == 'user_form_id' || $key == 'user_assessment_id') {
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
                        'response_id' => $response->id,
                        'answer' => $value,
                    ]);
                } elseif($name == 'comment'){
                    $question = Answer::where([['question_id', $question_id], ['response_id', $response->id]])->first();
                    if($question) {
                        $question->update([
                            'answer' => $value,
                        ]);
                    }
                } elseif ($name == 'level') {
                    $question = Answer::where([['question_id', $question_id], ['response_id', $response->id]])->first();
                    if($question) {
                        $question->update([
                            'level' => $value,
                        ]);
                    }
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


    public function editAssessment(Request $request)
    {

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
            $response = Response::with('assessment_tool', 'assessment_tool.assessment_groups', 'assessment_tool.assessment_groups.questions', 'assessment_tool.assessment_groups.questions.options')->findOrFail($request->user_assessment_id);

            $answerData = [];
            $commentData = [];
            $level = [];
            foreach ($response->answers as $answer) {
                $answerData[$answer->question_id] = $answer->option_id ?? null;
                $commentData[$answer->question_id] = $answer->answer;
                $level[$answer->question_id] = $answer->level;
            }
            $responseData = [
                'response' => $response,
                'answers' => $answerData,
                'commentData' => $commentData,
                'level' => $level,
            ];
            return $this->successResponse($responseData, 'Questions get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function storeAssessmentTool(Request $request)
    {
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

    public function getFlowChartQuestions(Request $request)
    {
        try {
            $response = AssessmentTool::with(['flowchart_questions' => function ($query) {
                $query->whereNull('parent_id')->with('children');
            }])->find($request->assessment_id);

            // Convert the id and parent_id values to strings
            $response->flowchart_questions->transform(function ($question) {
                $question->id = (string)$question->id;
                $question->parent_id = (string)$question->parent_id;
                return $question;
            });

            return $this->successResponse($response, 'Assessment tools stored successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function storeFlowChart(Request $request)
    {
        try {
            $response = new FlowchartResponse();
            $response->user_id = Auth::user()->id ?? '2';
            $response->assessment_tool_id = $request->user_assessment_id;
            $response->user_form_id = $request->user_form_id;
            $response->save();
            foreach ($request->data as $key => $value) {
                $flow_chart = new FlowchartAnswer();
                $flow_chart->flowchart_response_id = $response->id;
                $flow_chart->flowchart_question_id = $value;
                $flow_chart->save();
            }
            return $this->successResponse($response, 'Flowchart stored successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function editFlowChart(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'assessment_tool_id' => 'required|integer',
            'user_form_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            // Find the response with the given ID
            $flowchart_response = FlowchartResponse::with('assessment_tool', 'flowchart_answers')->where([['user_form_id', $request->user_form_id],['assessment_tool_id', $request->assessment_tool_id]])->get();

            $answerData = [];
          /*  foreach ($flowchart_response->flowchart_answers as $answer) {
                $answerData[$answer->question_id] = $answer->option_id ?? $answer->answer;
            }*/
            $responseData = [
                'response' => $flowchart_response,
                'answers' => $answerData,
            ];
            return $this->successResponse($responseData, 'Questions get successfully!.', 200);

            return $this->successResponse($response, 'Flowchart fetched successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function updateFlowChart(Request $request)
    {
        try {

            // Validate the request data
            $validator = Validator::make($request->all(), [
                'assessment_tool_id' => 'required|integer',
                'user_form_id' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 400);
            }

            $response = FlowchartResponse::where('user_form_id', $request->user_form_id)->where('assessment_tool_id', $request->assessment_tool_id)->delete();
            foreach ($request->data as $key => $value) {
                $response = new FlowchartResponse();
                $response->user_id = Auth::user()->id ?? '2';
                $response->user_form_id = $request->user_form_id;
                $response->flowchart_question_id = $value;
                $response->assessment_tool_id = $request->assessment_tool_id;
                $response->save();
            }
            return $this->successResponse($response, 'Flowchart updated successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

}
