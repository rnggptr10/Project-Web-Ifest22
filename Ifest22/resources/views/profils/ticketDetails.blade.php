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
                        @yield('event_team_data')
                        @yield('event_progress')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection