
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

</head>
<body style="padding-bottom: 40px; margin-bottom: 40px;">

    @include('partials.navbar')

    @yield('contenido')

    <footer class="text-light py-1 fixed-bottom" style="background: black">
        <div class="container text-center">
            <p class="mb-0 ">EcoRadar &copy; {{date('d/m/Y')}}</p>
        </div>
    </footer>
</body>

</html>