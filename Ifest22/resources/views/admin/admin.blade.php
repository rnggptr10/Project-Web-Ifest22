<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IFest 2022 - Admin @yield('admin_title')</title>
    <link rel="icon" href="{{ asset('img/logo/logo_nav.png') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/nav.js')}}"></script>

    @yield('css')
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
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
                                    <a href="{{ route('admin-startup-day1') }}" class="burger-details" style="padding-left: 15px;">Startup Talk Day 1</a>
                                    <a href="{{ route('admin-startup-day2') }}" class="burger-details" style="padding-left: 15px;">Startup Talk Day 2</a>
                                    <a href="{{ route('admin-semnas') }}" class="burger-details" style="padding-left: 15px;">Seminar Nasional</a>
                                    <a href="{{ route('admin-semnas-presenter') }}" class="burger-details" style="padding-left: 15px;">Seminar Nasional - Presenter</a>
                                    <a href="{{ route('admin-techno') }}" class="burger-details" style="padding-left: 15px;">Techno Seminar</a>
                                    <a href="{{ route('admin-techno-ws') }}" class="burger-details" style="padding-left: 15px;">Techno Workshop</a>
                                    <a href="{{ route('admin-intention') }}" class="burger-details" style="padding-left: 15px;">INTENTION</a>
                                    <a href="{{ route('admin-dac') }}" class="burger-details" style="padding-left: 15px;">DAC</a>
                                    <a href="{{ route('admin-ctf') }}" class="burger-details" style="padding-left: 15px;">CTF</a>
                                    <a href="" class="burger-details" style="padding-left: 15px;">Ipod</a>
                                    <a href="{{ route('admin-user') }}" class="burger-details" style="padding-left: 15px;">Users</a>
                                </details>
                            </div>
                        </div>
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
                                <a class="item-dropmenu" href="{{ route('admin-startup-day1') }}">Startup Talk Day 1</a>
                                <a class="item-dropmenu" href="{{ route('admin-startup-day2') }}">Startup Talk Day 2</a>
                                <a class="item-dropmenu" href="{{ route('admin-semnas') }}">Seminar Nasional</a>
                                <a class="item-dropmenu" href="{{ route('admin-semnas-presenter') }}">Seminar Nasional - Presenter</a>
                                <a class="item-dropmenu" href="{{ route('admin-techno') }}">Techno Seminar</a>
                                <a class="item-dropmenu" href="{{ route('admin-techno-ws') }}">Techno Workshop</a>
                                <a class="item-dropmenu" href="{{ route('admin-ctf') }}">CTF</a>
                                <a class="item-dropmenu" href="{{ route('admin-dac') }}">DAC</a>
                                <a class="item-dropmenu" href="{{ route('admin-intention') }}">Intention</a>
                                <a class="item-dropmenu" href="">Ipod</a>
                                <a class="item-dropmenu" href="{{ route('admin-user') }}">Users</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="box-logo">
                @guest
                @if (Route::has('login'))
                <a href="">
                    <img src="{{ asset('img/logo/logo_nav.png') }}" alt="">
                </a>
                @endif
                @else
                <a href="">
                    <img src="{{ asset('img/logo/logo_nav.png') }}" alt="">
                </a>
                @endguest
            </div>
            <div class="box-login">
                <ul class="menu" style="margin-bottom: 0;">
                    <li class="nav-item dropdown">
                        @guest
                        @if (Route::has('login'))
                        <button class="button-login"><a href="{{route('login')}}" style="color: #1c1c1c; text-decoration:none;">Go To Website</a></button>
                        @endif
                        @else
                        <a class="nav-link dropdown-toggle right-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffff;">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c1c;">
                            <a class="dropdown-item" href="{{route('home')}}" style="color: #8267B4;">Go To Website</a>
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

            <body style="background-color: #F0F0F0;">
                <div class="container" style="padding: 100px 0 50px 0;">
                    <div class="row align-items-center justify-content-center">
                        <div class="col" style="padding: 20px 0 20px 0;">
                            <div class="row align-items-center justify-content-center" align="center" style="padding-bottom: 15px;">
                                <h1 class="text-title">Admin Page - @yield('admin_title')</h1>
                            </div>
                            <div class="row align-items-center justify-content-center" align="center" style="padding-bottom: 15px;">
                                <h2 class="text-theme">Welcome, {{ Auth::user()->name }}</h2>
                            </div>
                            @yield('admin_detail')
                        </div>
                    </div>
                </div>
            </body>
        </main>
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