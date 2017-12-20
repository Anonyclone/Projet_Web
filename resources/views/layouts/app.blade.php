<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('jquery/jquery.3.2.1.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper/popper.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-custom">
            <div class="container">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                    <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>

                <div id="navbarCollapse" class="collapse navbar-collapse">
                    @guest
                        <ul class="nav navbar mx-auto">
                            <li class="nav-item"><a class="lead">Bienvenue sur Tartempion!</a></li>
                        </ul>
                    @else
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav btn-group mx-auto">
                        <li class="nav-item btn btn-info"><a href="{{ route('search_post_get') }}">Rechercher <i class="fa fa-search"></i></a></li>
                        <li class="nav-item btn btn-info"><a href="{{ route('map') }}">Itinéraire <i class="fa fa-map-marker"></i></a></li>
                        <li class="nav-item btn btn-info"><a href="{{ route('new_post_get') }}">Poster <i class="fa fa-send"></i></a></li>
                    </ul>
                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="guest-button-log"><a href="{{ route('login') }}" class="btn btn-outline-primary">Connexion <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            <li class="guest-button-log"><a href="{{ route('register') }}" class="btn btn-outline-primary">Inscription <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" class="btn btn-outline-primary" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->pseudo }} <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <li class="dropdown-item">
                                        <a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('profil_get') }}"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('settings_get') }}"><i class="fa fa-lock" aria-hidden="true"></i> Confidentialité</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> Se déconnecter
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div id="main-body">
        @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
