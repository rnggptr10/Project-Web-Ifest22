@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
<!-- KALO GANTI DI WEB PAKE HOME CSS -->
<link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
@endsection
@section('content')
<div class="content-main">
    <img src="{{asset('img/bg-fix.png')}}" alt="bg" style="width:100%;">
    <div class="logo-content-main">
        <a href="{{route('company')}}">
            <img class="logo-landing" src="{{asset('img/logo/logo_landing.png')}}" alt="IFest Logo">
        </a>
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
        <p class="title-cd" style="margin:0">Startup Talk</p>
        <!-- <h3>International Conference</h3> -->
        <div class="conference-btn">

            <!-- <a href="{{ route('semnas') }}"><span class="register">Register</span></a> -->
            <!-- <a href="{{ route('semnas') }}"><span class="register">See Details</span></a> -->
            <a href="{{ route('startup') }}"><span class="details" style="color:#fff; border-color:#fff;" id="details">Details</span></a>
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
                    <p style="margin:0">Startup Talk</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="conference-btn2">
                    <button class="btn btn-outline-primary ifest-btn-outline-primary-light-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold" id="conference-btn-responsive"><a style="color:#fff;" class="ifest-btn-outline-primary-light-bg-text" href="{{route('register')}}">Register</a></button>
                    <button class="btn btn-outline-primary ifest-btn-outline-primary-light-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold" id="conference-btn-responsive2"><a style="color:#fff;" class="ifest-btn-outline-primary-light-bg-text" href="{{route('register')}}">Details</a></button>

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
        <ul class="menu" style="margin-bottom: 0;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle left-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Our Events
                </a>
                <div class="dropdown-menu border-dropmenu" aria-labelledby="navbarDropdown" style="background-color: #E6EEF7; border: 1px solid #fff;">
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('Home','StartupTalk-speakers' , this, '')">Startup Talk</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('News', 'Technopreneur-speakers', this, '')">Technopreneur</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('Contact','ITComp-speakers', this, '')">IT Competition</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('About', 'Semnas-speakers', this, '')">Seminar Nasional</a>
                    <a class="item-dropmenu" style="padding: 0.25rem 1rem;" href="#" onclick="openPage('About2', 'AwardingNight-speakers', this, '')">Awarding Night</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="pasklik">
        <div id="Home" class="tabcontent">
            <h3>Startup Talk</h3>
            <p style="margin-bottom: 0px; font-family: 'Poppins-Regular'">Startup:Day1 "Metaverse, The Next Level of Human Culture"</p>
            <p>Startup:Day2 "Evolution of Digital Transformation"</p>
            <p>Startup Talk is a talk show that aims as a means to bring together Founders or Strategic Partners of a Startup with participants to share experiences about Metaverse & Digital Transformation. This series is the right place for startups to do soft selling and increase brand awareness.</p>
        </div>
        <div id="News" class="tabcontent">
            <h3>Technopreneur</h3>
            <p>"Innovative Digital Startup For Youngpreneur"</p>
            <p>Technopreneur is a webinar and workshop that provides training & development facilities by professionals to develop people's entrepreneurial interests and talents in IT, so that they are able to use digital technology as an opportunity to develop business. Technopreneur 2022 collaborating with great incubators and companies in Indonesia to help the participants in developing their digital startup idea so that it is ready to be executed. Technopreneur 2022 presents concepts and themes where participants can practice and develop digital startup ideas from a young age, of course, accompanied by professionals.</p>
        </div>
        <div id="Contact" class="tabcontent">
            <h3>IT Competition</h3>
            <p>IT Competition is a series of national-scale competitions at IFest 2022 that invites all the best students in Indonesia to compete and improve their digital skills to become a future-ready generation.</p>
        </div>
        <div id="About" class="tabcontent">
            <h3>Seminar Nasional</h3>
            <p>Seminar Nasional is a national seminar that invites experienced speakers in those relevant to the IFEST theme. Seminar Nasional aims to build a platform and provide opportunities for national academics, researchers, and practitioners to exchange and share their experiences, ideas, knowledge, and research results about Cloud Computing.</p>
        </div>
        <div id="About2" class="tabcontent">
            <h3>Awarding Night</h3>
            <p>Coming Soon</p>
        </div>
    </div>
    <div class="box-speaker">
        <div id="StartupTalk-speakers" class="carousel carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <h4 style="text-align:center;">Meet Our Speakers</h4>
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/startup/speaker_4.png') }}" alt="Muhamad Andri Saputro">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Muhamad Andri Saputro</h5>
                            <p>Our speaker at Startup Talk day 1 with the theme "Metaverse, The Next Level of Human Culture". Position as Chief Design Officer / Product Designer at Cube Studio.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/startup/speaker_6.png') }}" alt="Ahmad S Zankie">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Ahmad S Zankie</h5>
                            <p>Our speaker at Startup Talk day 1 with the theme "Metaverse, The Next Level of Human Culture". Position as CEO at Arutala.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/startup/speaker_7.png') }}" alt="Erick Young">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Erick Young</h5>
                            <p>Our speaker at Startup Talk day 1 with the theme "Metaverse, The Next Level of Human Culture". Position as Creative Director at Spindonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/startup/speaker_1.png') }}" alt="Fransiskus Alvin">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Fransiskus Alvin</h5>
                            <p>Our speaker at Startup Talk day 2 with the theme "Evolution of Digital Transformation". Position as Founder Course-Net at ITBox.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/startup/speaker_2.png') }}" alt="Luthfy Ardiansyah">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Luthfy Ardiansyah</h5>
                            <p>Our speaker at Startup Talk day 2 with the theme "Evolution of Digital Transformation". Position as CEO Data Academy.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/startup/speaker_3.png') }}" alt="Adhitya Yoga Yudanto">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Adhitya Yoga Yudanto</h5>
                            <p>Our speaker at Startup Talk day 2 with the theme "Evolution of Digital Transformation". Position as Head of Product Development at Coding.ID.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/startup/speaker_5.png') }}" alt="Gilang Rizky Pradana">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Gilang Rizky Pradana</h5>
                            <p>Our speaker at Startup Talk day 2 with the theme "Evolution of Digital Transformation". Position as Product Marketing Associate at Binar Academy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#StartupTalk-speakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#StartupTalk-speakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="Technopreneur-speakers" class="carousel carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <h4 style="text-align:center;">Meet Our Speakers</h4>
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/techno/speakers/speaker_11.png') }}" alt="Tita Bukian">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Tita Bukian</h5>
                            <p>Our Seminar Speaker at Technopreneur with the theme "Innovative Digital Startup For Youngpreneur". Position as Business Transformation Innovation Excellence Director PT Cybertrend Intrabuana.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/techno/speakers/speaker_2.png') }}" alt="Yubi Vebiona Hartono">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Yubi Vebiona Hartono</h5>
                            <p>Our Seminar Speaker at Technopreneur with the theme "Innovative Digital Startup For Youngpreneur". Position as Content Creator & Contributor Writer di Haluan Media Group, Ex-Corporate Human Capital Project di United Tractors</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="{{ asset('img/event/techno/speakers/speaker_3.png') }}" alt="Danny Liong">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Danny Liong</h5>
                            <p>Our Seminar Speaker at Technopreneur with the theme "Innovative Digital Startup For Youngpreneur". Position as Chief Executive Officer at Jagel</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#Technopreneur-speakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Technopreneur-speakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="ITComp-speakers" class="carousel-pembicara slide">
            <div class="ITComp-details">
                <div class="ITComp-button" class="tabcontent">
                    <a href="{{ route('ctf') }}">
                        <div class="ITComp-info" align="center">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ URL::asset('img/competition/logo/ctf.png') }}">
                                <div class="overlay">
                                    <h2>Capture The Flag</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="ITComp-button" class="tabcontent">
                    <a href="{{ route('da') }}">
                        <div class="ITComp-info" align="center">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ URL::asset('img/competition/logo/dac.png') }}">
                                <div class="overlay">
                                    <h2>Data Analysis Competition</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="ITComp-button" class="tabcontent">
                    <a href="{{ route('intention') }}">
                        <div class="ITComp-info" align="center">
                            <div class="hovereffect">
                                <img class="img-fluid" src="{{ URL::asset('img/competition/logo/int.png') }}">
                                <div class="overlay">
                                    <h2>INTENTION</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="Semnas-speakers" class="carousel carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <div class="carousel-item active" style="background-color: transparent;">
                    <h4 style="text-align:center;">Meet Our Speakers</h4>
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 1</h5>
                            <p>To Be Announced Soon!</p>
                            <div class="button-speakers-details" style="padding-top: 90px;">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 2</h5>
                            <p>To Be Announced Soon!</p>
                            <div class="button-speakers-details" style="padding-top: 90px;">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg  " alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 3</h5>
                            <p>To Be Announced Soon!</p>
                            <div class="button-speakers-details" style="padding-top: 90px;">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#Semnas-speakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Semnas-speakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="AwardingNight-speakers" class="carousel carousel-pembicara slide" data-ride="carousel">
            <div class="carousel-inner" class="tabcontent">
                <h4 style="text-align:center;">Meet Our Speakers</h4>
                <div class="carousel-item active" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg  " alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 1</h5>
                            <p>To Be Announced Soon!</p>
                            <div class="button-speakers-details" style="padding-top: 90px;">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg  " alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 2</h5>
                            <p>To Be Announced Soon!</p>
                            <div class="button-speakers-details" style="padding-top: 90px;">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: transparent;">
                    <div class="speaker">
                        <div class="img-speakers">
                            <img class="align-self-center rm-3" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg  " alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Speaker 3</h5>
                            <p>To Be Announced Soon!</p>
                            <div class="button-speakers-details" style="padding-top: 90px;">
                                <button class="allspeaker"><a style="color:white; text-decoration:none;" href="">See All Speakers</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#AwardingNight-speakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#AwardingNight-speakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div>

    <div data-aos="fade-up" data-aos-duration="1000" style="margin-bottom:30px">
        <div class="row justify-content-center" style="margin:0;">
            <h1 class="title-box">Exclusive Cloud Hosting Partner</h1>
            <div class="sponsored-box">
                <div class="row justify-content-center">
                    <a href="https://www.dewaweb.com" target="_blank">
                        <img src="{{asset('img/logo/sponsor/collab_dewaweb_white.png')}}" alt="Dewaweb" class="logo-sponsor-xl">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" style="margin-bottom:60px">
        <h1 class="title-box">Sponsored by</h1>
        <div class="sponsored-box">
            <div class="row justify-content-center align-items-center">
                <!-- One of three columns -->
                <a href="https://www.dewaweb.com" target="_blank">
                    <img src="{{asset('img/logo/sponsor/collab_dewaweb_white.png')}}" alt="Dewaweb" class="logo-sponsor-xl">
                </a>
                <a href="https://dataacademy.co.id/id/" target="_blank">
                    <img src="{{asset('img/logo/sponsor/collab_cda_nobg.png')}}" alt="Cybertrend Data Academy" class="logo-sponsor-xl" style="height:110px">
                </a>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" style="margin-bottom:60px">
        <h1 class="title-box">Supported by</h1>
        <div class="sponsored-box">
            <div class="row justify-content-center align-items-center">
                <!-- One of three columns -->
                <a href="https://www.dewaweb.com" target="_blank">
                    <img src="{{asset('img/logo/sponsor/collab_dewaweb_white.png')}}" alt="Dewaweb" class="logo-sponsor-xl">
                </a>
                <a href="https://dataacademy.co.id/id/" target="_blank">
                    <img src="{{asset('img/logo/sponsor/collab_cda_nobg.png')}}" alt="Cybertrend Data Academy" class="logo-sponsor-xl" style="height:110px">
                </a>
                <a href="https://petircysec.com/" target="_blank">
                    <img src="{{asset('img/logo/sponsor/collab_petir_no_bg.png')}}" alt="Petir Cyber Security" class="logo-sponsor-m" style="height:90px">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_arutala.png')}}" alt="Arutala" class="logo-sponsor-m">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_binar.png')}}" alt="Binar Academy" class="logo-sponsor-m" style="height:55px">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_talent-growth.jpeg')}}" alt="Talent Growth" class="logo-sponsor-m" style="height:40px">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_itbox.png')}}" alt="ITBOX" class="logo-sponsor-m">
                </a>
                <a href="https://coding.id/" target="_blank">
                    <img src="{{asset('img/logo/sponsor/coding-01.png')}}" alt="CODING.ID" class="logo-sponsor-m">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_cube_studio.png')}}" alt="Cube Studio" class="logo-sponsor-m">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_jagel.png')}}" alt="Jagel" class="logo-sponsor-m" style="height:100px">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_atourin.png')}}" alt="Atourin" class="logo-sponsor-m" style="height:55px">
                </a>
                <a>
                    <img src="{{asset('img/logo/sponsor/collab_spin.png')}}" alt="Spindonesia" class="logo-sponsor-m" style="height:55px">
                </a>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000">
        <h1 class="title-box">Media Partner</h1>
        <div class="medpart-box">
            <div class="row justify-content-center align-items-center">
                <a href="https://coding.id/" target="_blank">
                    <img src="{{asset('img/logo/medpart/medpart_coding_id.png')}}" alt="CODING.ID" class="logo-medpart">
                </a>
                <a>
                    <img src="{{asset('img/logo/medpart/medpart_berita_lomba.png')}}" alt="Berita Lomba" class="logo-medpart">
                </a>
                <a>
                    <img src="{{asset('img/logo/medpart/medpart_event_apaaja.png')}}" alt="Event Apaaja" class="logo-medpart">
                </a>
                <a>
                    <img src="{{asset('img/logo/medpart/medpart_event_kampus.png')}}" alt="Event Kampus" class="logo-medpart">
                </a>
                <a>
                    <img src="{{asset('img/logo/medpart/medpart_hmj_if_unla.png')}}" alt="HMJ IF UNLA" class="logo-medpart">
                </a>
                <a>
                    <img src="{{asset('img/logo/medpart/medpart_mading_event_cerah.png')}}" alt="Event Cerah" class="logo-medpart">
                </a>
                <a>
                    <img src="{{asset('img/logo/medpart/medpart_webinar.png')}}" alt="Webinar" class="logo-medpart">
                </a>
                <a>
                    <img src="{{asset('img/logo/medpart/medpart_HMSE_ITTP.png')}}" alt="HMSE ITTP" class="logo-medpart">
                </a>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000">
        <h1 class="title-box">Data Academy</h1>
        <div class="medpart-box" style="background: none;">
            <div class="row justify-content-center align-items-center">
                <video controls style="width:70%; border-radius:10px">
                    <source src=" {{ asset('video/DataAcademy.mp4') }}" />
                </video>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000">
        <h1 class="title-box">Dewaweb</h1>
        <div class="medpart-box" style="background: none;">
            <div class="row justify-content-center align-items-center">
                <video controls style="width:70%; border-radius:10px">
                    <source src="{{ asset('video/Dewaweb.mp4') }}" />
                </video>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.getElementById("defaultOpen").click();
    </script>
    @endsection