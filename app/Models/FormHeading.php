<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormHeading extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_heading', 'form_id',
    ];

    public function form_fields(){
        return $this->hasMany(FormField::class);
    }

    public function form(){
        return $this->belongsTo(Form::class);
    }
}
