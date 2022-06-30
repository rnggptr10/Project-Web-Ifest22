<!DOCTYPE html>
<html lang="en">

<head>
    <title>IFest 2022 - Ticket Details @yield('event_webtitle')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
</head>

@extends('layouts.app')

@section('content')
<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 0; padding-bottom:50px">
        <div class="row justify-content-between">
            <div class="col">
                <div class="card" style="padding:40px; background-color:#2D2D2D">
                    <div class="row" align="center" style="padding-bottom:15px;">
                        <h1 class="text-card-title">Competition Detail - @yield('event_title')</h1>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card ifest-card-details" style="padding:0;">
                                <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
                                    <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Data Tim</h2>
                                </div>
                                <div class="row" align="left" style="padding:20px">
                                    <div class="col">
                                        <div class="row" style="padding-bottom:7px;">
                                            <h5 class="text-details-card-head">Name</h5>
                                            <p class="text-details-card-desc">{{ $data->name }}</p>
                                        </div>
                                        <div class="row" style="padding-bottom:7px">
                                            <h5 class="text-details-card-head">Email</h5>
                                            <p class="text-details-card-desc">{{ $data->email }}</p>
                                        </div>
                                        <div class="row">
                                            <h5 class="text-details-card-head">Institute</h5>
                                            <p class="text-details-card-desc">{{ $data->institute }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card ifest-card-details" style="padding:0;">
                                <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
                                    <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Progress Lomba</h2>
                                </div>
                                <div class="row" align="left" style="padding:20px">
                                    <div class="col-2" style="padding:0 15px 0 8px">
                                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
                                    </div>
                                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                        <h6 class="text-tickets-head">Startup Talk</h6>
                                        <p class="text-tickets-desc">20-21 Agustus 2022<br>Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col-4" style="padding:0">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                </div>
                                <div class="row" align="left" style="padding:20px">
                                    <div class="col-2" style="padding:0 15px 0 8px">
                                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
                                    </div>
                                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                        <h6 class="text-tickets-head">Startup Talk</h6>
                                        <p class="text-tickets-desc">20-21 Agustus 2022<br>Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col-4" style="padding:0">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection