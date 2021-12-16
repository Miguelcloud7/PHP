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
  <form action="{{route ('guardarprov')}}" class="form-p" method="POST">
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
             <input type="text" name="telefono" id="Tel" placeholder="Télefono"class="form-control" value="{{old('telefono')}}">
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
             <input type="text" name="encargado" id="encar" placeholder="Encargo"class="form-control" value="{{old('encargado')}}">
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
        <table class="table table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Télefono</th>
                <th scope="col">E-mail</th>
                <th scope="col">Encargo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
        
            

            <tbody>
@forelse ($proveedores as $proveedor)
                <tr>    
                    <th>{{$proveedor->nombre}}</th>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->celular}}</td>
                    <td>{{$proveedor->encargado}}</td>
                    <td>{{$proveedor->descripcion}}</td>
                <td>
                    <form class="borrarprov" action="{{route ('borrarprov', $proveedor)}}" method="POST">
                        <a href="#{{$proveedor->id_proveedores}}" class="btn btn-info" data-bs-target="#editar_prov{{$proveedor->id_proveedores}}" data-bs-toggle="modal" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg></a>
                        @csrf @method('DELETE')
                        <button type="submit" href="#" class="btn btn-danger" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg></button>
                           
                
                    </form>
                </td>
              </tr>

             <!--EDITAR PROVEEDOR--->
  <div class="modal fade"  id="editar_prov{{$proveedor->id_proveedores}}"   class="modal-dialog modal-dialog-scrollable"data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editar_prov" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ageLabel">Editar proveedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
          <form action="{{route ('actualizarprov', $proveedor)}}" class="form-p" method="POST">
              <div class="modal-body">
              @csrf @method('PUT')
            
            @if($errors->any())
                @foreach($errors->all() as $error)
                @endforeach
            @endif
                        <div class="form-group">
                        <label for="nombre" >Nombre</label>
                         <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="{{old('nombre',$proveedor->nombre)}}">
                         <small class="text-danger">{{$errors->first('nombre')}}</small>
                        </div>
                        <br>
                        <div class="form-group">
                         <label for="Tel" >Télefono</label>
                         <input type="text" name="telefono" id="Tel" placeholder="Télefono" class="form-control" value="{{old('telefono',$proveedor->telefono)}}">
                         <small class="text-danger">{{$errors->first('telefono')}}</small>
                         </div>
                         <br>
                         <div class="form-group">
                         <label for="celular" >Celular</label>
                         <input type="number" name="celular" id="celular" placeholder="celular" class="form-control" value="{{old('celular',$proveedor->celular)}}">
                         <small class="text-danger">{{$errors->first('celular')}}</small>
                         </div>
                         <br>
                         <div class="form-group">
                         <label for="encar" >Encargo</label>
                         <input type="text" name="encargado" id="encar" placeholder="Encargo" class="form-control" value="{{old('encargado',$proveedor->encargado)}}">
                         <small class="text-danger">{{$errors->first('encargado')}}</small>
                         </div>
                         <br>
                         <div class="form-group">
                         <label for="des" >Descripción</label>
                         <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="{{old('descripcion',$proveedor->descripcion)}}"></textarea>
                         <small class="text-danger">{{$errors->first('descripcion')}}</small>
                         </div>
            
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary" >Actualizar</button>
                    </div>
                </form>
                  </div>
                </div>
            </div>
              @empty
              No hay datos
              @endforelse
            </tbody>
        
          </table>
        
    </div>

@endsection  

@section('script')



<script>
    $(document).ready(function(){
    $('.borrarprov').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Seguro que desea eliminar el proveedor?',
            text: "Esto no se puede revertir",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })
    });
});
</script>


@if(session("mensaje"))
<script>
    Swal.fire('{{session('mensaje')}}')
</script>

@endif

@if($errors->any())
    <script>
   $(document).ready(function(){
    $('#').modal('show');
   });
    </script>
@endif


