<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssesmentAiResponse;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'assessment_tool_id',
        'user_form_id',
    ];

    public function getAnswerForQuestion($questionId)
    {
        return $this->answers->firstWhere('question_id', $questionId) ?? new Answer;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assessment_tool()
    {
        return $this->belongsTo(AssessmentTool::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function aiReport(){
        return $this->hasOne(AssesmentAiResponse::class , 'response_id' , 'id');
    }
}
