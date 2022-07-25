<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College_Info extends Model
{
    protected $table='college_infos';   
    protected $fillable=[
        'tu_reg_no',
        'symbol_no'
    ];
}
