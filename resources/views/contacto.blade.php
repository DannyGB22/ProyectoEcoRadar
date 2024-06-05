@extends('layouts.plantilla')

@section('titulo', 'Contáctanos')

@section('contenido')
<div class="container mx-auto p-8 bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-green-600 mb-6 text-center">Contáctanos</h1>
        <p class="text-gray-700 mb-8 text-center">Si tienes alguna pregunta, sugerencia o necesitas más información, no dudes en contactarnos a través del siguiente formulario o utilizando nuestros datos de contacto.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Formulario de Contacto -->
            <div>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700">Nombre</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring focus:ring-green-200 focus:border-green-500">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring focus:ring-green-200 focus:border-green-500">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700">Mensaje</label>
                        <textarea id="message" name="message" rows="4" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring focus:ring-green-200 focus:border-green-500"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-green-500 text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300">Enviar</button>
                    </div>
                </form>
            </div>

            <!-- Información de Contacto -->
            <div class="flex flex-col justify-center">
                <h2 class="text-2xl font-bold text-green-600 mb-4">Información de Contacto</h2>
                <p class="text-gray-700 mb-2"><strong>Teléfono:</strong> +52 123 456 7890</p>
                <p class="text-gray-700 mb-2"><strong>Correo Electrónico:</strong> contacto@ecoradar.com</p>
                <p class="text-gray-700 mb-2"><strong>Dirección:</strong> Calle Falsa 123, Colonia Verde, Ciudad, País</p>
            </div>
        </div>
    </div>
</div>
@endsection
