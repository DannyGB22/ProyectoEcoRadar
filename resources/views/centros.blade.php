@extends('layouts.plantilla')

@section('titulo', 'Centros de reciclaje')

@section('contenido')
{{-- <link rel="stylesheet" href="{{ asset('css/centros.css') }}"> --}}
<div class="container mt-4">
    <h1 style="font-family: 'Alice', sans-serif;">Centros de Reciclaje</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ asset('images/centro1.jpg') }}" class="card-img-top" alt="Centro de Reciclaje 1">
                <div class="card-body">
                    <h5 class="card-title">Centros de Reciclaje en Querétaro</h5>
                    {{-- <p class="card-text"></p> --}}
                    <a href="https://maps.app.goo.gl/AvB1gS9ydETh3wYf9" class="btn btn-primary stretched-link" target="_blank">Ubicación</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ asset('images/centro2.jpg') }}" class="card-img-top" alt="Centro de Reciclaje 2">
                <div class="card-body">
                    <h5 class="card-title">Centros de Reciclaje en Querétaro</h5>
                    {{-- <p class="card-text"></p> --}}
                    <a href="https://maps.app.goo.gl/9E1LBwgGp3QHrqUj9" class="btn btn-primary stretched-link" target="_blank">Ubicación</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
