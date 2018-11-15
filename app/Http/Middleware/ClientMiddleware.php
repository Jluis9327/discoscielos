<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClientMiddleware
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
        if(!Auth::check() || Auth::user()->Id_Est!=1 ){
            return redirect('/login');
        }
        if(Auth::user()->Id_Rol!=3 && Auth::user()->Id_Est==1) {

            if (Auth::user()->Id_Rol==2)
            {
                $x='recep';
            }
            elseif (Auth::user()->Id_Rol==1)
            {
                $x='admin';
            }
            return redirect($x);
        }
        return $next($request);
    }
}
