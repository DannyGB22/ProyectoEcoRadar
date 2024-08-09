@extends('layouts.plantilla')

@section('titulo', 'Contáctanos')

@section('contenido')
    {{-- <div class="container mx-auto p-4 sm:p-6 lg:p-8 bg-gray-100"> --}}
        <div class="bg-white p-4 sm:p-6 lg:p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl sm:text-4xl font-bold text-green-600 mb-4 sm:mb-6 text-center">Contáctanos</h1>
            
            <!-- Botones para alternar vistas -->
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 mb-6">
                <button id="supportButton" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Soporte</button>
                <button id="recycleCenterButton" class="bg-green-500 text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300">Registra tu Centro de Reciclaje</button>
            </div>
            
            <!-- Contenedor de soporte -->
            <div id="supportContainer" class="hidden mx-auto mb-10 p-4 sm:p-6 lg:p-8 max-w-full sm:max-w-lg bg-white shadow-2xl rounded-3xl border border-transparent">
                <p class="text-green-600 mb-4 sm:mb-6 text-center font-bold">Si tienes alguna duda, sugerencia o feedback completa el siguiente formulario.</p>
                <form action="{{ route('support.send') }}" method="POST" class="space-y-4 sm:space-y-6">
                    @csrf
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <div class="relative flex-1">
                            <label for="Nombre" class="block text-green-700 font-medium">Nombre</label>
                            <input type="text" id="Nombre" name="Nombre" value="{{old('Nombre')}}" class="w-full mt-2 bg-white border-b-2 border-green-300 focus:border-green-600 focus:outline-none transition-colors duration-200">
                            @error('Nombre')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative flex-1">
                            <label for="Correo" class="block text-green-700 font-medium">Correo Electrónico</label>
                            <input type="email" id="Correo" name="Correo" value="{{old('Correo')}}" class="w-full mt-2 bg-white border-b-2 border-green-300 focus:border-green-600 focus:outline-none transition-colors duration-200">
                            @error('Correo')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="relative">
                        <label for="Mensaje" class="block text-green-700 font-medium">Mensaje</label>
                        <textarea id="Mensaje" name="Mensaje" rows="4" class="w-full mt-2 bg-white border-b-2 border-green-300 focus:border-green-600 focus:outline-none transition-colors duration-200">{{ old('Mensaje') }}</textarea>
                        @error('Mensaje')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">Enviar</button>
                    </div>
                </form>
            </div>

            <!-- Contenedor de registro de centro de reciclaje -->
            <div id="recycleCenterContainer" class="hidden mx-auto mb-10 p-4 sm:p-6 lg:p-8 max-w-full sm:max-w-lg bg-white shadow-2xl rounded-3xl border border-transparent">
                <p class="text-green-600 mb-4 sm:mb-6 text-center font-semibold">Si eres un centro de reciclaje, puedes registrarte en nuestra página completando el siguiente formulario.</p>
                <form action="{{ route('recycle-center.send') }}" method="POST" class="space-y-4 sm:space-y-6">
                    @csrf
                    <div class="relative">
                        <label for="Centro" class="block text-green-700 font-medium">Nombre del Centro de Reciclaje</label>
                        <input type="text" id="Centro" name="Centro" value="{{old('Centro')}}" class="w-full mt-2 bg-white border-b-2 border-green-300 focus:border-green-600 focus:outline-none transition-colors duration-200">
                        @error('Centro')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative">
                        <label for="Materiales" class="block text-green-700 font-medium">Materiales que reciclan</label>
                        <div class="flex flex-wrap mt-2 gap-2 sm:gap-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="Unicel" name="Materiales[]" value="Unicel" class="h-4 w-4 text-green-500 focus:ring-2 focus:ring-green-500 border-gray-300 rounded transition duration-300">
                                <label for="Unicel" class="ml-2 text-green-700">Unicel</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="Colillas de cigarro" name="Materiales[]" value="Colillas de cigarro" class="h-4 w-4 text-green-500 focus:ring-2 focus:ring-green-500 border-gray-300 rounded transition duration-300">
                                <label for="Colillas de cigarro" class="ml-2 text-green-700">Colillas de cigarro</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="Escombro" name="Materiales[]" value="Escombro" class="h-4 w-4 text-green-500 focus:ring-2 focus:ring-green-500 border-gray-300 rounded transition duration-300">
                                <label for="Escombro" class="ml-2 text-green-700">Escombro</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="Pilas o baterías" name="Materiales[]" value="Pilas o baterías" class="h-4 w-4 text-green-500 focus:ring-2 focus:ring-green-500 border-gray-300 rounded transition duration-300">
                            <label for="Pilas o baterías" class="ml-2 text-green-700">Pilas o baterías</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="Residuos Electrónicos" name="Materiales[]" value="Residuos Electrónicos" class="h-4 w-4 text-green-500 focus:ring-2 focus:ring-green-500 border-gray-300 rounded transition duration-300">
                            <label for="Residuos Electrónicos" class="ml-2 text-green-700">Residuos Electrónicos</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="otros" name="Materiales[]" value="otros" class="h-4 w-4 text-green-500 focus:ring-2 focus:ring-green-500 border-gray-300 rounded transition duration-300" onclick="toggleOtrosInput()">
                                <label for="otros" class="ml-2 text-green-700">Otros</label>
                            </div>
                        </div>
                        @error('Materiales')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative" id="otrosInputContainer" style="display: none;">
                        <label for="Otros_Materiales" class="block text-green-700 font-medium">Especifica otros materiales</label>
                        <input type="text" id="Otros_Materiales" name="Otros_Materiales" value="{{old('Otros_Materiales')}}" class="w-full mt-2 bg-white border-b-2 border-green-300 focus:border-green-600 focus:outline-none transition-colors duration-200">
                        @error('Otros_Materiales')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative">
                        <label for="URL_GoogleMaps" class="block text-green-700 font-medium">URL de Google Maps</label>
                        <input type="url" id="URL_GoogleMaps" name="URL_GoogleMaps" value="{{old('URL_GoogleMaps')}}" class="w-full mt-2 bg-white border-b-2 border-green-300 focus:border-green-600 focus:outline-none transition-colors duration-200">
                        @error('URL_GoogleMaps')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 sm:px-8 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">Enviar</button>
                    </div>
                </form>
            </div>

            <!-- Información de Contacto -->
            <div class="flex flex-col justify-center mt-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-green-600 mb-2 sm:mb-4">Información de Contacto</h2>
                <p class="text-gray-700 mb-1 sm:mb-2"><strong>Teléfono:</strong> +52 442 456 7890</p>
                <p class="text-gray-700 mb-1 sm:mb-2"><strong>Correo Electrónico:</strong> EcoRadar.upq@gmail.com</p>
                <p class="text-gray-700 mb-1 sm:mb-2"><strong>Dirección:</strong> Carretera Estatal 420 S/N, El Rosario, 76240, Santiago de Querétaro, Qro.</p>
            </div>
        </div>
    </div>

<script>
    function toggleOtrosInput() {
        var otrosCheckbox = document.getElementById('otros');
        var otrosInputContainer = document.getElementById('otrosInputContainer');
        otrosInputContainer.style.display = otrosCheckbox.checked ? 'block' : 'none';
    }
</script>

<script>
    document.getElementById('supportButton').addEventListener('click', function() {
        document.getElementById('supportContainer').classList.toggle('hidden');
        document.getElementById('recycleCenterContainer').classList.add('hidden');
    });

    document.getElementById('recycleCenterButton').addEventListener('click', function() {
        document.getElementById('recycleCenterContainer').classList.toggle('hidden');
        document.getElementById('supportContainer').classList.add('hidden');
    });
</script>

<script>
    @if(session('success'))
        Swal.fire({
            title: 'Formulario enviado con éxito.',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'Ok'
        });
    @endif

    @if ($errors->any())
        Swal.fire({
            title: 'Error: Es necesario completar todos los campos.',
            text: 'Click para cerrar',
            icon: 'error',
            confirmButtonText: 'Ok'
        });
    @endif
</script>
@endsection
