<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesPosible extends Model
{
    protected $table = ['mesesPosibles'];
    protected $fillable = ['mes','id'];


    public function trabajadores()
    {
        $this->hasMany('App/Trabajador');
    }


}
