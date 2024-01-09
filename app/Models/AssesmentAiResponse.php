<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{ UserForm , AssessmentTool , Response };

class AssesmentAiResponse extends Model
{
    use HasFactory;

    protected $table = "assesment_ai_response";
    protected $primaryKey = "id";
    protected $fillable = ["user_form_id" , "assesment_tool_id" , "assesment_questions" , "assesment_openai_response" , "response_id" , "user_form_heading_id"];
    

    public function assesmentTool(){
        return $this->belongsTo(AssessmentTool::class , 'assesment_tool_id' , 'id');
    }     

    public function response(){
        return $this->belongsTo(Response::class , 'response_id' , 'id');
    } 
    
    public function formHeading(){
        return $this->belongsTo(Response::class , 'user_form_heading_id' , 'id');
    } 

}
