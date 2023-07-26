<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeechText extends Model
{
    use HasFactory;

    protected $table = "speech_text";
    protected $primaryKey= "id";
    protected $fillable = ["user_id" , "report_id" , "file_name" , "speech", "operation_name"];
}
