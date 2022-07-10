<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - Ticket Details @yield('event_webtitle')</title> 

@yield('ticket_details_head')

@extends('layouts.app')

@section('content')
<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 100px 0 50px 0;">
        <div class="row justify-content-between">
            <div class="col">
                <div class="card" style="padding:40px; background-color:#2D2D2D">
                    <div class="row" align="center" style="padding-bottom:15px;">
                        <h1 class="text-card-title">Competition Detail - @yield('event_title')</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card ifest-card-details" style="padding:0;">
                                <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
                                    <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Data Tim</h2>
                                </div>
                                <div class="row" align="left" style="padding:20px">
                                    <div class="col">
                                        <div class="row" style="padding-bottom:7px;">
                                            <h5 class="text-details-card-head">Nama Tim</h5>
                                            <p class="text-details-card-desc">{{ $data->name }}</p>
                                        </div>
                                        <div class="row" style="padding-bottom:7px">
                                            <h5 class="text-details-card-head">Email Tim</h5>
                                            <p class="text-details-card-desc">{{ $data->email }}</p>
                                        </div>
                                        <div class="row">
                                            <h5 class="text-details-card-head">Data Ketua Tim</h5>
                                            <p class="text-details-card-desc">{{ $data->name }} - {{ $data->institute }}</p>
                                        </div>
                                        <div class="row">
                                            <h5 class="text-details-card-head">Data Anggota Tim</h5>
                                            <p class="text-details-card-desc">
                                                • {{ $data->name }} - {{ $data->institute }}<br>
                                                • {{ $data->name }} - {{ $data->institute }}<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card ifest-card-details" style="padding:0;">
                                <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
                                    <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Progress Lomba</h2>
                                </div>
                                @yield('event_section_1')
                                @yield('event_section_2')
                                @yield('event_section_3')
                                @yield('event_section_4')
                                @yield('event_section_5')
                                @yield('event_section_6')
                                @yield('event_section_7')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection