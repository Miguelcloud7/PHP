<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados\Empleado;
use App\Models\Empleados\Cargo;

class PruebaController extends Controller
{
    public function prueba(){
        $titulo='Prueba';
        $lista=Empleado::paginate();
        $cargo=Cargo::all();
        return view('Vistasx/holis', compact('titulo', 'lista','cargo'));
    }

    public function Guardar(){
        $campos=request()->validate([
            'nombre'=>'required|min:3',
            'apellidos'=>'required|min:3',
            'edad'=>'required',
            'idCargo'=>'required',
        ]);
        Empleado::create($campos);
        return redirect("holiss");
    }

        public function Actualizar(Empleado $empleado){
            $campos=request()->validate([
                'nombre'=>'required|min:3',
                'apellidos'=>'required|min:3',
                'edad'=>'required',
                'idCargo'=>'required',
            ]);
            $empleado->update($campos);
            return redirect("holiss");
        }

        public function Borrar(Empleado $empleado){
            $empleado->delete();
            return redirect("holiss");
        }
}
