<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>

<body>
    <a href="/">Event
        <ul>
            <li><a href="{{ route('startup') }}">StartupTalk</a></li>
            <li><a href="{{ route('incon') }}">Konin</a></li>
            <li><a href="{{ route('techno') }}">technopreneur</a></li>
        </ul>
    </a>
    <a href="/">Competition
        <ul>
            <li><a href="{{ route('da') }}">DAC</a></li>
            <li><a href="{{ route('ctf') }}">CTF</a></li>
            <li><a href="{{ route('intention') }}">Intention</a></li>
        </ul>
    </a>
    <a href="/">iPod</a>
    <a href="/login">Login</a>
</body>

</html>