@extends('layouts.plantilla')

@section('titulo', 'Acerca de')

@section('contenido')
<div class="container mx-auto p-8 bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/img2.jpg') }}" alt="EcoRadar" class="rounded-lg shadow-lg mb-4 md:mb-0">
            </div>
            <div class="w-full md:w-1/2 md:pl-8">
                <h1 class="text-4xl font-bold text-green-600 mb-6">Acerca de EcoRadar</h1>
                <p class="text-gray-700 mb-4">
                    EcoRadar es un servicio que proporciona una plataforma web ofreciendo información, herramientas y recursos a sus usuarios. No se trata de un producto físico tangible, sino de una solución digital que facilita el acceso a información y servicios relacionados con el reciclaje y la sostenibilidad ambiental.
                </p>
                <p class="text-gray-700 mb-4">
                    Este servicio permite a los usuarios encontrar centros de reciclaje, obtener detalles sobre procedimientos de reciclaje y acceder a recursos educativos, lo que caracteriza a EcoRadar como un servicio web orientado a la comunidad. Nuestro objetivo es crear una página web intuitiva y de fácil acceso que sirva como una herramienta valiosa para la comunidad en su esfuerzo por reciclar materiales aparentemente no reciclables.
                </p>
                <p class="text-gray-700">
                    EcoRadar proporciona información detallada sobre los tipos de materiales no reciclables y la importancia de reciclarlos. Ofrecemos un motor de búsqueda que permite a los usuarios encontrar centros de reciclaje cercanos, detalles sobre los procedimientos de reciclaje y recursos educativos para fomentar la sostenibilidad.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
