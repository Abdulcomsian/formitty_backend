<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FormBuilderController;
use App\Http\Controllers\Api\AssessmentToolController;
use App\Http\Controllers\{ HomeController , SpeechController};
use App\Http\Controllers\Api\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::post('/user-login', [AuthController::class, 'userLogin']);

//Route::get('/test', [AuthController::class, 'test']);
Route::post('/import', [AuthController::class, 'import']);
Route::get('/download/{id}', [AuthController::class, 'download']);
Route::post('/get-fields', [FormBuilderController::class, 'getFormFields']);
//Route::post('/get-user-forms', [FormBuilderController::class, 'getUserForms']);
Route::post('/get-forms', [FormBuilderController::class, 'getForms']);
Route::post('/store-form-fields', [FormBuilderController::class, 'storeFormField']);
Route::post('/update-form-fields/{id}', [FormBuilderController::class, 'updateFormField']);
Route::post('/import', [AuthController::class, 'import']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('getLoggedInUser', [AuthController::class,'getLoggedInUser']);
    Route::post('report-speech-list' , [SpeechController::class , 'getSpeechList']);
    Route::post('delete-speech' , [SpeechController::class , 'deleteSpeech']);
    Route::post('dashboard-api', [DashboardController::class, 'dashboardApi']);
    Route::post('convert-speech-to-text' , [SpeechController::class , 'convertSpeech']);
    Route::post('get-status' , [SpeechController::class , 'getStatus']);
    Route::get('get-speech-status/{operation}' , [SpeechController::class , 'checkSpeechRecognitionStatus']);
});
   
Route::post('get-user-forms', [FormBuilderController::class, 'getUserForm']);
Route::post('get-user-forms-data', [FormBuilderController::class, 'getUserFormsData']);
//Route::get('marked-completed/{user_form_id}', [FormBuilderController::class, 'markComplete']);
Route::get('change-status/{user_form_heading_id}', [FormBuilderController::class, 'changeStatus']);
Route::post('search-filter', [FormBuilderController::class, 'searchFilter']);
Route::get('assessment-tools', [AssessmentToolController::class, 'assessmentTools']);
Route::post('user-assessment-tools', [AssessmentToolController::class, 'userAssessmentTools']);
Route::post('get-questions', [AssessmentToolController::class, 'getQuestions']);
Route::post('store-questions', [AssessmentToolController::class, 'storeQuestions']);
Route::post('store-flowchart', [AssessmentToolController::class, 'storeFlowChart']);
Route::post('edit-assessment', [AssessmentToolController::class, 'editAssessment']);
Route::post('store-assessment', [AssessmentToolController::class, 'storeAssessmentTool']);
Route::post('get-flowchart-questions', [AssessmentToolController::class, 'getFlowChartQuestions']);
Route::post('edit-flowchart', [AssessmentToolController::class, 'editFlowChart']);
Route::post('update-flowchart', [AssessmentToolController::class, 'updateFlowChart']);
Route::post('generate-pdf', [AssessmentToolController::class, 'generatePdf']);

// created notes api
Route::post('/get-create-note', [FormBuilderController::class, 'getCreateNote']);
Route::post('/create-note', [FormBuilderController::class, 'create_note']);
// Route::post('/create-note', [FormBuilderController::class, 'create_note']);
// Route::delete('/delete-note/{reportId}', [FormBuilderController::class, 'deleteCreateNote']);

Route::post('/delete-create-note', [FormBuilderController::class, 'deleteCreateNote']);
Route::post('/update-create-note', [FormBuilderController::class, 'updateCreateNote']);
Route::post('/store-therapist', [FormBuilderController::class, 'storeTherapists']);
Route::post('store-openai-responses' , [AssessmentToolController::class , 'storeOpenAiResponses']);
Route::post('get-chatgpt-prompts' , [AssessmentToolController::class , 'chatgptPrompts']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request)
{
    return $request->user();
});
