<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>
    <div id="app">
        <header>
            <div class="box-menu">
                <nav style="color: #fff;">
                    <ul class="menu" style="margin-bottom: 0;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffff;">
                                Event
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c1c;">
                                <a class="dropdown-item" href="{{ route('startup') }}" style="color: #8267B4;">Startup Talk</a>
                                <a class="dropdown-item" href="{{ route('incon') }}" style="color: #8267B4;">Seminar Nasional</a>
                                <a class="dropdown-item" href="{{ route('techno') }}" style="color: #8267B4;">Technopreneur</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="clr nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Competition
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c1c; color: #ffff;">
                                <a class="dropdown-item" href="{{ route('ctf') }}" style="color: #8267B4;">CTF</a>
                                <a class="dropdown-item" href="{{ route('da') }}" style="color: #8267B4;">DAC</a>
                                <a class="dropdown-item" href="{{ route('intention') }}" style="color: #8267B4;">Intention</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Ipod</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="box-logo">
                <a href="">
                    <img src="{{ asset('img/logo/logo_nav.png') }}" alt="">
                </a>
            </div>
            <div class="box-login">@guest
                @if (Route::has('login'))
                <button><a href="{{route('login')}}">Login</a></button>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profil" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>