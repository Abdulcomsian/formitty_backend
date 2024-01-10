<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id', 'user_id', 'form_type',
    ];

    protected $table = 'user_form';

    public function userFormHeadings()
    {
        return $this->hasMany(UserFormHeading::class);
    }

    public function customHeadings()
    {
        return $this->hasMany(CustomHeading::class);
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function openaiResponse()
    {
        return $this->hasOne(OpenaiResponse::class, 'form_id');
    }

    public function assessmentGroupPoints()
    {
        return $this->hasMany(AssessmentGroupPoint::class);
    }
}
