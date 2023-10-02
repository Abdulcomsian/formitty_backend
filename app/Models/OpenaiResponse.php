<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenaiResponse extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'form_id','note_response','audio_response'
    ];
}
