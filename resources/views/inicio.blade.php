@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left p-4">
                <h1 class="text-5xl italic font-bold text-green-600 mb-6">¡Bienvenido a EcoRadar!</h1>
                <p class="text-xl mb-4">
                    Somos un sistema web dedicado a encontrar puntos de reciclaje en tu ciudad.
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

       {{--  Acerca de... --}}

        <div class="flex flex-col md:flex-row items-center mt-8">
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
                    EcoRadar proporciona información sobre los tipos de materiales reciclables no convencionales y la importancia de reciclarlos. Ofrecemos un motor de búsqueda que permite a los usuarios encontrar centros de reciclaje cercanos, detalles sobre los procedimientos de reciclaje y recursos educativos para fomentar la sostenibilidad.
                </p>
            </div>
        </div>

        {{-- fin acerca de --}}

        {{-- Cards de informacion --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
    <!-- Card 1: Consejos sobre reciclaje -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-3 flex flex-col max-h-96">
        <img src="{{ asset('images/img1.png') }}" alt="Consejos sobre reciclaje" class="w-full h-32 object-cover rounded-lg">
        <div class="p-4 flex flex-col justify-between flex-grow">
            <a class="text-xl font-bold mb-2" href="https://www.nalgeneiberia.com/blog/reciclaje/6-consejos-de-reciclaje/" target="_blank">Consejos sobre reciclaje</a>
            <p class="text-gray-700 text-sm">
                Descubre consejos prácticos para mejorar tus hábitos de reciclaje y reducir tu impacto ambiental. Aprende cómo separar correctamente los residuos y mucho más.
            </p>
        </div>
    </div>

    <!-- Card 2: Formas de reciclar -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-3 flex flex-col max-h-96">
        <img src="{{ asset('images/img4.jpg') }}" alt="Formas de reciclar" class="w-full h-32 object-cover rounded-lg">
        <div class="p-4 flex flex-col justify-between flex-grow">
            <a class="text-xl font-bold mb-2" href="https://procemconsultores.com/formas-de-reciclaje/" target="_blank">Formas de reciclar</a>
            <p class="text-gray-700 text-sm">
                Aprende las diferentes formas de reciclar materiales comunes y no tan comunes. Desde el reciclaje en casa hasta iniciativas comunitarias, descubre cómo puedes hacer la diferencia.
            </p>
        </div>
    </div>

    <!-- Card 3: Materiales reciclables no convencionales -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-3 flex flex-col max-h-96">
        <img src="{{ asset('images/img5.jpg') }}" alt="Materiales reciclables no convencionales" class="w-full h-32 object-cover rounded-lg">
        <div class="p-4 flex flex-col justify-between flex-grow">
            <a class="text-xl font-bold mb-2" href="/materiales">Materiales reciclables no convencionales</a>
            <p class="text-gray-700 text-sm">
                Conoce los materiales reciclables no convencionales que puedes reciclar y cómo hacerlo. Desde electrónicos hasta materiales de construcción, descubre opciones que quizás no conocías.
            </p>
        </div>
    </div>

    <!-- Card 4: Beneficios del reciclaje -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-3 flex flex-col max-h-96">
        <img src="{{ asset('images/img10.jpg') }}" alt="Beneficios del reciclaje" class="w-full h-32 object-cover rounded-lg">
        <div class="p-4 flex flex-col justify-between flex-grow">
            <a class="text-xl font-bold mb-2" href="https://www.ecologiaverde.com/cuales-son-los-beneficios-de-reciclar-66.html" target="_blank">Beneficios del reciclaje</a>
            <p class="text-gray-700 text-sm">
                Descubre los beneficios ambientales, económicos y sociales del reciclaje. Aprende cómo reciclar puede ayudar a conservar recursos naturales y reducir la contaminación.
            </p>
        </div>
    </div>

    <!-- Card: Reciclaje y Salud Pública -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-3 flex flex-col max-h-96">
        <img src="{{ asset('images/img9.jpg') }}" alt="Reciclaje y Salud Pública" class="w-full h-32 object-cover rounded-lg">
        <div class="p-4 flex flex-col justify-between flex-grow">
            <a class="text-xl font-bold mb-2" href="https://www.leonardo-gr.com/es/blog/la-importancia-de-una-gesti-n-adecuada-de-los-residuos-para-la-salud-p-blica-y-el-medio/" target="_blank">Reciclaje y Salud Pública</a>
            <p class="text-gray-700 text-sm">
                Aprende cómo el reciclaje contribuye a mejorar la salud pública. Descubre cómo la reducción de residuos y la correcta gestión de materiales peligrosos pueden disminuir la contaminación y prevenir enfermedades.
            </p>
        </div>
    </div>

    <!-- Card 6: Reciclaje y educación -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-3 flex flex-col max-h-96">
        <img src="{{ asset('images/img8.png') }}" alt="Reciclaje y educación" class="w-full h-32 object-cover rounded-lg">
        <div class="p-4 flex flex-col justify-between flex-grow">
            <a class="text-xl font-bold mb-2" href="https://www.smv.es/educar-en-el-reciclaje-la-importancia-de-crear-conciencia-medioambiental-en-la-infancia/" target="_blank">Reciclaje y educación</a>
            <p class="text-gray-700 text-sm">
                Infórmate sobre la importancia de crear conciencia medioambiental en la infancia. Estrategias para enseñar a reciclar a los niños y fomentar hábitos de reciclaje a largo plazo.
            </p>
        </div>
    </div>
</div>
{{-- Fin de cards --}}


@endsection
