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
    {{-- @viteReactRefresh --}}
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div id="app">
        <header class="sticky-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="main-nav">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('image/Abamap-logo.jpg') }}" alt="abamap">
                        {{-- {{ config('app.name', 'Abamap') }} --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a target="_blank" href="http://wa.me/5215536604108" class="whatsapp-button" title="WhatsApp">
                        <svg width="360" height="362" viewBox="0 0 360 362" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M307.546 52.5655C273.709 18.685 228.706 0.0171895 180.756 0C81.951 0 1.53846 80.404 1.50408 179.235C1.48689 210.829 9.74646 241.667 25.4319 268.844L0 361.736L95.0236 336.811C121.203 351.096 150.683 358.616 180.679 358.625H180.756C279.544 358.625 359.966 278.212 360 179.381C360.017 131.483 341.392 86.4547 307.546 52.5741V52.5655ZM180.756 328.354H180.696C153.966 328.346 127.744 321.16 104.865 307.589L99.4242 304.358L43.034 319.149L58.0834 264.168L54.5423 258.53C39.6304 234.809 31.749 207.391 31.7662 179.244C31.8006 97.1036 98.6334 30.2707 180.817 30.2707C220.61 30.2879 258.015 45.8015 286.145 73.9665C314.276 102.123 329.755 139.562 329.738 179.364C329.703 261.513 262.871 328.346 180.756 328.346V328.354ZM262.475 216.777C257.997 214.534 235.978 203.704 231.869 202.209C227.761 200.713 224.779 199.966 221.796 204.452C218.814 208.939 210.228 219.029 207.615 222.011C205.002 225.002 202.389 225.372 197.911 223.128C193.434 220.885 179.003 216.158 161.891 200.902C148.578 189.024 139.587 174.362 136.975 169.875C134.362 165.389 136.7 162.965 138.934 160.739C140.945 158.728 143.412 155.505 145.655 152.892C147.899 150.279 148.638 148.406 150.133 145.423C151.629 142.432 150.881 139.82 149.764 137.576C148.646 135.333 139.691 113.287 135.952 104.323C132.316 95.5909 128.621 96.777 125.879 96.6309C123.266 96.5019 120.284 96.4762 117.293 96.4762C114.302 96.4762 109.454 97.5935 105.346 102.08C101.238 106.566 89.6691 117.404 89.6691 139.441C89.6691 161.478 105.716 182.785 107.959 185.776C110.202 188.767 139.544 234.001 184.469 253.408C195.153 258.023 203.498 260.782 210.004 262.845C220.731 266.257 230.494 265.776 238.212 264.624C246.816 263.335 264.71 253.786 268.44 243.326C272.17 232.866 272.17 223.893 271.053 222.028C269.936 220.163 266.945 219.037 262.467 216.794L262.475 216.777Z"
                                fill="white" />
                        </svg>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        {{-- <ul class="navbar-nav me-auto">
                            <li></li>
                        </ul> --}}

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
                            <li class="nav-item mx-2 {{ request()->routeIs('inicio') ? 'active' : '' }}">
                                <a class="nav-link fs-5" href="{{ route('inicio') }}">Inicio</a>
                            </li>
                            <li class="nav-item mx-2 {{ request()->routeIs('producto.servicio') ? 'active' : '' }}">
                                <a class="nav-link fs-5" href="{{ route('producto.servicio') }}">Productos y
                                    Servicios</a>
                            </li>
                            <li class="nav-item mx-2 {{ request()->routeIs('contacto') ? 'active' : '' }}">
                                <a class="nav-link fs-5" href="{{ route('contacto') }}">Contacto</a>
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
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="{{ route('inicio') }}" class="nav-link px-2 text-muted">Inicio</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Linkedin</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Facebook</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Instagram</a></li>
        <li class="nav-item"><a href="{{ route('avisopriv') }}" class="nav-link px-2 text-muted">Aviso de
                Privacidad</a></li>
    </ul>
    <p class="text-center text-muted">Desarrollo por DSE Software © 2023</p>
</footer>

</html>
