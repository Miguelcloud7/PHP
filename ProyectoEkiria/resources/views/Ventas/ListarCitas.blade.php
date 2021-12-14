@extends('layout')


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Citas</title>
    <link rel="stylesheet" href="../css/Ventas/Ventas.css">
    <link rel="icon" href="/static/Proyecto_Ekiria/Img/Logo Ekiria.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

@section('contenido')
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

<script src="../js/Ventas/Ventas.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
