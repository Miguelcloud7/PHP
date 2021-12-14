@extends('layout')

@section('titulo', "Prueba")

@section('contenido')

{{$titulo}}
<h3>holis estoy dentro de una carpeta</h3>

@forelse ( $lista as $midato)
    {{$midato}}
    <br>
@empty
    <h1>que mas ñero</h1>
@endforelse

@endsection
