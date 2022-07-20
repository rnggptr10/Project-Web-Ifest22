<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - Company Profile</title>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/events.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/landingpage.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/ipod.css') }}">

@extends('layouts.app')

@section('content')
<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 100px 0 50px 0;">
        <div class="row justify-content-center" style="padding: 5%">
            <img src="{{asset('img/company_profile.png')}}">
            <div style="padding: 10px 50px 0 50px; font-size: 16px; text-align:center;">
                <p class="text-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            {{-- <div class="col-sm-5" style="padding: 20px 0 20px 0; text-align:center;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAGFBMVEXBw8Ta183y8e74+Pm9v8Dp5+H///+5u7zLiu2GAAABH0lEQVR4nO3PCQ2EABAAMX78Oz4IORGzaR10Wadb1nOb7HyG27XPdW3vcL+Pqe79Gx7LVIdhnmGfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYd9/eB9T3d/w2ue63uG5TXY+w+l+h1EihcbqknUAAAAASUVORK5CYII=" style="width: 70%;">
            </div>
            <div class="col-sm-7" style="padding: 20px 0 20px 0;">
                <div class="row" align="center" id="eventDescription" style="padding-bottom: 30px;">
                    <div style="padding: 10px 50px 0 50px; text-align:left;">
                        <h1 class="text-title" style="margin: 0 0 0 0;">iPod</h1>
                        <p class="text-desc" style="margin: 0 0 0 0; font-size: 20px;">Informatics Festival<br>Podcast</p>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
@endsection