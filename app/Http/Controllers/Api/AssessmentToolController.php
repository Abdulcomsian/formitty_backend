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
use App\Models\AssessmentGroup;
use App\Models\CustomHeading;
use App\Models\OpenaiResponse;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use PDF;
use App\Models\StaticOption;
use App\Models\UserForm;
use App\Models\AssessmentGroupPoint;
use App\Models\UserFormHeading;
use Illuminate\Support\Facades\DB;

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

        if (!auth('sanctum')->user()) {
            return $this->errorResponse("User is not authenticated", 404);
        }

        $user_id = auth('sanctum')->user()->id;

        try {
            $assessment_tools = [];
            $assessment_tools[] = Response::with('assessment_tool')->where([['user_id', $user_id], ['user_form_id', $request->user_form_id]])->get();
            $assessment_tools[] = FlowchartResponse::with('assessment_tool')->where([['user_id', $user_id], ['user_form_id', $request->user_form_id]])->get();
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
            if ($assessment_tools->assessment_groups->isEmpty()) {
                $assessment_tools = AssessmentTool::with('questions', 'questions.options')->find($request->assessment_id);
            }
            return $this->successResponse($assessment_tools, 'Questions get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    public function storeQuestions(Request $request)
    {
        $input = $request->all();

        try {

            if (!auth('sanctum')->user()) {
                return $this->errorResponse("User is not authenticated", 401);
            }
            $user_id = auth('sanctum')->user()->id;
            // Create a new response object
            if ($request->user_assessment_id) {
                $response = Response::find($request->user_assessment_id);
                $response->update([
                    'assessment_tool_id' => $response->assessment_tool_id,
                    'user_id' => $user_id,
                    'user_form_id' => $request->user_form_id,
                ]);

                $answer = Answer::where('response_id', $request->user_assessment_id)->delete();
            } else {
                $response = new Response([
                    'assessment_tool_id' => $request->input('assessment_id'),
                    'user_id' => $user_id,
                    'user_form_id' => $request->user_form_id,
                ]);
            }

            // Save the response object to the database
            $response->save();

            // Loop through the answers and create Answer objects for each
            foreach ($input as $key => $value) {
                if ($key == 'assessment_id' || $key == 'user_form_id' || $key == 'user_assessment_id' || $key == 'prorated_raw' || $key == 'total_raw' || $key == 't_score') {
                    continue;
                }
                $result = extract_values_assessment($key);
                $name = $result[0];
                $question_id = $result[1] ?? null;
                $option_id = $result[2] ?? null;

                if ($name == 'multiple_choice') {
                    $answer = new Answer([
                        'question_id' => $question_id,
                        'option_id' => $option_id,
                        'response_id' => $response->id,
                        'answer' => $value,
                    ]);
                } elseif ($name == 'comment') {
                    $question = Answer::where([['question_id', $question_id], ['response_id', $response->id]])->first();
                    if ($question) {
                        $question->update([
                            'answer' => $value,
                        ]);
                    }
                } elseif ($name == 'level') {
                    $question = Answer::where([['question_id', $question_id], ['response_id', $response->id]])->first();
                    if ($question) {
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
                } elseif ($name == 'group_point') {
                    $group = AssessmentGroup::findorfail($question_id);
                    $group_point = new AssessmentGroupPoint();
                    $group_point->assessment_group_id = $group->id;
                    $group_point->user_form_id = $request->user_form_id;
                    $group_point->response_id = $response->id;
                    $group_point->point = $value;
                    $group_point->save();

                    // $group = AssessmentGroup::findorfail($question_id);
                    // if ($group) {
                    //     $group->update([
                    //         'point' => $value,
                    //     ]);
                    // }
                } elseif ($name == 'point') {
                    $question = Answer::where([['question_id', $question_id], ['response_id', $response->id]])->first();
                    if ($question) {
                        $question->update([
                            'level' => $value,
                        ]);
                    }
                    // $question = Question::findorfail($question_id);
                    // if ($question) {
                    //     $question->update([
                    //         'point' => $value,
                    //     ]);
                    // }
                }
                $answer->save();
            }


            return $this->successResponse($response, 'Questions get successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
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
            $response = Response::with('assessment_tool', 'assessment_tool.assessment_groups', 'assessment_tool.assessment_groups.assessment_group_point', 'assessment_tool.assessment_groups.questions', 'assessment_tool.assessment_groups.questions.options')->findOrFail($request->user_assessment_id);
            if ($response->assessment_tool->assessment_groups->isEmpty()) {
                $response = Response::with('assessment_tool', 'assessment_tool.questions', 'assessment_tool.questions.options')->findOrFail($request->user_assessment_id);
            }
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

            if (!auth('sanctum')->user()) {
                return $this->errorResponse("User is not authenticated", 404);
            }

            $user_id = auth('sanctum')->user()->id;

            $response = new Response();
            $response->user_id = $user_id;
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
            if (!auth('sanctum')->user()) {
                return $this->errorResponse("User is not authenticated", 404);
            }

            $user_id = auth('sanctum')->user()->id;
            $response = new FlowchartResponse();
            $response->user_id = $user_id;
            $response->assessment_tool_id = $request->user_assessment_id;
            $response->user_form_id = $request->user_form_id;
            $response->image = $request->imageData;
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
            $flowchart_response = FlowchartResponse::with('assessment_tool', 'flowchart_answers')->where([['user_form_id', $request->user_form_id], ['assessment_tool_id', $request->assessment_tool_id]])->get();

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
            if (!auth('sanctum')->user()) {
                return $this->errorResponse("User is not authenticated", 404);
            }

            $user_id = auth('sanctum')->user()->id;

            $response = FlowchartResponse::where('user_form_id', $request->user_form_id)->where('assessment_tool_id', $request->assessment_tool_id)->delete();
            foreach ($request->data as $key => $value) {
                $response = new FlowchartResponse();
                $response->user_id = $user_id;
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

    public function generatePdf(Request $request)
    {

        try {

            $client = new Client();

            $product_response = $client->get('https://marketplace.formitydev.com/api/products/' . $request->product_id);
            // @dd($product_response);
            $review_response = $client->get('https://marketplace.formitydev.com/api/reviews?product_id=' . $request->product_id);
            // @dd($review_response);
            $product_response = json_decode($product_response->getBody(), true);
            $review_response = json_decode($review_response->getBody(), true);
            view()->share('product', $product_response);
            view()->share('reviews', $review_response);
            $pdf = PDF::loadView('pdf', $product_response);
            // download PDF file with download method
            return response($pdf->output(), 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="pdf_file.pdf"');
            return $pdf;
            return $this->successResponse($pdf, 'Flowchart updated successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function storeOpenAiResponses(Request $request)
    {
        try {
            $openai = OpenaiResponse::where('form_id', $request->form_id)->first();
            // if($openai){
            //     $openai->form_id = $request->form_id;
            //     if($request->note_response){
            //         $openai->note_response = $request->note_response;
            //     }
            //     if($request->note_response){
            //         $openai->audio_response = $request->audio_response;
            //     }
            //     $openai->save();
            //     return $this->successResponse($openai, 'OpenAiResponse updated successfully!.', 200);
            // }
            if (!$openai) {
                $openai = new OpenaiResponse();
            }
            $openai->form_id = $request->form_id;
            if ($request->note_response) {
                $openai->note_response = $request->note_response;
            }
            if ($request->audio_response) {
                $openai->audio_response = $request->audio_response;
            }
            $openai->save();
            return $this->successResponse($openai, 'OpenAiResponse updated successfully!.', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 401);
        }
    }

    public function chatgptPrompts(Request $request)
    {
        try {
            $options = StaticOption::whereIn('option_name', ['audio_prompt', 'notes_prompt'])->get();

            $audioPrompt = $options->where('option_name', 'audio_prompt')->first()->option_value;
            $notesPrompt = $options->where('option_name', 'notes_prompt')->first()->option_value;

            // Return as separate variables
            return $this->successResponse([
                'audio_prompt' => $audioPrompt,
                'notes_prompt' => $notesPrompt
            ], 'Chatgpt prompts updated successfully!', 200);

            // Return as an array
            // return $this->successResponse([$audioPrompt, $notesPrompt], 'Chatgpt prompts updated successfully!', 200);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    public function deleteAssessmentTool(Request $request)
    {
        // Validate the request data
        try {
            DB::beginTransaction();
            $validator = Validator::make($request->all(), [
                'user_heading_id' => 'required_without:assestment_id',
                'assestment_id' => 'required_without:user_heading_id',
                // 'user_heading_id' => 'required|integer',
                'user_form_id' => 'required|integer',
                'heading_type' => 'required_with:user_heading_id',
                
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 400);
            }

            $userFormHeading = $request->user_heading_id;
            $assestmentId = $request->assestment_id;

            if(isset($userFormHeading) && !is_null($userFormHeading)){

            // $user_form_heading = UserFormHeading::where('user_form_id', $request->user_form_id)->where('heading_id', $request->user_heading_id)->where('heading_type', $request->heading_type)->first();
            $user_form_heading = UserFormHeading::where('user_form_id', $request->user_form_id)->where('heading_id', $request->user_heading_id)->where('heading_type', $request->heading_type)->first();

            if ($user_form_heading == null) {
                return $this->errorResponse("No Record found!", 404);
            }

            $response = Response::findorfail($request->user_heading_id);

            if ($response && $request->heading_type == 'assessment_tool') {
                // dd($response->answers);
                $response->answers()->delete();

                $response->delete();

                $user_form_heading->delete();
            }


            if ($request->heading_type == 'custom') {
                $custom_heading = CustomHeading::where('user_form_id', $request->user_form_id)->where('user_heading_id', $user_form_heading->id)->first();

                $custom_heading->delete();

                $user_form_heading->delete();
            }

            DB::commit();
        }else{
                $res = Response::where('id' , $assestmentId)->first();
                $res->delete();
                DB::commit();
            
        }
            // Return as separate variables
            return $this->successResponse([
                'data' => $user_form_heading ?? $assestmentId,
            ], 'Assessment tool deleted successfully!', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->errorResponse($th->getMessage(), 500);
        }
    }
}
