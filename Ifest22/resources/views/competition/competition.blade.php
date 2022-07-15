<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - @yield('competition_webtitle')</title>

@yield('competition_head')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- @extends('layouts.app') -->

@section('content')

<!-- <body style="background-color: #1c1c1c;"> -->
<div class="container" style="padding: 100px 0 50px 0;">
    <div class="row" style="margin-left: 0; margin-right:0;">
        <div class="col-desc" style="padding: 20px 0 20px 0;">
            <div class="row" align="center" id="competitionDescription" style="padding-bottom: 30px;">
                <div style="padding-bottom: 10px;">
                    <p class="title-competition">@yield('competition_title')</p>
                    <!-- <h1 class="text-title"></h1> -->
                </div>
                @yield('competition_theme')
                <div style="padding: 10px 50px 0 50px; font-size: 16px;">
                    <p class="text-desc">@yield('competition_desc')</p>
                </div>
            </div>

            @yield('competition_flashback')

            <div data-aos="fade-down" data-aos-duration="1000" class="row-img-prize" align="center" id="competitionPrizes" style="padding-top: 30px;padding-bottom: 30px;">
                <h1 class="text-sub-title">Prizes</h1>
                <div class="row justify-content-center" style="padding-top: 20px;"">
                        <div class=" col-2">
                    <img style="width:100%;height: 160px;" src="{{ URL::asset('icon/trophy/2.png') }}">
                    <p style="color:white; margin:0">2nd Place</p>
                    <p style="color:white">@yield('second_prize')</p>
                </div>
                <div class="col-2">
                    <img style="width:100%;height: 180px;" src="{{ URL::asset('icon/trophy/1.png') }}">
                    <p style="color:white; margin:0">1st Place</p>
                    <p style="color:white;">@yield('first_prize')</p>
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
        <div class="row align-items-center">
            <div class="col" style="padding-top: 30px;">
                <button id="btn-cp1" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content;padding:10px 20px 10px 20px" onclick="window.location.href='@yield('cp1_contact')';">
                    @yield('cp1_media')
                    <span style="margin-left:10px">@yield('cp1_name')</span>
                </button>
            </div>
            <div class="col" style="padding-top: 30px;">
                <button id="btn-cp2" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content;padding:10px 20px 10px 20px" onclick="window.location.href='@yield('cp2_contact')';">
                    @yield('cp2_media')
                    <span style="margin-left:10px">@yield('cp2_name')</span>
                </button>
            </div>
        </div>
        @yield('add_cp3_cp4')
    </div>
</div>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- </body> -->
@endsection