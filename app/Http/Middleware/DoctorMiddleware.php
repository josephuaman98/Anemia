<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DoctorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role == 'doctor') // Si el usuario tiene el rol de doctor tiene acceso a sus respectivas rutas
            return $next($request); // si el rol es distinto 

        return redirect('/'); // se le enviara a la ruta de inicio o podriamos poner una ruta de pagina no encontrada error 404


    }
}
