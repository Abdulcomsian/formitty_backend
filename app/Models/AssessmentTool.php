<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentTool extends Model
{
    use HasFactory;

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
