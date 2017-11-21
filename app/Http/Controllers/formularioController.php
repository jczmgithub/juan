<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function __construct()
    {
        $this->middleware('perm');
    }

    public function formulario()
    {
        return view('vistaPermiso');
    }
}
