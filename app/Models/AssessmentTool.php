<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
