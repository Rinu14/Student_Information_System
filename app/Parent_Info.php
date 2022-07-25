<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent_Info extends Model
{
    //
    protected $fillable=[
        father_name,
        mother_name,
        parent_name,
        mobile,
        email
    ];
}
