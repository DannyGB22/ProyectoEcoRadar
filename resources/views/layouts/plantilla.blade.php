
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body style="padding-bottom: 40px; margin-bottom: 40px;">

    @include('partials.navbar')

    

    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 mt-8 p-8" style="background-color:#02B126;">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            @yield('contenido')
        </div>
    </div>
    




           <!-- Modal -->
<div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-60 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg w-11/12 max-w-2xl p-8 relative">
        <button id="close-modal" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>
        <div id="modal-content">
            <!-- El contenido del modal se llenará dinámicamente -->
        </div>
    </div>
</div>


    <footer class="text-light py-1 fixed-bottom" style="background: black">
        <div class="container text-center">
            <p class="mb-0 ">EcoRadar &copy; {{date('d/m/Y')}}</p>
        </div>
    </footer>
    </body>

</html>