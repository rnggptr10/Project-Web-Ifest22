<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - @yield('event_webtitle')</title>

@yield('event_head')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@extends('layouts.app')

@section('content')

<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 100px 0 50px 0;">
        <div class="row">
            <div class="col" style="padding: 20px 0 20px 0;">
                <div class="row" align="center" id="eventDescription" style="padding-bottom: 30px;">
                    <div style="padding-bottom: 10px;">
                        <h1 class="title-1 text-title">@yield('event_title')</h1>
                        <h2 class="title-2">@yield('event_title')</h2>
                    </div>

                    <!-- NANTI DI YIELD AJA KLO BUTUH TEMA -->
                    @yield('event_theme')

                    <div style="padding: 10px 50px 0 50px; font-size: 16px;">
                        <p class="text-desc">@yield('event_desc')</p>
                    </div>
                </div>
                @yield('event_detail')
            </div>
            @yield('event_detail2')

            <div data-aos="fade-up" data-aos-duration="1000" class="row justify-content-center align-items-center" align="center" id="competitionCP" style="margin-left: 0; margin-right:0;padding-top: 30px;padding-bottom: 30px;">
                <h1 class="title-1 text-sub-title">Contact Person</h1>
                <h2 class="title-2 text-sub-title">Contact Person</h2>
                <div class="row-cp">
                    <div class="col-btn-left" style="padding-top: 30px;">
                        <button id="btn-cp1" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content;padding:10px 20px 10px 20px" onclick="window.location.href='@yield('cp1_contact')';">
                            @yield('cp1_media')
                            <span style="margin-left:10px">@yield('cp1_name')</span>
                        </button>
                    </div>
                    <div class="col-btn-right" style="padding-top: 30px;">
                        <button id="btn-cp2" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content;padding:10px 20px 10px 20px" onclick="window.location.href='https://wa.me/@yield('cp2_contact')';">
                            @yield('cp2_media')
                            <span style="margin-left:10px">@yield('cp2_name')</span>
                        </button>
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