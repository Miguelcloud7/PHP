<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modcompras\proveedores;


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

    public function guardarprov()
    {
        $campos=Request()->validate([
            'nombre'=>'required|min:3',
            'telefono' => 'integer',
            'celular'=>'required|integer:10',
            'encargado'=>'required',
            'descripcion' =>'string'

        ]);
        proveedores::insert($campos);
        return redirect("prove")->with("mensaje", "dato guardado");

    }

    public function actualizarprov(proveedores $proveedores)
    {
        $campos=Request()->validate([
            'nombre'=>'required|min:3',
            'celular'=>'required|integer|max:10',
            'encargado'=>'required'

        ]);
        $proveedores->update($campos);
        return redirect("prove")->with("mensaje", "dato actualizado");

    }

    public function borrarprov(proveedores $proveedores)
    {
        $proveedores->delete();
        return redirect("prove");
    }




}
