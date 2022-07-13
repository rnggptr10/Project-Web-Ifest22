@extends('events.events')

@section('event_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/events.css') }}">
@endsection

@section('event_webtitle', 'Startup Talk')

@section('event_title', 'Startup Talk')

@section('event_desc')
Startup Talk is a talk show that aims as a means to bring together Founders or Strategic Partners of a Startup with participants to share experiences about Metaverse & Digital Transformation. This series is the right place for startups to do soft selling and increase brand awareness.
@endsection

<!-- STARTUP LOGO -->
@section('startup1_logo')
<img class="sut-image" src="https://logodownload.org/wp-content/uploads/2014/04/mercedes-benz-logo-8.png" alt="Startup1">
@endsection

@section('startup2_logo')
<img class="sut-image" src="https://www.motoinsight.com/wp-content/themes/motoinsight/html/images/oem/honda-logo.png" alt="Startup2">
@endsection

@section('startup3_logo')
<img class="sut-image" src="https://logodownload.org/wp-content/uploads/2019/08/land-rover-logo.png" alt="Startup3">
@endsection

@section('startup4_logo')
<img class="sut-image" src="https://i0.wp.com/brzoapp.com/wp-content/uploads/2018/11/Porsche-Logo.png?w=1080&ssl=1" alt="Startup4">
@endsection

@section('startup5_logo')
<img class="sut-image" src="https://logodownload.org/wp-content/uploads/2014/04/mercedes-benz-logo-8.png" alt="Startup1">
@endsection

@section('startup6_logo')
<img class="sut-image" src="https://www.motoinsight.com/wp-content/themes/motoinsight/html/images/oem/honda-logo.png" alt="Startup2">
@endsection

@section('startup7_logo')
<img class="sut-image" src="https://logodownload.org/wp-content/uploads/2019/08/land-rover-logo.png" alt="Startup3">
@endsection

@section('startup8_logo')
<img class="sut-image" src="https://i0.wp.com/brzoapp.com/wp-content/uploads/2018/11/Porsche-Logo.png?w=1080&ssl=1" alt="Startup4">
@endsection

<!-- SPEAKERS DAY 1 -->
@section('startup1_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker1</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup2_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-2">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker2</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup3_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-3">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker3</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup4_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-4">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker4</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup5_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-4">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker4</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup6_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-4">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker6</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup7_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-4">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker7</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup8_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-4">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Speaker8</h5>
        <p class="text-photo-card-position">CEO</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

<!-- SPEAKERS DAY 2 -->

<!-- TEMPLATE BODY -->
@section('event_detail')
<!-- INI STARTUP PENGENNYA GERAK KYK COMPFEST -->
<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center justify-content-center" align="center" id="sutStartup" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Our Startup Partners</h1>
    <div class="row justify-content-center" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="col">
            <div class="row justify-content-center" style="padding-bottom: 20px;">
                @yield('startup1_logo')
                @yield('startup2_logo')
                @yield('startup3_logo')
                @yield('startup4_logo')
            </div>
            <div class="row justify-content-center" style="padding-top: 20px;">
                @yield('startup5_logo')
                @yield('startup6_logo')
                @yield('startup7_logo')
                @yield('startup8_logo')
            </div>
        </div>
    </div>
</div>

<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center justify-content-center" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Startup Talk : Day 1</h1>
    <h2 class="text-event-sub-theme">"Metaverse, The Next Level of Human Culture"</h2>
    <div id="sutSpeakersDay1" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup1_speakers')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup2_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup3_speakers')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup4_speakers')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#sutSpeakersDay1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sutSpeakersDay1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center justify-content-center" align="center" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Startup Talk : Day 2</h1>
    <h2 class="text-event-sub-theme">"Evolution of Digital Transformation"</h2>
    <div id="sutSpeakersDay2" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup5_speakers')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup6_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup7_speakers')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('startup8_speakers')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#sutSpeakersDay2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sutSpeakersDay2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-center" align="left" id="sutCards" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card" style="border: 0; width:90%" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/date.png') }}" alt="Date">
                </div>
                <div class="col-10" style="text-align: left;">
                    <h5 style="color:black;">20 - 21 Agustus 2022</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card" style="border: 0; width:90%" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/ticket.png') }}" alt="Ticket">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 style="color:black;">Free (Day 1)</h5>
                </div>
                <div class="col-5">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                        @guest
                        @if(Route::has('login'))
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
                        @endif
                        @else
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('startup.day1.registration') }}">Register Now</a>
                        @endguest
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-center" align="left" id="sutCards" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-xs-6 col-lg-6" align="center" style="padding: 0;">
        <div class="card" style="border: 0; width:90%" id="cardPlatform">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/platform.png') }}" alt="Platform">
                </div>
                <div class="col-10" style="text-align:left;">
                    <h5 style="color:black; ">Zoom Meeting</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card" style="border: 0; width:90%" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/ticket.png') }}" alt="Ticket">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 style="color:black;">Free (Day 2)</h5>
                </div>
                <div class="col-5">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                        @guest
                        @if(Route::has('login'))
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
                        @endif
                        @else
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('startup.day2.registration') }}">Register Now</a>
                        @endguest
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- @section('competition_button')
<div class="col-2">
    <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;">Guidebook</button>
</div>
<div class="col-2">
    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
        @guest
        @if(Route::has('login'))
        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
        @endif
        @else
        <a class="ifest-btn-primary-dark-bg-text" href="{{route('intention.registration.view')}}">Register Now</a>
        @endguest
    </button>
</div>
@endsection -->

@section('cp1_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="Whatsapp">
@endsection
@section('cp1_contact', 'https://wa.me/6282235596465')
@section('cp1_name', 'Mohammad Sulaeman')

@section('cp2_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
@endsection
@section('cp2_contact', 'https://line.me/ti/p/~hmd4')
@section('cp2_name', 'Mohammad Sulaeman')