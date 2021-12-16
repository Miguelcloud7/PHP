@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
<h1>Editar Cita</h1>
<div class="container-fluid">


        <div class="row " style="background-color: rgba(253, 253, 253, 0.795); margin-top: 30px;" >
            <div class="col-3"><img src="../img/Ventas/Persona.jfif" alt="" width="200" style="margin-top: 20px;"></div>
            <div class="col-7">
                <div class="row" style="margin-top:50px;" >
                    <h3><strong>Nombre: </strong>Maria Eugenia Davila</h3>
                    <h3><strong>Celular: </strong>3006558978</h3>
                    <h3><strong>Email: </strong>mariaE45@gmail.com</h3>
                    <h3><strong>Direccion: </strong>CLL 107 F #78 B-04</h3>
                </div>
            </div>
        </div>
        <div class="row " style="margin-top: 50px; ">
            <div class="col">
                <div class="input-group">
                    <label style="margin-right: 20px; margin-top: 10px;"> Buscar Servicios: </label>
                    <div class="form-outline">
                      <input type="search" id="form1" class="form-control">

                    </div>
                    <button type="button" class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
            </div>

               <br><br>

                <table class="table table-striped " style="background-color: rgba(253, 253, 253, 0.795);">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Precio</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="../img/Ventas/uña1.jfif" class="" width="150" height="100"></td>
                            <td>Uñas Sencillas</td>
                            <td>$15000</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><img src="../img/Ventas/uña1.jfif" class="" width="150" height="100"></td>
                            <td>Uñas Sencillas</td>
                            <td>$15000</td>

                        </tr>
                    </tbody>
                </table>
                <br><br>
                <div class="col Datos1DetalleCita">
                    <Label><strong>Fecha de la cita: </strong></Label>
                    <input type="datetime-local" value="2021-06-12T19:30" style="font-size: 20px;">
                </div>
                <br><br>
                <br>
                <br>
            <div class=" Datos1DetalleCita">
                    <Label><strong>Comentarios: </strong></Label>
                    <div class="form-floating  descripcion">

                        <textarea class="form-control personalizarServicio"></textarea>
                    </div>
                </div>

                <br><br><br><br>
                <div class="row">
                    <br>
                    <div class="col">
                         <a class="btn d-grid gap-2 btn-secondary" onclick="ConfirmarNoGuardarCita()">Salir</a>
                    </div>
                    <div class="col">
                        <a class="btn d-grid gap-2 btn-success" onclick="GuardarCita()">Guardar</a>
                    </div>
                    <div class="col">
                        <a class="btn d-grid gap-2 btn-danger" onclick="CancelarCita2()">Cancelar Cita</a>
                    </div>
                </div>
                <br><br><br>

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
