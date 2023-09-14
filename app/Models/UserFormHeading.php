<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFormHeading extends Model
{
//    protected $table = 'user_form';
    use HasFactory;

    public function formHeading()
    {
        return $this->belongsTo(FormHeading::class,'heading_id');
    }

    public function customHeading()
    {
        return $this->belongsTo(CustomHeading::class,'heading_id');
    }

    public function formData()
    {
        return $this->hasMany(FormData::class, 'user_form_heading_id', 'id');
    }
}
