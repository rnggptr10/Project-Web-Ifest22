<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - @yield('event_webtitle')</title>

@yield('event_head')

@extends('layouts.app')

@section('content')

<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 0; padding-bottom:50px">
        <div class="row">
            <div class="col" style="padding: 20px 0 20px 0;">
                <div class="row" align="center" id="eventDescription" style="padding-bottom: 30px;">
                    <div style="padding-bottom: 10px;">
                        <h1 class="text-title">@yield('event_title')</h1>
                    </div>

                    <!-- NANTI DI YIELD AJA KLO BUTUH TEMA -->
                    @yield('event_theme')

                    <div style="padding: 10px 50px 0 50px; font-size: 16px;">
                        <p class="text-desc">@yield('event_desc')</p>
                    </div>
                </div>
            </div>

            @yield('event_detail')

            <!-- <div class="row justify-content-center align-items-center" align="center" id="eventButton" style="padding-top: 30px;padding-bottom: 30px;">
                @yield('event_button')
            </div> -->

            @yield('event_detail2')

            <div class="row justify-content-center align-items-center" align="center" id="eventCP" style="padding-top: 30px;padding-bottom: 30px;">
                <h1 class="text-sub-title">Contact Person</h1>
                <div class="col-2" style="padding-top: 30px;">
                    <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;" onclick="window.location.href='https://wa.me/@yield('cp1_wa')';">
                        <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
                        <span>@yield('cp1_name')</span>
                    </button>
                </div>
                <div class="col-2" style="padding-top: 30px;">
                    <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;" onclick="window.location.href='https://wa.me/@yield('cp2_wa')';">
                        <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
                        <span>@yield('cp2_name')</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection