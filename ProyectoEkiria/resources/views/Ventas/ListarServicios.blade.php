@extends('adminlte::page')

@section('title', 'Listar Servicios')
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

@section('content_header')
    <h1>Listar Servicios</h1>
@stop

@section('content')
<h1>Listar Servicios</h1>

<div class="container">
    <a href="{{route('agregarServicio')}}" type="button" class="agregarCosasGeneral">
        <i class="fas fa-plus"></i>
      </a>
    <table class="table table-striped">
        <thead>
           <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Imagen</th>
              <th scope="col">Precio</th>
              <th scope="col">Tipo Servicio</th>
              <th scope="col">Descripcion</th>
              <th scope="row">Acciones</th>
           </tr>
        </thead>
        <tbody>

               @forelse ($servicios as $servicio)
               <tr>
              <th scope="row">{{$servicio->nombre}}</th>
              <td><img src="../img/Ventas/Upload/{{$servicio->img_servicios}}" style="max-width: 90px; max-height:60px"></td>
              <td>{{$servicio->precio}}</td>
              <td>{{$servicio->TipoServicios->nombre}}</td>
              <td>{{substr($servicio->descripcion,0,8)}}</td>
              <td>
                  <form action="">
                <a href="#{{$servicio->id_servicio}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#VerMas{{$servicio->id_servicio}}"><i class="fas fa-info-circle" style="font-size: 25px; color:white;"></i></a>
                  <a href="{{route('editarServicio',$servicio->id_servicio)}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modificar{{$servicio->id_servicio}}"><i class="fas fa-eye" style="font-size: 25px;"></i></a>
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash" style="font-size: 25px; color:white;"></i></button>
                </form>
            </td>
            </tr>

            {{-- Modales  --}}
            {{-- modal ver mas info de un servicio --}}
            <div class="modal fade" id="VerMas{{$servicio->id_servicio}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">informacion completa del servicio <strong>{{$servicio->nombre}}</strong></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST" enctype="multipart/form-data">

                                <Label><strong>Nombre: </strong></Label>
                                <input type="text" style="font-size: 20px;" readonly value="{{$servicio->nombre}}">
                                <br><br>

                                <div style="display: flex">
                                <Label><strong>Tipo de Servicio:  </strong></Label>
                                <input type="text" name="tservicio" readonly value="{{$servicio->TipoServicios->nombre}}">
                                </div>
                                <br>
                                <Label><strong>Precio: </strong></Label>
                                <input type="text" style="font-size: 20px;" readonly value="{{$servicio->precio}}">
                                <br>
                                <i class="fas fa-file-image" style="width: 50px; font-size: 30px; margin-top: 20px;"></i>
                                <img src="{{asset('img/Ventas/Upload/'.$servicio->img_servicios)}}"  style="max-width: 100px;">

                        <div style="margin-top: 30px;">
                            <Label><strong>Descripcion: </strong></Label>
                            <div class="form  descripcion">
                                <textarea class="form-control personalizarServicio" readonly>{{$servicio->descripcion}}</textarea>
                            </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- modificar servicio  --}}
            <div class="modal fade" id="Modificar{{$servicio->id_servicio}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modificar <strong>{{$servicio->nombre}}</strong></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('editarServicioV', $servicio)}}" method="POST" enctype="multipart/form-data">
                                @csrf @method('PUT')
                                <Label><strong>Nombre: </strong></Label>
                                <input type="text" name="nombre" value="{{$servicio->nombre}}" style="font-size: 20px;">
                                <br>
                                <small class="text-danger">{{$errors->first('nombre')}}</small>
                                <br><br>
                                <div class="col" style="display: flex;">
                                    <Label><strong>Tipo de Servicio:  </strong></Label>
                                    <select class="form-select" style="width: 50%; margin-left: 10px; top: -10px;">
                                        @forelse ($tipo_servicios as $tipo_servicio)
                                            <option value="{{$tipo_servicio->id_tipo_servicio}}" {{$tipo_servicio->id_tipo_servicio==$servicio->tipo_servicio_id?'selected':''}}>{{$tipo_servicio->nombre}}</option>
                                        @empty

                                        @endforelse
                                      </select>
                                      <br>
                                    <small class="text-danger">{{$errors->first('tipo_servicio_id')}}</small>
                                </div>
                                <br>
                                <Label><strong>Precio: </strong></Label>
                                <input type="number" name="precio"   value="{{$servicio->precio}}" style="font-size: 20px;">
                                <br>
                                <small class="text-danger">{{$errors->first('precio')}}</small>
                                <br>
                                <i class="fas fa-file-image" style="width: 50px; font-size: 30px; margin-top: 20px;"></i>
                                <input type="file" name="img_servicios" id="imagen" class="fileSerPersonalizado">
                                <br>
                                <small class="text-danger">{{$errors->first('img_servicios')}}</small>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h3>Imagen Actual</h3>
                                        <img src="{{asset('img/Ventas/Upload/'.$servicio->img_servicios)}}"  style="max-width: 150px;">
                                    </div>
                                    <div class="col">
                                        <h3>Imagen nueva</h3>
                                        <img id="imgSeleccionada" style="max-height:200px">
                                    </div>
                                </div>

                                <div style="margin-top: 30px;">
                                    <Label><strong>Descripcion: </strong></Label>
                                    <div class="form  descripcion">
                                        <textarea class="form-control personalizarServicio" name="descripcion">{{$servicio->descripcion}}</textarea>
                                        <br>
                                        <small class="text-danger">{{$errors->first('descripcion')}}</small>
                                    </div>
                                    <br><br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit"  class="btn d-grid gap-2 btn-success">Modificar Servicio</button>
                                      </div>

                    </form>
                    </div>

                  </div>
                </div>
              </div>

            <div>

                  @empty
                  <h1>No hay servicios para mostrar</h1>
               @endforelse

        </tbody>
     </table>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="../css/Ventas/Ventas.css">
    <link rel="icon" href="/static/Proyecto_Ekiria/Img/LogoEkiria.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .modal-backdrop {
            z-index: -1;
                }
    </style>

 @stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(e){
            $('#imagen').change(function(){
                let lector = new FileReader();
                lector.onload=(e)=>{
                    $('#imgSeleccionada').attr('src',e.target.result);
                }
                lector.readAsDataURL(this.files[0]);
            });
        });
    </script>


@stop
