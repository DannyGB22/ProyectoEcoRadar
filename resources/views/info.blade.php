@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')
<div class="container mx-auto p-8 bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h1 class="text-4xl font-bold text-green-600 mb-6 text-center">Bienvenido a EcoRadar</h1>
        <p class="text-gray-700 mb-8 text-center">
            En EcoRadar, te ofrecemos la mejor información y consejos sobre reciclaje para ayudarte a contribuir al cuidado del medio ambiente. Descubre formas de reciclar, materiales reciclables no convencionales y más.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1: Consejos sobre reciclaje -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('images/img1.png') }}" alt="Consejos sobre reciclaje" class="w-full h-48 object-cover">
            <div class="p-6">
               {{--  <h5 class="text-2xl font-bold mb-4">Consejos sobre reciclaje</h5> --}}
                <a class="text-2xl font-bold mb-4" href="https://www.nalgeneiberia.com/blog/reciclaje/6-consejos-de-reciclaje/" target="_blank">Consejos sobre reciclaje</a>
                <p class="text-gray-700 mb-4">
                    Descubre consejos prácticos para mejorar tus hábitos de reciclaje y reducir tu impacto ambiental. Aprende cómo separar correctamente los residuos y mucho más.
                </p>
            </div>
        </div>

        <!-- Card 2: Formas de reciclar -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('images/img4.jpg') }}" alt="Formas de reciclar" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-2xl font-bold mb-4">Formas de reciclar</h5>
                <p class="text-gray-700 mb-4">
                    Aprende las diferentes formas de reciclar materiales comunes y no tan comunes. Desde el reciclaje en casa hasta iniciativas comunitarias, descubre cómo puedes hacer la diferencia.
                </p>
            </div>
        </div>

        <!-- Card 3: Materiales reciclables no convencionales -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('images/img5.jpg') }}" alt="Materiales reciclables no convencionales" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-2xl font-bold mb-4">Materiales reciclables no convencionales</h5>
                <p class="text-gray-700 mb-4">
                    Conoce los materiales reciclables no convencionales que puedes reciclar y cómo hacerlo. Desde electrónicos hasta materiales de construcción, descubre opciones que quizás no conocías.
                </p>
            </div>
        </div>
        
        <!-- Card 4: Beneficios del reciclaje -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('images/beneficios_reciclaje.jpg') }}" alt="Beneficios del reciclaje" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-2xl font-bold mb-4">Beneficios del reciclaje</h5>
                <p class="text-gray-700 mb-4">
                    Descubre los beneficios ambientales, económicos y sociales del reciclaje. Aprende cómo reciclar puede ayudar a conservar recursos naturales y reducir la contaminación.
                </p>
            </div>
        </div>

        <!-- Card 5: Reciclaje en la comunidad -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('images/reciclaje_comunidad.jpg') }}" alt="Reciclaje en la comunidad" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-2xl font-bold mb-4">Reciclaje en la comunidad</h5>
                <p class="text-gray-700 mb-4">
                    Participa en iniciativas de reciclaje en tu comunidad. Descubre cómo puedes colaborar con vecinos y organizaciones locales para fomentar el reciclaje y la sostenibilidad.
                </p>
            </div>
        </div>

        <!-- Card 6: Reciclaje y educación -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('images/reciclaje_educacion.jpg') }}" alt="Reciclaje y educación" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-2xl font-bold mb-4">Reciclaje y educación</h5>
                <p class="text-gray-700 mb-4">
                    Infórmate sobre programas educativos y recursos para aprender más sobre reciclaje. Descubre cursos, talleres y materiales didácticos para todas las edades.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
