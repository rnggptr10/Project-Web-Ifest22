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

@extends('layouts.app')

<!-- PODCAST -->
@section('podcast_1')
<p style="color:white">a</p>
@endsection

@section('content')
<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 100px 0 50px 0;">
        <div class="row">
            <div class="col" style="padding: 20px 0 20px 0;">
                <div class="row" align="center" id="eventDescription" style="padding-bottom: 30px;">
                    <div style="padding-bottom: 10px;">
                        <h1 class="text-title">IFest Podcast (iPod)</h1>
                    </div>

                    <div style="padding: 10px 50px 0 50px; font-size: 16px;">
                        <p class="text-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center justify-content-center" align="center" id="ipod" style="padding-top: 30px;padding-bottom: 30px;">
                    <div class="row justify-content-center" style="padding-bottom: 20px;">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div class="ipod-box">
                                @yield('podcast_1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
@endsection