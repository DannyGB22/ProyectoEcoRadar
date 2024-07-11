<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function inicio(){
        return view('inicio');
    }

    public function centros(){
        return view('centros');
    }

    public function acerca_de(){
        return view('AcercaDe');
    }

    public function contacto(){
        return view('contacto');
    }

    public function info(){
        return view('info');
    }

    public function buscador(){
        return view('buscador');
    }

}
