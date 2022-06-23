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
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/tab.js') }}"></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @yield('css')
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
                <a href="/">
                    <img src="{{ asset('img/logo/logo_nav.png') }}" alt="">
                </a>
            </div>
            <div class="box-login">
                <button><a href="{{route('login')}}">Login</a></button>
            </div>
        </header>
        <main style="padding-top: 100px;">
            @yield('content')
        </main>
        <footer class="footer_ bd-grid">
            <div class="wrap">
                <div class="section-1">
                    <img class="footer-img-1" src="{{asset('img/logo/logo_footer.png')}}" alt="logo ifest" width="auto" height="120px">
                    <div class="event-comp">
                        <div class="fmain-event">
                            <h3 class="footer-header">Event</h3>
                            <ul class="footer-ul">
                                <li class="footer-li"><a href="{{ route('incon') }}">International Conference</a></li>
                                <li class="footer-li"><a href="{{ route('techno') }}">Technopreneur</a></li>
                                <li class="footer-li"><a href="{{ route('startup') }}">StartUp Talk</a></li>
                            </ul>
                        </div>
                        <div class="fcomp">
                            <h3 class="footer-header">Competition</h3>
                            <ul class="footer-ul">
                                <li class="footer-li"><a href="{{ route('intention') }}">Intention</a></li>
                                <li class="footer-li"><a href="{{ route('ctf') }}">Capture The Flag</a></li>
                                <li class="footer-li"><a href="{{ route('da') }}">Data Analysis Competition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-2">
                    <div class="forganizer">
                        <h3 class="footer-header text-center">Organizer</h3>
                        <div class="dflex padding-center">
                            <img class="footer-img-2" src="{{asset('img/organizer/himatif.png')}}" alt="logo unpad" width="75px" height="75px">
                            <img class="footer-img-2" src="{{asset('img/organizer/unpad.png')}}" alt="logo himatif" width="75px" height="75px">
                        </div>
                    </div>
                    <div class="fsocial">
                        <h3 class="footer-header text-center" style="color: #ffff;">Find Us on Social Media</h3>
                        <!-- <ul class="footer-ul dflex justify-content-center">
                            <li class="footer-li lstyle-none socmed"><a href="https://linktr.ee/ifestunpad" target="_blank"><span class="iconify" data-icon="simple-icons:linktree" data-inline="false" data-width="32" data-height="32"></span></a></li>
                        </ul> -->
                        <div class="dflex padding-center">
                            <img class="footer-img-2" src="{{asset('img/organizer/himatif.png')}}" alt="logo unpad" width="50px" height="50px">
                            <img class="footer-img-2" src="{{asset('img/organizer/unpad.png')}}" alt="logo himatif" width="50px" height="50px">
                            <img class="footer-img-2" src="{{asset('img/organizer/himatif.png')}}" alt="logo unpad" width="50px" height="50px">
                            <img class="footer-img-2" src="{{asset('img/organizer/unpad.png')}}" alt="logo himatif" width="50px" height="50px">
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="footer-copy text-center mt-4">&copy 2021 IFest</h5>
        </footer>
    </div>
</body>

</html>