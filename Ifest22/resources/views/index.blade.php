@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
<link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
@endsection
@section('content')
<div class="content-main">
    <img src="{{asset('img/bg-fix.png')}}" alt="" style="width:100%;">
    <div class="logo-content-main">
        <img src="{{asset('img/logo/logo_landing.png')}}" alt="">
    </div>
</div>

<div id="info" class="flex" data-aos="fade-up" data-aos-duration="1000">
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
        <p class="title-cd">International Conference</p>
        <!-- <h3>International Conference</h3> -->
        <div class="conference-btn">

            <a href="{{ route('incon') }}"><span class="register">Register</span></a>
            <!-- <a href="{{ route('incon') }}"><span class="register">See Details</span></a> -->
            <a href="{{ route('incon') }}"><span class="details" id="details">Details</span></a>
        </div>
    </div>
</div>

<div class="box-countdown" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row rw">
            <div class="col-sm-4">
                <div class="countdown2">
                    <div class="box-timer">
                        <div id="days2">0</div>
                        <p>days</p>
                    </div>
                    <div class="box-timer">
                        <div id="hours2">0</div>
                        <p>hours</p>
                    </div>
                    <div class="box-timer">
                        <div id="minutes2">0</div>
                        <p>minutes</p>
                    </div>
                    <div class="box-timer">
                        <div id="seconds2">0</div>
                        <p>seconds</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="title-countdown">
                    <p>International Conference</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="conference-btn2">
                    <button class="btn btn-outline-primary ifest-btn-outline-primary-light-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold"><a class="ifest-btn-outline-primary-light-bg-text" href="{{route('register')}}">Register</a></button>

                    <!-- <button class="register">
                            <a href="{{ route('incon') }}">Register</a>
                        </button> -->
                    <!-- <button class="details">
                            <a href="{{ route('incon') }}">Details</a>
                        </button> -->
                    <button class="btn btn-outline-primary ifest-btn-outline-primary-light-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold"><a class="ifest-btn-outline-primary-light-bg-text" href="{{route('register')}}">Details</a></button>

                </div>
            </div>
        </div>
    </div>
</div>

<div data-aos="fade-up" data-aos-duration="1000">
    <div class="isian-tab1">
        <button id="defaultOpen" class="tablink" onclick="openPage('Home','StartupTalk-speakers' , this, '#291647')" id="defaultOpen">Startup Talk</button>
        <button class="tablink" onclick="openPage('News', 'Technopreneur-speakers', this, '#291647')">Technopreneur</button>
        <button class="tablink" onclick="openPage('Contact','ITComp-speakers', this, '#291647')">IT Competition</button>
        <button class="tablink" onclick="openPage('About', 'Semnas-speakers', this, '#291647')">Seminar Nasional</button>
        <button class="tablink" onclick="openPage('About2', 'AwardingNight-speakers', this, '#291647')">Awarding Night</button>
    </div>
    <div class="isian-tab2">
        <!-- <div class="sa">
            <div class="card-faq text-left">
                <details>
                    <summary>Our Events</summary>
                    <!-- <a href="{{ route('startup') }}" class="burger-details" style="padding-left: 15px;">Startup Talk</a>
                    <a href="{{ route('incon') }}" class="burger-details" style="padding-left: 15px;">Seminar Nasional</a>
                    <a href="{{ route('techno') }}" class="burger-details" style="padding-left: 15px;">Technopreneur</a> -->
        <!-- <a href="#" onclick="openPage('Home','StartupTalk-speakers' , this, '#291647')">Startup Talk</a>
                    <a href="#" onclick="openPage('News', 'Technopreneur-speakers', this, '#291647')">Technopreneur</a>
                    <a href="#" onclick="openPage('Contact','ITComp-speakers', this, '#291647')">IT Competition</a>
                    <a href="#" onclick="openPage('About', 'Semnas-speakers', this, '#291647')">Seminar Nasional</a>
                    <a href="#" onclick="openPage('About2', 'AwardingNight-speakers', this, '#291647')">Awarding Night</a> -->
        <!-- </details>
            </div> -->
        <!-- </div> -->
        <ul class="menu" style="margin-bottom: 0;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle left-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Our Events
                </a>
                <div class="dropdown-menu border-dropmenu" aria-labelledby="navbarDropdown" style="background-color: #c4c4c4; border: none;">
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('Home','StartupTalk-speakers' , this, '#291647')">Startup Talk</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('News', 'Technopreneur-speakers', this, '#291647')">Technopreneur</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('Contact','ITComp-speakers', this, '#291647')">IT Competition</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('About', 'Semnas-speakers', this, '#291647')">Seminar Nasional</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('About2', 'AwardingNight-speakers', this, '#291647')">Awarding Night</a>

                </div>
            </li>
        </ul>
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
            <h3>Seminar Nasional</h3>
            <p>Description Seminar Nasional...</p>
        </div>
        <div id="About2" class="tabcontent">
            <h3>Awarding Night</h3>
            <p>Description Awarding Night...</p>
        </div>
    </div>
    <div class="box-speaker">
        <div id="StartupTalk-speakers" class="carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 1</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 2</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 3</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
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
        <div id="Technopreneur-speakers" class="carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 4</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 5</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 6</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
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
        <div id="ITComp-speakers" class="carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 7</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 8</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 9</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
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
        <div id="Semnas-speakers" class="carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 10</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 11</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 12</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
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
        <div id="AwardingNight-speakers" class="carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 13</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 14</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center mr-3" src="{{asset('img/speakers/pasfotokulyah.jpeg')}}" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 15</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="button-speakers-details">

                            </div>
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
    <div data-aos="fade-up" data-aos-duration="1000">
        <h1 class="title-box">Media Partner</h1>
        <div class="medpart-box">

        </div>
    </div>

    <div data-aos="fade-up" data-aos-duration="1000">
        <h1 class="title-box">Sponsored By</h1>
        <div class="sponsored-box">

        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    document.getElementById("defaultOpen").click();
</script>
@endsection