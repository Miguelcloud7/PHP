<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ventas\tipo_servicios;
use App\Models\Ventas\servicios;
use Illuminate\Validation\Rules\Exists;

class VentasController extends Controller
{

    //cargas de vistas

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
        $tipo_servicios=tipo_servicios::get();
         return view('Ventas/AgregarServicio',compact('tipo_servicios'));
     }

     public function ListarServicios(){
         $servicios=servicios::get();
         $tipo_servicios=tipo_servicios::get();
        return view('Ventas/ListarServicios',compact('servicios','tipo_servicios'));
     }

     public function EditarServicio(int $id){
         $servicios=servicios::where("id_servicio","=","$id")->get();
         $tipo_servicios=tipo_servicios::all();
        return view('Ventas/EditarServicio',compact('servicios','tipo_servicios'));
     }


    //  funcionalidades ___________**************************************________________________________

    // CATALOGO
    public function CatalogoV(){
        return view('Ventas/Catalogo');
     }
     public function TerminarPedidoV(){
         return view('Ventas/TerminarPedido');
      }


     // CITAS
     public function AgregarCitaV(){
         return view('Ventas/AgregarCita');
      }

      public function ListarCitasV(){
         return view('Ventas/ListarCitas');
      }

      public function EditarCitaV(){
         return view('Ventas/EditarCita');
      }


     //  SERVICIOS
      public function AgregarServicioV(Request $request){
        $request->validate([
            'nombre'=>'required|min:3',
            'descripcion'=>'',
            'img_servicios'=>'required|image|mimes:png,jpg,jfif',
            'precio'=>'required|integer',
            'tipo_servicio_id'=>'required',
        ]);

        $servicio=$request->all();

        if($img_servicios= $request->file('img_servicios')){
            $rutaGuardarImg = 'img/Ventas/Upload/';
            $imgServicio = date('YmdHis').".".$img_servicios->getClientOriginalExtension();
            $img_servicios->move($rutaGuardarImg,$imgServicio);
            $servicio["img_servicios"]=$imgServicio;
        }
        servicios::create($servicio);
        return redirect("Servicios/Listar");
      }

      public function ListarServiciosV(){
         return view('Ventas/ListarServicios');
      }

      public function EditarServicioV(servicios $servicios){

        var_dump($servicios);

        // return redirect()->route('listarServicios');

        // var_dump($servicios);
        //     // $campos=request()->validate([
            //     'nombre'=>'required|min:3',
            //     'descripcion'=>'',
            //     'img_servicios'=>'required|image|mimes:png,jpg,jfif',
            //     'precio'=>'required|integer',
            //     'tipo_servicio_id'=>'required',
            // ]);


        //  return redirect()->route('listarServicio');
      }

}
