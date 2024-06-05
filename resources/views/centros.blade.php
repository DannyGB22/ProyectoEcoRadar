@extends('layouts.plantilla')

@section('titulo', 'Centros de reciclaje')

@section('contenido')
<div class="container mx-auto p-8 bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-green-600 mb-6">Centros de reciclaje</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex flex-col md:flex-row items-center bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/centro1.jpg') }}" alt="Centro de Reciclaje 1" class="w-full md:w-1/2 h-48 md:h-auto object-cover">
                <div class="p-6 w-full md:w-1/2">
                    <h5 class="text-lg font-bold mb-4">Centro Green Recyclin</h5>
                    <a href="https://maps.app.goo.gl/AvB1gS9ydETh3wYf9" class="inline-block bg-green-500 text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300" target="_blank">Ubicación</a>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/centro2.jpg') }}" alt="Centro de Reciclaje 2" class="w-full md:w-1/2 h-48 md:h-auto object-cover">
                <div class="p-6 w-full md:w-1/2">
                    <h5 class="text-lg font-bold mb-4">Centro Recicladora Quintanar</h5>
                    <a href="https://maps.app.goo.gl/9E1LBwgGp3QHrqUj9" class="inline-block bg-green-500 text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300" target="_blank">Ubicación</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
