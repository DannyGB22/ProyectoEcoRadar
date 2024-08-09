@extends('layouts.plantilla')

@section('contenido')
<div class="min-h-screen flex items-center justify-center bg-green-100">
    <div class="relative w-full max-w-md bg-white shadow-lg rounded-lg p-8 overflow-hidden">
        <!-- Contenido del formulario -->
        <div class="relative z-10">
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Recycling"  class="w-24 h-24 mx-auto mb-6 rounded-full shadow-md{{-- class="w-20 h-20 mx-auto mb-4 --}}">
                <h2 class="text-3xl font-semibold text-green-700">{{ __('¡Bienvenido a EcoRadar!') }}</h2>
                <p class="text-sm text-gray-600 mt-2">Encuentra puntos de reciclaje en tu ciudad y contribuye a un planeta más sostenible.</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Dirección de Email') }}</label>
                    <input id="email" type="email" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="text-red-500 text-sm mt-1 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="text-red-500 text-sm mt-1 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="ml-2 block text-sm text-gray-600" for="remember">
                            {{ __('Recuérdame') }}
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-green-600 hover:text-green-500" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-gradient-to-r from-green-500 to-teal-500 text-white font-semibold py-3 px-12 rounded-full hover:from-teal-500 hover:to-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110">
                        {{ __('Iniciar Sesión') }}
                    </button>
                </div>
            </form>
        </div>

        <!-- Imagen de fondo diagonal -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 w-full h-full bg-no-repeat bg-cover bg-center clip-diagonal opacity-100"
                 style="background-image: url('{{ asset('images/f1.jpg') }}');/*  background-position:0px 0px */"></div>
        </div>
    </div>
</div>

<!-- Estilos personalizados -->
<style>
    .clip-diagonal {
        clip-path: polygon(100% 0, 100% 0, 100% 100%, 0 100%);
    }
</style>
@endsection
