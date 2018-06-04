<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = ['trabajadores'];
    protected $fillable = ['nombre','id_mes'];


    public function mesPosible()
    {
        $this->hasOne('App/MesPosible');
    }
}
