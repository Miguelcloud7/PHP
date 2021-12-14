<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function prueba(){
        $titulo='Prueba';
        $lista=['1'=>'dato1','2'=>'dato2','3'=>'dato3'];
        return view('Vistasx/holis', compact('titulo', 'lista'));
    }
}
