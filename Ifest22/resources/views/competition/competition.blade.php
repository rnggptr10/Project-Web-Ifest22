<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - @yield('competition_webtitle')</title>

@yield('competition_head')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@extends('layouts.app')

@section('content')

<!-- <body style="background-color: #1c1c1c;"> -->
<div class="container" style="padding: 0; padding-bottom:50px">
    <div class="row" style="margin-left: 0; margin-right:0;">
        <div class="col-desc" style="padding: 20px 0 20px 0;">
            <div class="row" align="center" id="competitionDescription" style="padding-bottom: 30px;">
                <div style="padding-bottom: 10px;">
                    <p class="title-competition">@yield('competition_title')</p>
                    <!-- <h1 class="text-title"></h1> -->
                </div>
                <div style="padding-top: 10px;padding-bottom: 10px;">
                    <h2 class="text-theme">"@yield('competition_theme')"</h2>
                </div>
                <div style="padding: 10px 50px 0 50px; font-size: 16px;">
                    <p class="text-desc">@yield('competition_desc')</p>
                </div>
            </div>

            @yield('competition_flashback')

            <div data-aos="fade-down" data-aos-duration="1000" class="row-img-prize" align="center" id="competitionPrizes" style="padding-top: 30px;padding-bottom: 30px;">
                <h1 class="text-sub-title">Prizes</h1>
                <div class="row justify-content-center" style="padding-top: 20px;"">
                        <div class=" col-2">
                    <img style="width:100%;height: 160px;" src="https://clipground.com/images/trophy-winner-clipart-5.jpg">
                    <p style="color:white">@yield('second_prize')</p>
                </div>
                <div class="col-2">
                    <img style="width:100%;height: 180px;" src="https://clipground.com/images/trophy-winner-clipart-5.jpg">
                    <p style="color:white">@yield('first_prize')</p>
                </div>
                @yield('third_prize')
            </div>
        </div>
    </div>

    @yield('competition_judges')

    <div data-aos="fade-up" data-aos-duration="1000" class="row-timeline" align="center" id="competitionTimeline" style="margin-left:0; margin-right:0; padding-top: 30px;padding-bottom: 30px;">
        <h1 class="text-sub-title">Timeline</h1>
        @yield('competition_timeline')
    </div>

    <!-- Competition Button -->
    <div data-aos="fade-up" data-aos-duration="1000" class="row justify-content-center align-items-center" align="center" id="competitionButton" style="margin-left:0; margin-right:0; padding-top: 30px;padding-bottom: 30px;">
        @yield('competition_button')
    </div>

    <!-- FAQ -->
    <div style="margin-right: 0; margin-left:0;" data-aos="fade-up" data-aos-duration="1000" class="row-faq justify-content-center align-items-center" align="center" id="competitionFAQ" style="padding-top: 30px;padding-bottom: 30px;">
        <h1 class="text-sub-title">Frequently Asked Question (FAQ)</h1>
        @yield('competition_faq')
    </div>

    <!-- Button CP -->
    <div data-aos="fade-up" data-aos-duration="1000" class="row justify-content-center align-items-center" align="center" id="competitionCP" style="margin-left: 0; margin-right:0; padding-top: 30px;padding-bottom: 30px;">
        <h1 class="text-sub-title">Contact Person</h1>
        <div class="row-cp">
            <div class="col-btn-left" style="">
                <button id="btn-cp1" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" onclick="window.location.href='https://wa.me/@yield('cp1_wa')';">
                    <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
                    <span>@yield('cp1_name')</span>
                </button>
            </div>
            <div class="col-btn-right" style="">
                <button id="btn-cp2" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" onclick="window.location.href='https://wa.me/@yield('cp2_wa')';">
                    <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
                    <span>@yield('cp2_name')</span>
                </button>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- </body> -->
@endsection