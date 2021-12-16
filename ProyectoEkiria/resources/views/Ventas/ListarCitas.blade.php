@extends('adminlte::page')

@section('title', 'Listar Citas')

@section('content_header')
    <h1>Listar  Citas</h1>
@stop

@section('content')
<h1>Listar Citas</h1>
<div class="container">
   <a href="{{route('agregarCita')}}" type="button" class="agregarCosasGeneral">
      <i class="fas fa-plus"></i>
    </a>
    <table class="table table-striped">
        <thead>
           <tr>
              <th scope="col">Cliente</th>
              <th scope="col">Total</th>
              <th scope="col">Fecha</th>
              <th scope="col">Estado</th>
              <th scope="col" colspan="2">Acciones</th>
           </tr>
        </thead>
        <tbody>
           <tr>
              <th scope="row">Margarita Hoyos</th>
              <td>$45.000</td>
              <td>28 de Noviembre del 2021</td>
              <td>Pendiente</td>
              <td><a href="{{route('editarCita')}}"><i class="fas fa-eye" style="font-size: 25px;"></i></a></td>
              <td><a type="button" onclick="ConfirmarCita()"><i class="fas fa-check-circle" style="font-size: 25px;" onclick=""></i></a></td>
           </tr>
           <tr>
            <th scope="row">Margarita Hoyos</th>
            <td>$45.000</td>
            <td>28 de Noviembre del 2021</td>
            <td>Pendiente</td>
            <td><a href="{{route('editarCita')}}"><i class="fas fa-eye" style="font-size: 25px;"></i></a></td>
            <td><a type="button" onclick="ConfirmarCita()"><i class="fas fa-check-circle" style="font-size: 25px;" onclick=""></i></a></td>
         </tr>
         <tr>
            <th scope="row">Margarita Hoyos</th>
            <td>$45.000</td>
            <td>28 de Noviembre del 2021</td>
            <td>Pendiente</td>
            <td><a href="{{route('editarCita')}}"><i class="fas fa-eye" style="font-size: 25px;"></i></a></td>
            <td><a type="button" onclick="ConfirmarCita()"><i class="fas fa-check-circle" style="font-size: 25px;" onclick=""></i></a></td>
         </tr>
         <tr>
            <th scope="row">Margarita Hoyos</th>
            <td>$45.000</td>
            <td>28 de Noviembre del 2021</td>
            <td>Pendiente</td>
            <td><a href="{{route('editarCita')}}"><i class="fas fa-eye" style="font-size: 25px;"></i></a></td>
            <td><a type="button" onclick="ConfirmarCita()"><i class="fas fa-check-circle" style="font-size: 25px;" onclick=""></i></a></td>
         </tr>

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

 @stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@stop
