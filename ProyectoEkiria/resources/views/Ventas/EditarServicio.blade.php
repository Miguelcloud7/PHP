@extends('adminlte::page')

@section('title', 'Editar Servicio')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
<div class="container">

    <form action="{{route('editarServicioV')}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
    <div class="row" style="margin-top: 20px;">
        <div class="col">
            <Label><strong>Nombre: </strong></Label>
            <input type="text" style="font-size: 20px;" value="{{$servicios[0]["nombre"]}}">
        </div>
        <div class="col" style="display: flex;">
            <Label><strong>Tipo de Servicio:  </strong></Label>
            <select class="form-select" style="width: 50%; margin-left: 10px; top: -10px;">
                @forelse ($tipo_servicios as $tipo_servicio)
                    <option value="{{$tipo_servicio->id_tipo_servicio}}" {{$tipo_servicio->id_tipo_servicio==$servicios[0]["tipo_servicio_id"]?'selected':''}}>{{$tipo_servicio->nombre}}</option>
                @empty

                @endforelse
              </select>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col">
            <Label><strong>Precio: </strong></Label>
            <input type="text" style="font-size: 20px;" value="{{$servicios[0]["precio"]}}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <i class="fas fa-file-image" style="width: 50px; font-size: 30px; margin-top: 20px;"></i>
            <input type="file" class="fileSerPersonalizado">
        </div>
        <div class="col">
            <img src="{{asset('img/Ventas/Upload/'.$servicios[0]['img_servicios'])}}"  style="max-width: 100px">
        </div>

    </div>
    <div style="margin-top: 30px;">
        <Label><strong>Descripcion: </strong></Label>
        <div class="form  descripcion">
            <textarea class="form-control personalizarServicio">{{$servicios[0]["descripcion"]}}</textarea>
        </div>
        <br><br>
        <button type="submit" class="btn d-grid gap-2 btn-success" onclick="ConfirmacionEditarServicio()">Editar Servicio</button>
        <br><br>
</div>

</form>

<img src="../img/Ventas/fondo.jpg" alt="" width="10">

{{-- @forelse ($servicios as $item)
{{$item}}
@empty
@endforelse --}}


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="../css/Ventas/Ventas.css">
<link rel="icon" href="/static/Proyecto_Ekiria/Img/LogoEkiria.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

 @stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@stop
