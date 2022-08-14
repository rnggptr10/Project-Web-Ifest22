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
<a style="width:fit-content">
    <img class="sut-image" src="{{ URL::asset('img/logo/sponsor/collab_cube_studio.png') }}" alt="Cube Studio">
</a>
@endsection

@section('startup2_logo')
<a style="width:fit-content">
    <img class="sut-image" src="{{ URL::asset('img/logo/sponsor/collab_itbox.png') }}" alt="ITBOX">
</a>
@endsection

@section('startup3_logo')
<a style="width:fit-content">
    <img class="sut-image" src="{{ URL::asset('img/logo/sponsor/collab_arutala.png') }}" alt="Arutala">
</a>
@endsection

@section('startup4_logo')
<a style="width:fit-content">
    <img class="sut-image" src="{{ URL::asset('img/logo/sponsor/collab_binar.png') }}" alt="Binar Academy">
</a>
@endsection

@section('startup5_logo')
<a href="https://dataacademy.co.id/id/" target="_blank" style="width:fit-content">
    <img class="sut-image" src="{{ URL::asset('img/logo/sponsor/collab_cda.jpg') }}" alt="Cybertrend Data Academy">
</a>
@endsection

@section('startup6_logo')
<a href="https://coding.id/" target="_blank" style="width:fit-content">
    <img class="sut-image" src="{{ URL::asset('img/logo/sponsor/coding-01.png') }}" alt="CODING.ID">
</a>
@endsection

@section('startup7_logo')
<a style="width:fit-content;">
    <img class="sut-image" src="{{ URL::asset('img/logo/sponsor/collab_spin.png') }}" alt="Spindonesia" style="height:75px">
</a>
@endsection

@section('startup8_logo')
<!-- <img class="sut-image" src="https://i0.wp.com/brzoapp.com/wp-content/uploads/2018/11/Porsche-Logo.png?w=1080&ssl=1" alt="Startup4"> -->
@endsection

<!-- SPEAKERS DAY 1 -->
@section('startup1_speakers')
<img class=" card-img-top size-img-top-speakers" src="{{ asset('img/event/startup/speaker_4.png') }}" alt="Muhamad Andri Saputro">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Muhamad Andri Saputro</h5>
        <p class="text-photo-card-position">Chief Design Officer / Product Designer</p>
    </div>
    <div class="col-2" style="padding:0;" align="left">
        <a href="https://www.linkedin.com/in/masscity/" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup2_speakers')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/startup/speaker_6.png') }}" alt="Ahmad S Zankie">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:12px">Ahmad S Zankie</h5>
        <p class="text-photo-card-position" style="margin-bottom:12px">CEO ARUTALA</p>
    </div>
    <div class="col-2" style="padding:0;" align="left">
        <a href="https://www.linkedin.com/in/dinzankie" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup3_speakers')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/startup/speaker_7.png') }}" alt="Erick Young">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:12px">Erick Young</h5>
        <p class="text-photo-card-position" style="margin-bottom:12px">Creative Director</p>
    </div>
    <div class="col-2" style="padding:0;" align="left">
        <a href="https://www.linkedin.com/in/epic-young-76b6838/" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup4_speakers')
<img class="card-img-top size-img-top-speakers" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-4">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:29px; margin-bottom:29px">To Be Announced Soon!</h5>
        <!-- <h5 class="text-photo-card-name">Speaker4</h5>
        <p class="text-photo-card-position">CEO</p> -->
    </div>
    <!-- <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div> -->
</div>
@endsection

@section('startup5_speakers')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/startup/speaker_1.png') }}" alt="Fransiskus Alvin">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:12px">Fransiskus Alvin</h5>
        <p class="text-photo-card-position" style="margin-bottom:12px">Founder Course-Net</p>
    </div>
    <div class="col-2" style="padding:0;" align="left">
        <a href="https://www.linkedin.com/in/fransiskus-alvin-winata-885579a8/"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup6_speakers')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/startup/speaker_2.png') }}" alt="Luthfy Ardiansyah">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:12px">Luthfy Ardiansyah</h5>
        <p class="text-photo-card-position" style="margin-bottom:12px">CEO Data Academy</p>
    </div>
    <!-- <div class="col-2" style="padding:0;" align="left">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div> -->
</div>
@endsection

@section('startup7_speakers')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/startup/speaker_3.png') }}" alt="Adhitya Yoga Yudanto">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:12px">Adhitya Yoga Yudanto</h5>
        <p class="text-photo-card-position" style="margin-bottom:12px">Head Of Product Development</p>
    </div>
    <div class="col-2" style="padding:0;" align="left">
        <a href=" https://www.linkedin.com/in/adhityayogayudanto/" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup8_speakers')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/startup/speaker_5.png') }}" alt="Gilang Rizky Pradana">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-9" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:12px">Gilang Rizky Pradana</h5>
        <p class="text-photo-card-position" style="margin-bottom:12px">Product Marketing Associate</p>
    </div>
    <div class="col-2" style="padding:0;" align="left">
        <a href="https://www.linkedin.com/in/gilangrizky/" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

<!-- SPEAKERS DAY 2 -->

