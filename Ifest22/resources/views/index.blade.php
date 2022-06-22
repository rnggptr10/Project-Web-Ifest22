@extends('layouts.app2')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
@endsection
@section('content')
<div id="info" class="flex">
    <i id="volume" class="fas fa-volume-mute"></i>
    <div class="banner backdrop flex">
        <div class="countdown">
            <div>
                <div id="days">0</div>
                <p>days</p>
            </div>
            <div>
                <div id="hours">0</div>
                <p>hours</p>
            </div>
            <div>
                <div id="minutes">0</div>
                <p>minutes</p>
            </div>
            <div>
                <div id="seconds">0</div>
                <p>seconds</p>
            </div>
        </div>
        <h3>International Conference</h3>
        <div class="conference-btn">

            <a href="{{ route('incon') }}"><span class="register">Register Now</span></a>
            <a href="{{ route('incon') }}"><span class="details">See Details</span></a>
        </div>
    </div>
</div>
<!-- <p>Rangga Putra</p>
<p>Davio</p> -->
@endsection