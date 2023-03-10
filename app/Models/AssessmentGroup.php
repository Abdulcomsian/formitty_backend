<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'assessment_tool_id',
        'title',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function assessment_tool()
    {
        return $this->belongsTo(AssessmentTool::class);
    }
}
