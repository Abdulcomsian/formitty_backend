<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomHeading extends Model
{
    use HasFactory;

    public function userForm()
    {
        return $this->belongsTo(UserForm::class, 'user_form_id');
    }
}
