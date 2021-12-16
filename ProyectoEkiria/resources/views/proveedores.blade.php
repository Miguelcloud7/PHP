@extends('layout')
<h1>{{$titulo}}</h1>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<!---CREAR PROVEEDOR-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="agregar_prov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ageLabel">Crear proveedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">
  <form action="{{route ('guardar')}}" class="form-p" method="POST">
  @csrf

@if($errors->any())
    @foreach($errors->all() as $error)
    @endforeach
@endif
            <div class="form-group">
            <label for="nombre" >Nombre</label>
             <input type="text" name="nombre" id="nombre" placeholder="Nombre"class="form-control" value="{{old('nombre')}}" >
             <small class="text-danger">{{$errors->first('nombre')}}</small>
            </div>
            <br>
            <div class="form-group">
             <label for="Tel" >Télefono</label>
             <input type="text" name="telefono" id="Tel" placeholder="apellido"class="form-control" value="{{old('telefono')}}">
             <small class="text-danger">{{$errors->first('telefono')}}</small>
             </div>
             <br>
             <div class="form-group">
             <label for="celular" >Celular</label>
             <input type="number" name="celular" id="celular" placeholder="celular"class="form-control" value="{{old('celular')}}">
             <small class="text-danger">{{$errors->first('celular')}}</small>
             </div>
             <br>
             <div class="form-group">
             <label for="encar" >Encargo</label>
             <input type="text" name="encargado" id="encar" placeholder="correo"class="form-control" value="{{old('encargado')}}">
             <small class="text-danger">{{$errors->first('encargado')}}</small>
             </div>
             <br>
             <div class="form-group">
             <label for="des" >Descripción</label>
             <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
             <small class="text-danger">{{$errors->first('descripcion')}}</small>
             </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" >Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>


  <!---BORRAR PROVEEDOR-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="borrar_prov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ageLabel">Borrar proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Si quiere borrar al proveedor dale al botón confirmar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<!--EDITAR PROVEEDOR--->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="editar_prov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ageLabel">Editar proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" class="form-p">
          <label for="nombre" >Nombre</label>
          <br>
           <input type="text" name="nombre" id="nombre" placeholder="Nombre"class="form-control">
            <br>
           <label for="Tel" >Télefono</label>
           <br>
            <input type="tel" name="Telefono" id="Tel" placeholder="Télefono" class="form-control">
            <br>
            <label for="email" >E-mail</label>
            <br>
             <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
              <br>
             <label for="encargo" >Encargo</label>
             <br>
              <input type="text" name="Encargo" id="encargo" placeholder="Encargo" class="form-control">
              <br>
              <label for="descrip" >Descripción</label>
              <br>
              <textarea class="form-control" id="descrip" rows="3"></textarea>
           </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>
  @section('contenido')

    <div class="container">
    <main>
        <a href="#" class="logotipo" id="logotipo">
            <div class="texto-animado" id="logo">PROVEEDORES</div>
        </a>
  </main>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar_prov" style="margin-left: 96%;" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg>
        </button>
      @include('tabla_prov')
    </div>

@endsection


@section('script')

@if(session("mensaje"))
<script>
    Swal.fire('{{session('mensaje')}}')
</script>

@endif

@if($errors->any())
    <script>
   $(document).ready(function(){
    $('#agregar_prov').modal('show');
   });
    </script>
@endif


