<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- {{ url('/') }} -->
                <a class="navbar-brand" href="">
                    <!-- {{ config('app.name', 'IFEST') }} -->
                    IFEST
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <p>Event</p>
                        <ul>
                            <li><a href="{{ route('startup') }}">StartupTalk</a></li>
                            <li><a href="{{ route('incon') }}">Konin</a></li>
                            <li><a href="{{ route('techno') }}">technopreneur</a></li>
                        </ul>
                        <p>Competition</p>
                        <ul>
                            <li><a href="{{ route('da') }}">DAC</a></li>
                            <li><a href="{{ route('ctf') }}">CTF</a></li>
                            <li><a href="{{ route('intention') }}">Intention</a></li>
                        </ul>
                        <a href="">iPod</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <a href="{{route('login')}}">Login</a>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>