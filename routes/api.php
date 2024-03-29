<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FormBuilderController;
use App\Http\Controllers\Api\AssessmentToolController;

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
