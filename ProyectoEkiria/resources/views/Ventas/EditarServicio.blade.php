@extends('layout')


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
    <link rel="stylesheet" href="../css/Ventas/Ventas.css">
    <link rel="icon" href="/static/Proyecto_Ekiria/Img/Logo Ekiria.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

@section('contenido')
<h1>Editar Servicio</h1>
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col">
            <Label><strong>Nombre: </strong></Label>
            <input type="text" style="font-size: 20px;" value="Uñas Sencillas">
        </div>
        <div class="col" style="display: flex;">
            <Label><strong>Tipo de Servicio:  </strong></Label>
            <select class="form-select" style="width: 50%; margin-left: 10px; top: -10px;">
                <option >Tipo de Servicio</option>
                <option selected value="1">Manicure</option>
                <option value="2">Pedicure</option>
              </select>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col">
            <Label><strong>Precio: </strong></Label>
            <input type="text" style="font-size: 20px;" value="$15000">
        </div>
        <div class="col" style="display: flex;">
            <Label><strong>Estado:  </strong></Label>
            <div class="form-check form-switch">
                <input class="form-check-input"  style=" margin-left: -5px; height: 30px; width: 60px; margin-top: -5px;" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <i class="fas fa-file-image" style="width: 50px; font-size: 30px; margin-top: 20px;"></i>
            <input type="file" class="fileSerPersonalizado">
        </div>
        <div class="col">
            <img src="../img/Ventas/uña1.jfif" alt="imagenServicioActual" width="150">
        </div>

    </div>
    <div style="margin-top: 30px;">
        <Label><strong>Descripcion: </strong></Label>
        <div class="form-floating  descripcion">

            <textarea class="form-control personalizarServicio"></textarea>
            <label style="font-size: 20px;">Uñas sencillas para ocaciones especiales</label>
        </div>
        <br><br>
        <a class="btn d-grid gap-2 btn-success" onclick="ConfirmacionEditarServicio()">Editar Servicio</a>
        <br><br>
</div>


<script src="../js/Ventas/Ventas.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@endsection
