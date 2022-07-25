<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'name',
        'email',
        'phone',
        'blood_group',
        'perm_address',
        'temp_address',
        'gender',
        'dob',
        'is_active',
        'is_alumi',
        
    ];
}
