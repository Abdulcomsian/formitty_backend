<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlowchartQuestions extends Model
{
    use HasFactory;

    protected $fillable = ['assessment_tool_id', 'title', 'parent_id'];

    public function children()
    {
        return $this->hasMany(FlowchartQuestions::class, 'parent_id')->with('children');
    }

    public function parent()
    {
        return $this->belongsTo(FlowchartQuestions::class, 'parent_id');
    }

    public function assessment_tool()
    {
        return $this->belongsTo(AssessmentTool::class);
    }

}
