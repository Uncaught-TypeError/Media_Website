<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">

    {{-- font-family: 'Source Serif Pro', serif; --}}
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Cambria';
            src: url('/fonts/Cambria-Font-For-Windows.ttf');
        }
        @font-face {
            font-family: 'Geo';
            src: url('/fonts/Georgia.ttf');
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/sass/app.scss','resources/sass/main.scss',  'resources/js/app.js', 'resources/js/main.js'])

    @stack('homestyle')
    @stack('publishstyle')
    @stack('createstyle')
    @stack('showstyle')
    @stack('catcreatestyle')
    @stack('catindexstyle')
    @stack('userindexstyle')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm fixed-top" style="" id="navbg">
            <div class="container" style="">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <img src="{{url('/icons/icons8-medium-150.png')}}" height="40px" alt="">
                    <!-- {{ config('app.name', 'Medium') }} -->
                    <h2 class="logo-name">Medium</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto mt-3">
                        <!-- Authentication Links -->
                        @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Our Story</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Membership</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('page.index') }}">Write</a>
                                </li>
                                <li class="nav-item dropdown" style="cursor: pointer;">
                                    <p class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                        Sign in
                                    </p>
                                    <ul class="dropdown-menu">
                                        @if (Route::has('login'))
                                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                        @endif
                                        @if (Route::has('login'))
                                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                        @endif
                                    </ul>
                                </li>
                                <li class="nav-item" style="margin-left: 10px">
                                    <a class="nav-link btn btn-dark" style="color: white; border-radius: 40px;" href="{{ route('page.index') }}">Get Started</a>
                                    {{-- <a class="nav-link" href="#">Get Started</a> --}}
                                </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.index') }}">A.Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our Story</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Membership</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page.index') }}">{{ __('Write') }}</a>
                            </li>
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
                            <li class="nav-item" style="margin-left: 10px">
                                <a class="nav-link btn btn-dark navbutton" style="color: white; border-radius: 40px;" href="{{ route('page.index') }}">Get Started</a>
                                {{-- <a class="nav-link" href="#">Get Started</a> --}}
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="" style="">
            @yield('content')
        </main>
    </div>
</body>
</html>
