<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenAiConfiguration extends Model
{
    use HasFactory;

    protected $table = 'open_ai_configuration';
    protected $primaryKey = 'id';
    protected $fillable = ['client_key' , 'organization_key']; 
}
