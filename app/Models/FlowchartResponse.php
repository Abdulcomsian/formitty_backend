<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlowchartResponse extends Model
{
    use HasFactory;

    public function assessment_tool()
    {
        return $this->belongsTo(AssessmentTool::class);
    }

}
