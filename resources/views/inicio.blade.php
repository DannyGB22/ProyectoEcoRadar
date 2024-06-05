@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')
<div class="container mx-auto p-8 bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left p-4">
                <h1 class="text-5xl italic font-bold text-green-600 mb-6">¡Bienvenido a EcoRadar!</h1>
                <p class="text-xl mb-4">
                    Somos un sitio web dedicado a encontrar puntos de reciclaje en tu ciudad.
                </p>
                <p class="mb-4">
                    Nuestro objetivo es fomentar la cultura del reciclaje y contribuir al cuidado del medio ambiente. ¡Únete a nosotros y juntos hagamos del mundo un lugar más sostenible!
                </p>
            </div>
            <div class="w-full md:w-1/2 p-4">
                <div class="relative overflow-hidden" style="padding-top: 56.25%;">
                    <iframe class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg" src="https://www.youtube.com/embed/G3Vlm8abEfc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
