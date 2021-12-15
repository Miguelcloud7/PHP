@extends('layout')

@section('titulo', "Prueba")

@section('contenido')

{{$titulo}}


<h3>holis estoy dentro de una carpeta</h3>


<a type="button"  data-bs-toggle="modal" data-bs-target="#AgregarEmpleado" class="float-end"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
  </svg></a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Numero de Cargo</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @forelse ( $lista as $midato)
        <tr>
            <th scope="row"> {{$midato->id}}</th>
            <td> {{$midato->nombre}}</td>
            <td> {{$midato->apellidos}}</td>
            <td>{{$midato->cargoEmpleado->nombre}}</td>
            <td>
                <form action="{{route('borrar', $midato)}}" method="POST">
                    <a  class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModificarEmpleado{{$midato->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                      </svg></a>
                    <a href="mostrarEmpleado{{$midato->id}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#mostrarEmpleado{{$midato->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                      </svg></a>
                      @csrf
                      @method('DELETE')
                      <button  type="submit"class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg></button>
                </form>

            </td>
        </tr>
        <div class="modal fade" id="mostrarEmpleado{{$midato->id}}" tabindex="-1" aria-labelledby="mostrarEmpleado" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Mostrar Empleado</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" class="form">
                  <form action="{{route('guardar')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" readonly value="{{old('nombre',$midato->nombre)}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" readonly value="{{old('apellido',$midato->apellidos)}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Edad</label>
                        <input type="text" class="form-control" name="edad" readonly value="{{old('edad',$midato->edad)}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cargo</label>
                        <input type="text" class="form-control" name="edad" readonly value="{{old('edad',$midato->cargoEmpleado->nombre)}}">
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                  </form>
                </div>

              </div>
            </div>
          </div>

          {{-- ________________________ --}}
          <!-- Modal modificar empleado -->
          <div class="modal fade" id="ModificarEmpleado{{$midato->id}}" tabindex="-1" aria-labelledby="ModificarEmpleado" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modificar Empleado</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" class="form">
                  <form action="{{route('actualizar', $midato)}}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre"  value="{{old('nombre',$midato->nombre)}}">
                        <small class="text-danger">{{$errors->first('nombre')}}</small>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos"  value="{{old('apellido',$midato->apellidos)}}">
                        <small class="text-danger">{{$errors->first('apellidos')}}</small>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Edad</label>
                        <input type="text" class="form-control" name="edad"  value="{{old('edad',$midato->edad)}}">
                        <small class="text-danger">{{$errors->first('edad')}}</small>
                      </div>
                      <small class="text-danger">{{$errors->first('edad')}}</small>
                      <label for="exampleInputEmail1" class="form-label">Cargo</label>
                      <select class="form-select" aria-label="Default select example" name="idCargo">
                        @forelse ($cargo as $cargito )
                        <option value="{{$cargito->id}}" {{$cargito->id==$midato->idCargo? 'selected':''}}>{{$cargito->nombre}}</option>
                        @empty

                        @endforelse
                      </select>
                       <small class="text-danger">{{$errors->first('idCargo')}}</small>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                      </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        @empty
            <h1>que mas ñero</h1>
        @endforelse
    </tbody>
  </table>



<!-- Modal crear empleado -->
<div class="modal fade" id="AgregarEmpleado" tabindex="-1" aria-labelledby="AgregarEmpleado" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Empleado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" class="form">
          <form action="{{route('guardar')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                <small class="text-danger">{{$errors->first('nombre')}}</small>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="{{old('apellido')}}">
                <small class="text-danger">{{$errors->first('apellidos')}}</small>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" value="{{old('edad')}}">
              </div>
              <small class="text-danger">{{$errors->first('edad')}}</small>
              <select class="form-select" aria-label="Default select example" name="idCargo">
                @forelse ($cargo as $cargito )
                <option value="{{$cargito->id}}">{{$cargito->nombre}}</option>
                @empty

                @endforelse
              </select>
               <small class="text-danger">{{$errors->first('apellido')}}</small>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Crear</button>
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>


@endsection
