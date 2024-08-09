@extends('layouts.plantilla')

@section('titulo', 'Materiales no convencionales')

@section('contenido')



    {{-- <div class="container mx-auto p-5"> --}}
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-green-600">Materiales Reciclables No Convencionales</h1>
        </div>

        <!-- Horizontal Scroll Layout -->
        <div class="overflow-x-auto pb-6">
            <div class="flex space-x-6">
                <!-- Section 1 -->
                <div class="w-80 flex-none bg-gradient-to-r from-green-400 to-blue-500 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/residuos.jpg') }}" alt="Electronic Waste" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-3 text-white">Residuos Electrónicos</h2>
                    <p class="text-white mb-4 text-sm">
                        Los residuos electrónicos contienen materiales valiosos que pueden ser reciclados. Reciclar estos dispositivos evita la liberación de sustancias tóxicas al medio ambiente.
                    </p>
                </div>

                <!-- Section 2 -->
                <div class="w-80 flex-none bg-gradient-to-r from-purple-400 to-pink-500 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/escombro.jpg') }}" alt="Construction Materials" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-3 text-white">Materiales de Construcción</h2>
                    <p class="text-white mb-4 text-sm">
                        Los materiales de construcción como madera, metal, vidrio y hormigón pueden ser reciclados y reutilizados, reduciendo la demanda de recursos naturales.
                    </p>
                </div>

                <!-- Section 3 -->
                <div class="w-80 flex-none bg-gradient-to-r from-yellow-400 to-red-500 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/textil.jpg') }}" alt="Textiles" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-3 text-white">Textiles</h2>
                    <p class="text-white mb-4 text-sm">
                        Los textiles, como ropa y sábanas, pueden ser reciclados en nuevas fibras para fabricar ropa nueva, alfombras y otros productos.
                    </p>
                </div>

                <!-- Section 4 -->
                <div class="w-80 flex-none bg-gradient-to-r from-teal-400 to-cyan-500 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/baterias.jpg') }}" alt="Batteries" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-3 text-white">Baterías y Pilas</h2>
                    <p class="text-white mb-4 text-sm">
                        El reciclaje de baterías evita que los metales pesados y sustancias químicas dañinas contaminen el suelo y el agua.
                    </p>
                </div>

                <!-- Section 5 -->
                <div class="w-80 flex-none bg-gradient-to-r from-indigo-400 to-purple-500 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/colillas.jpg') }}" alt="Cigarette Butts" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-3 text-white">Colillas de Cigarrillo</h2>
                    <p class="text-white mb-4 text-sm">
                        Las colillas de cigarrillo pueden ser recicladas para recuperar materiales como acetato de celulosa, ayudando a reducir la contaminación del suelo y el agua.
                    </p>
                </div>

                <!-- Section 6 -->
                <div class="w-80 flex-none bg-gradient-to-r from-green-400 to-teal-500 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/unicel.jpg') }}" alt="Polystyrene" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-3 text-white">Unicel</h2>
                    <p class="text-white mb-4 text-sm">
                        Aunque difícil de reciclar, el unicel puede ser compactado y transformado en nuevos productos, reduciendo la cantidad de desechos voluminosos en vertederos.
                    </p>
                </div>

                <!-- Section 7 -->
                <div class="w-80 flex-none bg-gradient-to-r from-pink-400 to-orange-500 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/neumatico.png') }}" alt="Miscellaneous Items" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-3 text-white">Otros Materiales No Convencionales</h2>
                    <p class="text-white mb-4 text-sm">
                        Otros materiales como neumáticos, aceite usado y cartuchos de tinta también pueden ser reciclados, reduciendo el impacto ambiental.
                    </p>
                </div>
            </div>
        </div>
    {{-- </div> --}}


    


@endsection


{{-- modales --}}

