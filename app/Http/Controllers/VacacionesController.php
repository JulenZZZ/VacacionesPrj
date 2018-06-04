<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class VacacionesController extends Controller
{

    public function insertar(Request $request,$id){



        DB::table('trabajadores')->insert(
            ['nombre' => Input::get('nombre'),'id_mes'=> $id]);



        $nombre=$request->input('nombre');
        $mes=$request->input('mes');

        return view('correcto',['nombre'=>$nombre],['mes'=>$mes]);

    }

    public function __construct()
    {
        $this->middleware('MesesMiddleware');
    }
}
