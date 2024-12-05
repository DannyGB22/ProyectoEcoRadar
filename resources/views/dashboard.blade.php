@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Bienvenido, {{ Auth::user()->name }}</h3>
                    <p>¿Qué deseas hacer hoy?</p>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/') }}" class="btn btn-primary">Inicio</a>
                        <a href="{{ url('/buscarCentros') }}" class="btn btn-success">Búsqueda de Centros</a>
                        <a href="{{ url('/acerca') }}" class="btn btn-info">Acerca</a>
                        <a href="{{ url('/contactanos') }}" class="btn btn-warning">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
