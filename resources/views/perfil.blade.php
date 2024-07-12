@extends('layouts.plantilla')
@section('titulo', 'Perfil')
@section('contenido')

<div class="container">
    <h1>Perfil de Usuario</h1>
    <p>Nombre: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <a href="{{ url('/users') }}" class="btn btn-primary">Ver Usuarios</a>
</div>

@endsection
