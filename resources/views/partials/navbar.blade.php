<head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>
<div class="menu" >
    <nav>
        <div class="grid grid-cols-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h2 style="font-family: 'Alice', sans-serif; color: green">EcoRadar</h2>
            </a>
            <div>
                <ul>
                    <li><a href="/"><i class="material-icons">recycling</i></a></li>
                    <li><a href="/perfil"><i class="material-icons">person</i></a></li> 
                    <li><a href="/busquedaCentros"><i class="material-icons">location_on</i></a></li> 
                    <li><a href="/acerca"><i class="material-icons">contact_support</i></a></li> 
                    <li><a href="/buscadorC"><i class="material-icons">location_searching</i></a></li> 
                    <li><a href="/informacion"><i class="material-icons">contacts</i></a></li> 
                    <li><a href="/contactanos"><i class="material-icons">mail</i></a></li>
                </ul>
            </div>
            <div>
                <ul>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>

    