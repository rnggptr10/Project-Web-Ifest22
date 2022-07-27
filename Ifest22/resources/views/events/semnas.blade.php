@extends('events.events')

@section('event_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/events.css') }}">
@endsection

@section('event_webtitle', 'Seminar Nasional')

@section('event_title', 'Seminar Nasional')

@section('event_theme')
<div style="padding-top: 10px;padding-bottom: 10px;">
    <h2 class="text-theme">"Cloud Computing for Digital Era"</h2>
</div>
@endsection

@section('event_desc')
Seminar Nasional is a national seminar that invites experienced speakers in those relevant to the IFEST theme. Seminar Nasional aims to build a platform and provide opportunities for national academics, researchers, and practitioners to exchange and share their experiences, ideas, knowledge, and research results about Cloud Computing.
@endsection

<!-- SPEAKERS -->
@section('semnas_speakers_1')
<img class="card-img-top size-img-top-speakers" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">To Be Announced Soon!</h5>
    </div>
</div>
@endsection

@section('semnas_speakers_2')
<img class="card-img-top size-img-top-speakers" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">To Be Announced Soon!</h5>
        <!-- <h5 class="text-photo-card-name">Speaker2</h5>
        <p class="text-photo-card-position">CEO</p> -->
    </div>
    <!-- <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div> -->
</div>
@endsection

@section('semnas_speakers_3')
<img class="card-img-top size-img-top-speakers" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">To Be Announced Soon!</h5>
        <!-- <h5 class="text-photo-card-name">Speaker3</h5>
        <p class="text-photo-card-position">CEO</p> -->
    </div>
    <!-- <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div> -->
</div>
@endsection

@section('semnas_speakers_4')
<img class="card-img-top size-img-top-speakers" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 class="text-photo-card-name">To Be Announced Soon!</h5>
        <!-- <h5 class="text-photo-card-name">Speaker4</h5>
        <p class="text-photo-card-position">CEO</p> -->
    </div>
    <!-- <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div> -->
</div>
@endsection

<!-- FAQ -->
@section('faq_semnas_1')
<summary class="card-faq-q-text">What is the delivery method for abstracts?</summary>
<p class="card-faq-a-text">Abstracts can be uploaded via the ticket details at profile.
    <br>Download the Abstract template <a target="_blank" href="https://bit.ly/TemplateAbstrakSemnas">here</a>.
</p>
@endsection

@section('faq_semnas_2')
<summary class="card-faq-q-text">What is the order of the registration flow?</summary>
<p class="card-faq-a-text">Participants : can register until the D day (Public and Students)<br>
    Presenter : send abstract, after abstract is accepted, payment can be made until 22 September 2022
</p>
@endsection

@section('faq_semnas_3')
<summary class="card-faq-q-text">Where can the seminar registration form be obtained?</summary>
<p class="card-faq-a-text">The seminar registration form can be accessed via register button at seminar page.</p>
@endsection

@section('faq_semnas_4')
<summary class="card-faq-q-text">Can Author be more than 1 person?</summary>
<p class="card-faq-a-text">Yes, according to the number of the research team</p>
@endsection

@section('faq_semnas_5')
<summary class="card-faq-q-text">When is the announcement of acceptance of abstracts?</summary>
<p class="card-faq-a-text">Announcement of acceptance of abstract on September 10, 2022 VIA email</p>
@endsection

@section('faq_semnas_6')
<summary class="card-faq-q-text">Seminars and Oral Presentations conducted via what?</summary>
<p class="card-faq-a-text">Via Zoom, the zoom link will be emailed before the seminar takes place</p>
@endsection

@section('faq_semnas_7')
<summary class="card-faq-q-text">If the Abstract is accepted, what should be done next?</summary>
<p class="card-faq-a-text">What you have to do is Upload Full Paper. Template for full paper is available <a target="_blank" href="https://bit.ly/TemplatePaperSemnas2022">here</a>.<br>
    If there are problems, please contact our contact person.
</p>
@endsection

