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
        <!-- <div class="col">
            <div class="row align-items-center justify-content-center">
                <div class="col-3" align="center">
                    <img class="img-fluid" style="width:200px;" src="{{ URL::asset('img/competition/logo/int.png') }}">
                </div>
                <div class="col-desc col-9">
                    <div class="row" align="center" id="competitionDescription">
                        <p class="title-competition" style="margin:0; padding-bottom:5px">@yield('competition_title')</p>
                        @yield('competition_theme')
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-desc" style="padding: 20px 0 10px 0;">
            <div class="row" align="center" id="competitionDescription" style="padding-bottom: 10px;">
                <div class="col" style="padding-bottom:25px">
                    <div class="row align-items-center justify-content-center">
                        @yield('competition_title')
                    </div>
                </div>
                @yield('competition_theme')
                <div style="padding: 30px 30px 0 50px; font-size: 16px;">
                    <p class="text-desc">@yield('competition_desc')</p>
                </div>
            </div>
        </div>
    </div>

    @yield('competition_collab')

    @yield('competition_flashback')

    @yield('competition_prizes')

    @yield('competition_judges')

    <div data-aos="fade-up" data-aos-duration="1000" class="row-timeline" align="center" id="competitionTimeline" style="margin-left:0; margin-right:0; padding-top: 30px;">
        <h1 class="text-sub-title">Timeline</h1>
        @yield('competition_timeline')
    </div>

    <!-- Competition Button -->
    <div data-aos="fade-up" data-aos-duration="1000" class="row justify-content-center align-items-center" align="center" id="competitionButton" style="margin-left:0; margin-right:0;padding-bottom: 30px;">
        @yield('competition_button')
    </div>

    <!-- FAQ -->
    <div style="margin-top:30px; margin-right: 0; margin-left:0;" data-aos="fade-up" data-aos-duration="1000" class="row-faq justify-content-center align-items-center" align="center" id="competitionFAQ" style="padding-top: 30px;padding-bottom: 30px;">
        <h1 class="title-1 text-sub-title">Frequently Asked Question (FAQ)</h1>
        <p class="title-2 text-sub-title" style="font-size:20px;">Frequently Asked Question (FAQ)</p>
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