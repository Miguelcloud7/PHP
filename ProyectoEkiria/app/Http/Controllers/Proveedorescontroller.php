<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modcompras\proveedores;
use App\Models\Modcompras\usuarios;

class Proveedorescontroller extends Controller
{
    public function proveedor(){

        $titulo="proveedores";
        $proveedores= proveedores::get();
        return view('proveedores', compact('proveedores', 'titulo'));
    }

    public function producto(){

        return view('productos');
    }

    public function compra(){

        return view('conf_compra');
    }

    public function guardar()
    {
        $campos=Request()->validate([
            'nombre'=>'required|min:3',
            'telefono'=>'required|integer:10',
            'celular'=>'required|integer:10',
            'encargado'=>'required',
            'descripcion' =>'required|min:6'

        ]);
        proveedores::insert($campos);
        return redirect("prove")->with("mensaje", "dato  guardado");

    }


}