<!-- TEMPLATE BODY -->
@section('event_detail')
<div id="Speaker1" data-aos="fade-down" data-aos-duration="1000" align="center" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Seminar Speakers</h1>
    <div id="semnasSpeakers" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('semnas_speakers_1')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('semnas_speakers_2')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('semnas_speakers_3')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('semnas_speakers_4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#semnasSpeakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#semnasSpeakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div id="Speaker2" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="title-1 text-event-sub-title">Speakers</h1>
    <h2 class="title-2 text-event-sub-title">Speakers</h2>

    <div id="semnasSpeakers2" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card" style="border: 0;text-align:center;">
                            @yield('semnas_speakers_1')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card" style="border: 0; text-align:center;">
                            @yield('semnas_speakers_2')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card" style="border: 0; text-align:center;">
                            @yield('semnas_speakers_3')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card" style="border: 0; text-align:center;">
                            @yield('semnas_speakers_4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#semnasSpeakers2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#semnasSpeakers2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- INI NANTI BISA PAKE LOOPING AJA -->
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-between padding-2-box-top" align="left" id="semnasCards1" style="padding-top: 30px;">
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/date.png') }}" alt="Date">
                </div>
                <div class="col-10" style="text-align: left;">
                    <h5 style="color:black;margin:0;">8 - 9 October 2022</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/seminar.png') }}" alt="Seminar">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 class="title-1" style="color:black;margin:0;">Seminar</h5>
                    <p class="title-2" style="color:black; margin:0; font-size:14px;">Seminar</p>
                </div>
                <?php
                // SET TANGGAL REGIST SEMINAR NASIONAL NONPRESENTER
                $semnas_s_regist_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                $semnas_s_regist_end = Carbon::create(2022, 10, 7, 23, 59, 59, 'Asia/Jakarta');
                $now = Carbon::now('Asia/Jakarta');

                $semnas_s_regist_start->toDateTimeString();
                $semnas_s_regist_end->toDateTimeString();
                $now->toDateTimeString();

                if ($now->greaterThan($semnas_s_regist_start) && $now->lessThan($semnas_s_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                Buy Ticket
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Buy Ticket</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('semnas.registration.view')}}">Register Now</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('semnas.registration.view')}}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } elseif ($now->lessThan($semnas_s_regist_start) || $now->greaterThan($semnas_s_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" disabled>
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                Buy Ticket
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Buy Ticket</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('semnas.registration.view')}}">Register Now</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('semnas.registration.view')}}">
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
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-between padding-2-box-bottom" align="left" id="semnasCards2">
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/platform.png') }}" alt="Platform">
                </div>
                <div class="col-10" style="text-align: left;">
                    <h5 style="color:black;margin:0;">Zoom Meetings</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/paper.png') }}" alt="Paper">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 class="title-1" style="color:black;margin-bottom:0;">Presenter Registration</h5>
                    <p class="title-2" style="color:black; margin:0; font-size:14px;">Presenter Registration</p>
                </div>
                <?php
                // SET TANGGAL REGIST SEMINAR NASIONAL NONPRESENTER
                $semnas_p_regist_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                $semnas_p_regist_end = Carbon::create(2022, 9, 5, 23, 59, 59, 'Asia/Jakarta');
                $now = Carbon::now('Asia/Jakarta');

                $semnas_p_regist_start->toDateTimeString();
                $semnas_p_regist_end->toDateTimeString();
                $now->toDateTimeString();

                if ($now->greaterThan($semnas_p_regist_start) && $now->lessThan($semnas_p_regist_end)) { ?>
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
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('semnas.presenter.registration.view')}}">Register Now</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('semnas.presenter.registration.view')}}">
                                <p style="margin: 0; font-size:10px">Register Now</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } elseif ($now->lessThan($semnas_p_regist_start) || $now->greaterThan($semnas_p_regist_end)) { ?>
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
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('semnas.presenter.registration.view')}}">Register Now</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('semnas.presenter.registration.view')}}">
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
<div data-aos="fade-up" data-aos-duration="1000" class="row justify-content-center align-items-center" align="center" id="eventFAQ" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="title-1 text-sub-title">Frequently Asked Question (FAQ)</h1>
    <p class="title-2 text-sub-title" style="font-size:20px;">Frequently Asked Question (FAQ)</p>
    <div class="row text-left margin-l-r" style="padding-top: 30px;">
        <div class="card-faq">
            <details>
                @yield('faq_semnas_1')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_semnas_2')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_semnas_3')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_semnas_4')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_semnas_5')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_semnas_6')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_semnas_7')
            </details>
        </div>
    </div>
</div>
@endsection

@section('cp1_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="Whatsapp">
@endsection
@section('cp1_contact', 'https://wa.me/628569904718')
@section('cp1_name', 'Bagus Prasetyo')

@section('cp2_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
@endsection
@section('cp2_contact', 'https://line.me/ti/p/~johanesbagus2506')
@section('cp2_name', 'Bagus Prasetyo')

@section('add_cp3_cp4')
<div class="row-cp">
    <div class="col-btn-left" style="padding-top: 30px;">
        <button id="btn-cp3" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content; padding:10px 20px 10px 20px" onclick="window.location.href='https://wa.me/6282208238182';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="Whatsapp">
            <span style="margin-left:10px">Zakia</span>
        </button>
    </div>
    <div class="col-btn-right" style="padding-top: 30px;">
        <button id="btn-cp4" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content; padding:10px 20px 10px 20px" onclick="window.location.href='https://line.me/ti/p/~zaqiana';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
            <span style="margin-left:10px">Zakia</span>
        </button>
    </div>
</div>
@endsection