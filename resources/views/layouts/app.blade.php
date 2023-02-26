<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Abamap') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div id="app">
        <header class="sticky-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="main-nav">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('image/Abamap-logo.jpg')}}" alt="abamap">
                        {{-- {{ config('app.name', 'Abamap') }} --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            {{-- <li></li> --}}
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            {{-- @guest
                                @if (Route::has('login'))
                                    <li class="nav-item active">
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
                            @endguest --}}
                            <li class="nav-item mx-3 {{request()->routeIs('inicio')?'active':''}}">
                                <a class="nav-link fs-5" href="{{route('inicio')}}">Inicio</a>
                            </li>
                            <li class="nav-item mx-3 {{request()->routeIs('producto.servicio')?'active':''}}">
                                <a class="nav-link fs-5" href="{{route('producto.servicio')}}">Productos y Servicios</a>
                            </li>
                            <li class="nav-item mx-3 {{request()->routeIs('contacto')?'active':''}}">
                                <a class="nav-link fs-5" href="{{route('contacto')}}">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
