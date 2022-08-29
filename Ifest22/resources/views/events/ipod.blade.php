<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - IFest Podcast (iPod)</title>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/events.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/landingpage.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/ipod.css') }}">

@extends('layouts.app')

<!-- PODCAST -->
@section('podcast_1')
<p style="color:white">a</p>
@endsection

@section('content')

<div class="container" style="padding: 100px 0 50px 0;">
    <div class="row justify-content-center">
        <div class="col-sm-5" style="padding: 20px 0 20px 0; text-align:center;">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAGFBMVEXBw8Ta183y8e74+Pm9v8Dp5+H///+5u7zLiu2GAAABH0lEQVR4nO3PCQ2EABAAMX78Oz4IORGzaR10Wadb1nOb7HyG27XPdW3vcL+Pqe79Gx7LVIdhnmGfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYd9/eB9T3d/w2ue63uG5TXY+w+l+h1EihcbqknUAAAAASUVORK5CYII=" style="width: 70%;">
        </div>
        <div class="col-sm-7" style="padding: 20px 0 20px 0;">
            <div class="row" align="center" id="eventDescription" style="padding-bottom: 30px;">
                <div style="padding: 10px 50px 0 50px; text-align:left;">
                    <h1 class="text-title" style="margin: 0 0 0 0;">iPod</h1>
                    <p class="text-desc" style="margin: 0 0 0 0; font-size: 20px;">Informatics Festival<br>Podcast</p>
                </div>
                <div style="padding: 10px 50px 0 50px; font-size: 16px; text-align:left;">
                    <p class="text-desc"> Young entrepreneurs and tech enthusiasts, know more about IT and business with the professionals here in IPod 3.0</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center" style="padding-bottom: 20px;">
        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="ipod-box" style="margin-top: 50px; margin-bottom: 30px; height:max-content">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/2iresOUzaXmMVTvd7EXWqM?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>
            <!-- <div class="ipod-box" style="margin-bottom: 30px;">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1ZsrDL3ENMe3pExT4tGYzD?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                </div>
                <div class="ipod-box" style="margin-bottom: 30px;">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1ZsrDL3ENMe3pExT4tGYzD?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                </div> -->
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection