
@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<div class="container-fluid bg-dark py-5">
    <div class="row">
        <div class="col-md-6 text-white">
            <h1 class="display-1 fst-italic text-center">¡Bienvenido a EcoRadar!</h1>
            <p class="lead text-center">Somos un sitio web dedicado a encontrar puntos de reciclaje en tu ciudad.</p>
            <p class="text-center">Nuestro objetivo es fomentar la cultura del reciclaje y contribuir al cuidado del medio 
                ambiente. ¡Únete a nosotros y juntos hagamos del mundo un lugar mas sostenible!
            </p>
        </div>
        <div class="col-md-6">
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/G3Vlm8abEfc" frameborder="0" allow="accelerometer;
                 autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
