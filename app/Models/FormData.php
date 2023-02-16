<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    public function formHeading()
    {
        return $this->belongsTo(FormHeading::class,'form_heading_id');
    }

    public function userFormHeading()
    {
        return $this->belongsTo(UserFormHeading::class, 'user_form_heading_id', 'id');
    }
}
