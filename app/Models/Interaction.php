<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'related_goal',
        'interaction_type',
        'participants',
        'activity',
        'impact',
        'next_steps',
        'report_id',
    ];
}