@extends('layouts.app2')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
@endsection
@section('content')

<div id="info" class="flex">
    <!-- <i id="volume" class="fas fa-volume-mute"></i> -->
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
            <a href="{{ route('incon') }}"><span class="details" id="details">See Details</span></a>
        </div>
    </div>

        <!-- Support -->
    <section id="support">
      <h1>Sponsored By</h1>
      <div class="container-90 backdrop medpart">
      </div>
    </section>

    <!-- Partners -->
    <section id="partners">
      <h1>Media Partners</h1>
      <div class="container-90 backdrop medpart">     
      </div>
    </section>
</div>

<div>
    <div class="isian-tab">
        <button class="tablink" onclick="openPage('Home', this, 'red')">Startup Talk</button>
        <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">Technopreneur</button>
        <button class="tablink" onclick="openPage('Contact', this, 'blue')">IT Competition</button>
        <button class="tablink" onclick="openPage('About', this, 'orange')">Seminar Nasional</button>
        <button class="tablink" onclick="openPage('About', this, 'orange')">Awarding Night</button>


    </div>
    <div class="pasklik">
        <div id="Home" class="tabcontent">
            <h3>Home</h3>
            <p>Home is where the heart is..</p>
        </div>
        <div id="News" class="tabcontent">
            <h3>News</h3>
            <p>Some news this fine day!</p>
        </div>
        <div id="Contact" class="tabcontent">
            <h3>Contact</h3>
            <p>Get in touch, or swing by for a cup of coffee.</p>
        </div>
        <div id="About" class="tabcontent">
            <h3>About</h3>
            <p>Who we are and what we do.</p>
        </div>
    </div>
    <div class="jumbotron-tea">

    </div>
</div>
@endsection