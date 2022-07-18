<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'IFest 2022') }}</title> -->
    <title>IFest 2022</title>
    <link rel="icon" href="{{ asset('img/logo/logo_nav.png') }}">


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="{{asset('js/nav.js')}}"></script>

    @yield('css')
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    <div id="app">
        <header id="navBar">
            <div class="box-menu">
                <div class="hamburger-menu">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <!-- <a href="#">Event</a>
                        <a href="#">Competition</a> -->
                        <div class="sa">
                            <div class="card-hamburger text-left">
                                <details>
                                    <summary style="background-color: transparent;">Event</summary>
                                    <a href="{{ route('startup') }}" class="burger-details" style="padding-left: 15px;">Startup Talk</a>
                                    <a href="{{ route('techno') }}" class="burger-details" style="padding-left: 15px;">Technopreneur</a>
                                    <a href="{{ route('semnas') }}" class="burger-details" style="padding-left: 15px;">Seminar Nasional</a>
                                </details>
                            </div>
                        </div>
                        <div class="sa">
                            <div class="card-hamburger text-left">
                                <details>
                                    <summary>Competition</summary>
                                    <a href="{{ route('intention') }}" class="burger-details" style="padding-left: 15px;">Intention</a>
                                    <a href="{{ route('da') }}" class="burger-details" style="padding-left: 15px;">DAC</a>
                                    <a href="{{ route('ctf') }}" class="burger-details" style="padding-left: 15px;">CTF</a>
                                </details>
                            </div>
                        </div>
                        <a href="#">Ipod</a>
                    </div>
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
                <nav style="color: #fff;">
                    <ul class="menu" style="margin-bottom: 0;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle left-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Event
                            </a>
                            <div class="dropdown-menu border-dropmenu" aria-labelledby="navbarDropdown" style="background-color: #1c1c1c;">
                                <a class="item-dropmenu" href="{{ route('startup') }}">Startup Talk</a>
                                <a class="item-dropmenu" href="{{ route('techno') }}">Technopreneur</a>
                                <a class="item-dropmenu" href="{{ route('semnas') }}">Seminar Nasional</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="clr nav-link dropdown-toggle left-nav " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Competition
                            </a>
                            <div class="dropdown-menu border-dropmenu" aria-labelledby="navbarDropdown" style="background-color: #1c1c1c; color: #ffff;">
                                <a class="item-dropmenu" href="{{ route('intention') }}" style="color: #8267B4;">Intention</a>
                                <a class="item-dropmenu" href="{{ route('da') }}" style="color: #8267B4;">DAC</a>
                                <a class="item-dropmenu" href="{{ route('ctf') }}" style="color: #8267B4;">CTF</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link left-nav" href="{{ route('ipod') }}">Ipod</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="box-logo">
                @guest
                @if (Route::has('login'))
                <a href="/">
                    <img src="{{ asset('img/logo/logo_nav.png') }}" alt="">
                </a>
                @endif
                @else
                <a href="{{route('home')}}">
                    <img src="{{ asset('img/logo/logo_nav.png') }}" alt="">
                </a>
                @endguest
            </div>
            <div class="box-login">
                <ul class="menu" style="margin-bottom: 0;">
                    <li class="nav-item dropdown">
                        @guest
                        @if (Route::has('login'))
                        <button class="button-login"><a href="{{route('login')}}" style="color: #1c1c1c; text-decoration:none;">Login</a></button>
                        @endif
                        @else
                        <a class="nav-link dropdown-toggle right-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffff;">
                            {{ Auth::user()->name }}
                        </a>
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c1c;">
                            <a class="dropdown-item" href="{{route('profile')}}" style="color: #8267B4;">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style=" color: #8267B4;">Logout</a>
                        </div> -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c1c;">
                            <a class="dropdown-item" href="{{route('profile')}}" style="color: #8267B4;">Profile</a>
                            @if (Auth::user()->is_admin === '1')
                            <a class="dropdown-item" href="{{route('admin-user')}}" style="color: #8267B4;">Admin Page</a>
                            @else
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style=" color: #8267B4;">Logout</a>
                        </div>
                        @endguest
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </header>
        <main style="padding-top: 10px;">
            @yield('content')
        </main>
        <footer class="footer_ bd-grid">
            <div class="wrap">
                <div class="section-1">
                    <img class="footer-img-1" src="{{asset('img/logo/logo_footer.png')}}" alt="logo ifest">
                    <div class="event-comp">
                        <div class="fmain-event">
                            <h3 class="footer-header">Event</h3>
                            <ul class="footer-ul">
                                <li class="footer-li"><a href="{{ route('semnas') }}">International Conference</a></li>
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
                            <img class="footer-img-2" src="{{asset('img/organizer/himatif.png')}}" alt="logo unpad" width="65px">
                            <img class="footer-img-2" src="{{asset('img/organizer/unpad.png')}}" alt="logo himatif" width="65px">
                        </div>
                    </div>
                    <div class="fsocial">
                        <h3 class="footer-header text-center" style="color: #ffff;">Find Us on Social Media</h3>
                        <!-- <ul class="footer-ul dflex justify-content-center">
                            <li class="footer-li lstyle-none socmed"><a href="https://linktr.ee/ifestunpad" target="_blank"><span class="iconify" data-icon="simple-icons:linktree" data-inline="false" data-width="32" data-height="32"></span></a></li>
                        </ul> -->
                        <div class="dflex padding-center">
                            <!-- Sosmed -->
                            <a class="tombol footer-img-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="tombol footer-img-2" href=""><i class="fab fa-tiktok"></i></a>
                            <a class="tombol footer-img-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="tombol footer-img-2" href="https://www.linkedin.com/company/ifest-unpad"><i class="fab fa-linkedin"></i></a>

                            <!-- <img class="footer-img-2" src="{{asset('img/organizer/himatif.png')}}" alt="logo unpad" width="50px" height="50px"> -->
                            <!-- <img class="footer-img-2" src="{{asset('img/organizer/unpad.png')}}" alt="logo himatif" width="50px" height="50px">
                            <img class="footer-img-2" src="{{asset('img/organizer/himatif.png')}}" alt="logo unpad" width="50px" height="50px">
                            <img class="footer-img-2" src="{{asset('img/organizer/unpad.png')}}" alt="logo himatif" width="50px" height="50px"> -->
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="footer-copy text-center mt-4">&copy 2021 IFest</h5>
        </footer>
    </div>
    <script>
        var navBar = document.getElementById('navBar');
        window.onscroll = function() {
            if (window.scrollY > 22) {
                navBar.classList.add('scrolled');
            } else {
                navBar.classList.remove('scrolled');
            }
        };

        function openNav() {
            document.getElementById("mySidenav").style.display = "block";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }
    </script>
</body>

</html>