<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'assessment_tool_id',
        'title',
        'type',
        'point',
    ];

    public function assessmentTool()
    {
        return $this->belongsTo(AssessmentTool::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function answers()
    {
        return $this->hasOne(Answer::class, 'question_id');
    }

    public function assessmentGroup()
    {
        return $this->belongsTo(AssessmentGroup::class);
    }
}
