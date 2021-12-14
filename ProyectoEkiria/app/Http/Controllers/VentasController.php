<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentasController extends Controller
{

    // CATALOGO
    public function Catalogo(){
       return view('Ventas/Catalogo');
    }
    public function TerminarPedido(){
        return view('Ventas/TerminarPedido');
     }


    // CITAS
    public function AgregarCita(){
        return view('Ventas/AgregarCita');
     }

     public function ListarCitas(){
        return view('Ventas/ListarCitas');
     }

     public function EditarCita(){
        return view('Ventas/EditarCita');
     }


    //  SERVICIOS
     public function AgregarServicio(){
        return view('Ventas/AgregarServicio');
     }

     public function ListarServicios(){
        return view('Ventas/ListarServicios');
     }

     public function EditarServicio(){
        return view('Ventas/EditarServicio');
     }


}
