@extends('adminlte::page')

@section('title', 'Agregar Servicios')

@section('content_header')
    <h1>Agregar Servicios</h1>
@stop

@section('content')
<h1>Agregar un Servicio</h1>
<div class="container">
    <form action="{{route('agregarServicioV')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row" style="margin-top: 20px;">
        <div class="col">
            <Label><strong>Nombre: </strong></Label>
            <input type="text" name="nombre" style="font-size: 20px;">
            <br>
            <small class="text-danger">{{$errors->first('nombre')}}</small>

        </div>
        <div class="col" style="display: flex;">
            <Label><strong>Tipo de Servicio:  </strong></Label>
            <select class="form-select" name="tipo_servicio_id" style="width: 50%; margin-left: 10px; top: -10px;">
                <option selected>Tipo de Servicio</option>
                @forelse ($tipo_servicios as $tipo_servicio)
                <option value="{{$tipo_servicio->id_tipo_servicio}}">{{$tipo_servicio->nombre}}</option>
                @empty
                <h1>No hay Tipos de servicios que mostrar</h1>
                @endforelse
              </select>
              <br>
            <small class="text-danger">{{$errors->first('tipo_servicio_id')}}</small>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col">
            <Label><strong>Precio: </strong></Label>
            <input type="number" name="precio" style="font-size: 20px;">
            <br>
            <small class="text-danger">{{$errors->first('precio')}}</small>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <i class="fas fa-file-image" style="width: 50px; font-size: 30px; margin-top: 20px;"></i>
        <input type="file" name="img_servicios" id="imagen" class="fileSerPersonalizado">
        <br>
            <small class="text-danger">{{$errors->first('img_servicios')}}</small>
        </div>
        <div class="col">
            <img id="imgSeleccionada" style="max-height:200px">
        </div>

    </div>
    <div style="margin-top: 30px;">
        <Label><strong>Descripcion: </strong></Label>
        <div class="form  descripcion">
            <textarea class="form-control personalizarServicio" name="descripcion"></textarea>
            <br>
            <small class="text-danger">{{$errors->first('descripcion')}}</small>
        </div>
        <br><br>
        <button type="submit"  class="btn d-grid gap-2 btn-success">Agregar Servicio</button>

    </form>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="../css/Ventas/Ventas.css">
    <link rel="icon" href="/static/Proyecto_Ekiria/Img/LogoEkiria.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

 @stop

@section('js')
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
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@stop

