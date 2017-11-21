<?php

namespace App\Http\Middleware;

use Closure;
use App\UsuPermitido;
use Illuminate\Http\Request;

class Permisos
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
        if ($request->$usuario->isAdmin()) { //comprobar si el usuario tiene permisos
            return $next($request);
        }
        return redirect('vistaNoPermiso');
    }
}
