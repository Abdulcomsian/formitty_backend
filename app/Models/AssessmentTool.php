<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssesmentAiResponse;

class AssessmentTool extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function flowchart_questions()
    {
        return $this->hasMany(FlowchartQuestions::class);
    }

    public function assessment_groups()
    {
        return $this->hasMany(AssessmentGroup::class);
    }

    public function aiResponse(){
        return $this->hasMany(AssesmentAiResponse::class , 'assesment_tool_id' , 'id' );
    }

    public function scopeAssesmentAiFormResponse($query , $id){
        return $query->where('user_form_id' , $id);
    }
}
