<?php

namespace App\Http\Middleware;

use Closure;
use App\MesPosible;
use Illuminate\Support\Facades\DB;
class MesesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (MesPosible::where('mes', '=',$request->input('mes'))){

            $id=DB::table('mesesPosibles')
                ->where('mes','=', $request->input('mes'))
                ->get('id');

            return $next($request);
        }else{

            return redirect('incorrecto');
        }



    }
}
