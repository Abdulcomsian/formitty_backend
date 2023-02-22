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
    ];

    public function assessmentTool()
    {
        return $this->belongsTo(AssessmentTool::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
