<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!--
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyRWXL1dRi12xcSttpkpXXkKp9Shs1EHw" type="text/javascript"></script>
    -->
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
                                    {{ Auth::user()->firstname }} <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <li class="dropdown-item">
                                        <a href="{{ route('profil_get') }}">Profil <i class="fa fa-user" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Se déconnecter <i class="fa fa-sign-out" aria-hidden="true"></i>
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
