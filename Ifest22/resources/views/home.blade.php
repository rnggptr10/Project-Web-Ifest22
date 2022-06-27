@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
@section('content')
<div class="container" style="margin-top: 100px; margin-bottom:100px; width:100%">
    <div class="row">
        <div class="col-sm-8" style="border: 1px #fff solid;">
            <p style="font-size: 100px; width: max-content; color: #8E84D1  ;"><b>IFEST 2022</b></p>
            <!-- <h1>IFEST 2022</h1> -->
            <img class="logo-landing" src="{{asset('img/logo/logo_landing.png')}}" alt="logo" width="60%">
        </div>
        <div class="col-sm-4" style="border: 1px #fff solid;">col-sm-4</div>
    </div>
</div>


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
</div>

<div>
    <div class="isian-tab">
        <button class="tablink" onclick="openPage('Home', this, '#291647')">Startup Talk</button>
        <button class="tablink" onclick="openPage('News', this, '#291647')" id="defaultOpen">Technopreneur</button>
        <button class="tablink" onclick="openPage('Contact', this, '#291647')">IT Competition</button>
        <button class="tablink" onclick="openPage('About', this, '#291647')">Seminar Nasional</button>
        <button class="tablink" onclick="openPage('About', this, '#291647')">Awarding Night</button>


    </div>
    <div class="pasklik">
        <div id="Home" class="tabcontent">
            <h3>Startup Talk</h3>
            <p>Description Startup Talk...</p>
        </div>
        <div id="News" class="tabcontent">
            <h3>Technopreneur</h3>
            <p>Description Technopreneur...</p>
        </div>
        <div id="Contact" class="tabcontent">
            <h3>IT Competition</h3>
            <p>Description IT Competition...</p>
        </div>
        <div id="About" class="tabcontent">
            <h3>Awarding Night</h3>
            <p>Description Awarding Night...</p>
        </div>
    </div>
    <div class="box-speaker">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 1</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <button><a href="">See All Speakers</a></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <img class="align-self-center mr-3" src="{{asset('img/speakers/Rectangle 49.png')}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 2</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <button><a href="">See All Speakers</a></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 3</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <button><a href="">See All Speakers</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div>
    <h1 class="title-box">Media Partner</h1>
    <div class="medpart-box">

    </div>

    <h1 class="title-box">Sponsored By</h1>
    <div class="sponsored-box">

    </div>
</div>
@endsection