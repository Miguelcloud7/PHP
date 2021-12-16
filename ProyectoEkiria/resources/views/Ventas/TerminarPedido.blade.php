@extends('adminlte::page')
@include('Ventas.ComplementosVentas')


@section('title', 'Terminar Pedido')

@section('content_header')
    <h1>Terminar Pedido</h1>
@stop

@section('content')
<h1>Finalizar Compra</h1>

<div class="body">
  <form >
    <div class="row">
      <div class="col-6">
        <label class="label-control">Seleccione una fecha y hora para su cita:</label>
        <br><br>
        <input type="datetime-local" >
        <br><br>
        <label class="label-control">Descripción (Opcional):</label>
        <br>
        <textarea  cols="60" rows="10"></textarea>
        <br><br>
      </div>
      <div class="col-6">
        <section class="infoTerminar">
          <h4>Recuerde que los precios pueden variar para más información contáctanos al WhatsApp +57 3206374472  </h4>
        </section>
      </div>

      <a href="{% url 'calendario' %}" class="btn btn-success">Agendar Cita</a>
    </div>

  </form>


  <br><br><br><br>
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
