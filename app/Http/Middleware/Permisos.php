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

        return redirect('vistaNoPermiso');
    }
}