<!-- TEMPLATE BODY -->
@section('event_detail')
<!-- INI STARTUP PENGENNYA GERAK KYK COMPFEST -->
<div data-aos="fade-down" data-aos-duration="1000" align="center" id="sutStartup" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="title-1 text-sub-title">Our Startup Partners</h1>
    <h3 class="title-2">Our Startup Partners</h3>
    <div class="row justify-content-center" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="col-10">
            <div class="row justify-content-center align-items-center" style="padding-top: 20px;padding-bottom: 20px;background-color: #2d2d2d;border-radius: 10px;">
                @yield('startup1_logo')
                @yield('startup2_logo')
                @yield('startup3_logo')
                @yield('startup4_logo')
                @yield('startup5_logo')
                @yield('startup6_logo')
                @yield('startup7_logo')
                @yield('startup8_logo')
            </div>
        </div>
    </div>
</div>

<div id="Speaker1" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Startup Talk : Day 1</h1>

    <h2 class="title-1 text-event-sub-theme">"Metaverse, The Next Level of Human Culture"</h2>
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

<div id="Speaker2" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="title-1 text-event-sub-title">Startup Talk : Day 1</h1>
    <h2 class="title-2 text-event-sub-title">Startup Talk : Day 1</h2>

    <h2 class="title-1 text-event-sub-theme">"Metaverse, The Next Level of Human Culture"</h2>
    <p class="title-2 text-desc text-event-sub-theme">"Metaverse, The Next Level of Human Culture"</p>
    <div id="sutSpeakers2Day1" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card size-card-speaker" style="border: 0;text-align:center;">
                            @yield('startup1_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card size-card-speaker" style="border: 0; text-align:center;">
                            @yield('startup2_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0; text-align:center;">
                            @yield('startup3_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class=" carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0; text-align:center;">
                            @yield('startup4_speakers')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#sutSpeakers2Day1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sutSpeakers2Day1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div id="Speaker1" data-aos="fade-down" data-aos-duration="1000" align="center" style="padding-top: 30px;padding-bottom: 30px;">
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

<div id="Speaker2" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="title-1 text-event-sub-title">Startup Talk : Day 2</h1>
    <h1 class="title-2 text-event-sub-title">Startup Talk : Day 2</h1>
    <h2 class="title-1 text-event-sub-theme">"Evolution of Digital Transformation"</h2>
    <p class="title-2 text-desc text-event-sub-theme">"Evolution of Digital Transformation"</p>
    <div id="sutSpeakers2Day2" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('startup5_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0; text-align:center;">
                            @yield('startup6_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0; text-align:center;">
                            @yield('startup7_speakers')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0; text-align:center;">
                            @yield('startup8_speakers')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#sutSpeakers2Day2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sutSpeakers2Day2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-center padding-2-box-top" align="left" id="sutCards" style="padding-top: 30px;">
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/date.png') }}" alt="Date">
                </div>
                <div class="col-10" style="text-align: left;">
                    <h5 style="color:black; margin:0">20 - 21 Agustus 2022</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/ticket.png') }}" alt="Ticket">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 class="title-1" style="color:black;margin:0;">Free (Day 1)</h5>
                    <p class="title-2" style="color:black; margin:0; font-size:14px;">Free (Day 1)</p>
                </div>
                <?php
                // SET TANGGAL ACARA SUT DAY1
                $sut_1_regist_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                $sut_1_regist_end = Carbon::create(2022, 8, 19, 23, 59, 59, 'Asia/Jakarta');
                $now = Carbon::now('Asia/Jakarta');

                $sut_1_regist_start->toDateTimeString();
                $sut_1_regist_end->toDateTimeString();
                $now->toDateTimeString();

                if ($now->greaterThan($sut_1_regist_start) && $now->lessThan($sut_1_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day1.registration') }}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day1.registration') }}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } elseif ($now->lessThan($sut_1_regist_start) || $now->greaterThan($sut_1_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" disabled>
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day1.registration') }}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day1.registration') }}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="clear-pad-top row align-items-center justify-content-center padding-2-box-bottom" align="left" id="sutCards">
    <div class="col-xs-6 col-lg-6" align="center" style="padding: 0;">
        <div class="card size-card" style="border: 0;" id="cardPlatform">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/platform.png') }}" alt="Platform">
                </div>
                <div class="col-10" style="text-align:left;">
                    <h5 style="color:black; margin:0 ">Zoom Meeting</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/ticket.png') }}" alt="Ticket">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 class="title-1" style="color:black; margin:0">Free (Day 2)</h5>
                    <p class="title-2" style="color:black; margin:0; font-size:14px;">Free (Day 2)</p>
                </div>
                <?php
                // SET TANGGAL ACARA SUT DAY 2
                $sut_2_regist_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                $sut_2_regist_end = Carbon::create(2022, 8, 19, 23, 59, 59, 'Asia/Jakarta');

                $sut_2_regist_start->toDateTimeString();
                $sut_2_regist_end->toDateTimeString();

                if ($now->greaterThan($sut_2_regist_start) && $now->lessThan($sut_2_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day2.registration') }}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day2.registration') }}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } elseif ($now->lessThan($sut_2_regist_start) || $now->greaterThan($sut_2_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" disabled>
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day2.registration') }}">
                                Register Now
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{ route('startup.day2.registration') }}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
@endsection

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