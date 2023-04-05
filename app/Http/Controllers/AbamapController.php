<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbamapController extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function productosServicios(){
        return view('producto_servicio');
    }

    public function contacto(){
        return view('contacto');
    }
}
