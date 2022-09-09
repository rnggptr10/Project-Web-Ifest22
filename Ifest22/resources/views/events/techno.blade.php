@extends('events.events')

@section('event_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/events.css') }}">
@endsection

@section('event_webtitle', 'Technopreneur')

@section('event_title', 'Technopreneur')

@section('event_theme')
<div style="padding-top: 10px;padding-bottom: 10px;">
    <h2 class="text-theme">"Innovative Digital Startup For Youngpreneurs"</h2>
</div>
@endsection

@section('event_desc')
Technopreneur is a webinar and workshop that provides training & development facilities by professionals to develop people's entrepreneurial interests and talents in IT, so that they are able to use digital technology as an opportunity to develop business. Technopreneur 2022 collaborating with great incubators and companies in Indonesia to help the participants in developing their digital startup idea so that it is ready to be executed. Technopreneur 2022 presents concepts and themes where participants can practice and develop digital startup ideas from a young age, of course, accompanied by professionals. The materials that will be presented are "Introduction to Startup and Design Thinking", "Business Concept", "Branding and Market Validation", and "Funding and Pitching".

@endsection

<!-- SPEAKERS -->
@section('techno_speakers_1')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/speakers/speaker_11.png') }}" alt="Tita Bukian">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Tita Bukian</h5>
        <p class="text-photo-card-position" style="font-size: 14px">Business Transformation Innovation <br>
            Excellence Director PT Cybertrend <br> Intrabuana
        </p>
        <a><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin" style="margin-top: 20px;"></a>
    </div>
</div>
@endsection

@section('techno_speakers_2')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/speakers/speaker_2_2.jpg') }}" alt="Yubi Vebiona Hartono">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Yubi Vebiona Hartono</h5>
        <p class="text-photo-card-position" style="font-size: 12px;">Content Creator & Contributor Writer di Haluan <br> Media Group, Ex-Corporate Human Capital <br> Project di United Tractors
        </p>
        <a href="https://www.linkedin.com/in/yubivebionahartono" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin" style="margin-top: 20px;"></a>
    </div>
</div>
@endsection

@section('techno_speakers_3')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/speakers/speaker_3.png') }}" alt="Danny Liong">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:24px">Danny Liong</h5>
        <p class="text-photo-card-position" style="margin-bottom:24px">Chief Executive Officer at Jagel</p>
        <a href="https://id.linkedin.com/in/danny-liong-95b3a8206#:~:text=Danny%20Liong%20%2D%20Chief%20Executive%20Officer%20%2D%20Jagel%20%7C%20LinkedIn" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin" style="margin-top: 20px;"></a>
    </div>
</div>
@endsection


@section('techno_speakers_4')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/speakers/speaker_4.jpg') }}" alt="Frank G J Silitonga">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:24px">Frank G J Silitonga</h5>
        <p class="text-photo-card-position" style="margin-bottom:24px">Startup Business Mentor</p>
        <a href="https://www.linkedin.com/in/frank-gerard-jacobus-silitonga-7703a07/" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin" style="margin-top: 20px;"></a>
    </div>
</div>
@endsection

<!-- MENTORS -->
@section('techno_mentor_1')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/mentors/mentor_1.png') }}" alt="Benarivo Putra">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:32px">Benarivo Putra</h5>
        <p class="text-photo-card-position" style="margin-bottom:32px">Co-Founder & CEO of Atourin</p>
        <a href="https://id.linkedin.com/in/benarivotp#:~:text=Benarivo%20Putra%20%2D%20Chief%20Executive%20Officer%20%2D%20Atourin%20%7C%20LinkedIn" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('techno_mentor_2')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/mentors/mentor_2.png') }}" alt="Nurillah Jamil Achmawati Novel">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name">Nurillah Jamil Achmawati <br>Novel, S.AB., MBA</h5>
        <p class="text-photo-card-position" style="margin-bottom:16px">Dosen Dept. Administrasi Bisnis, <br>Prodi Bisnis Logistik, Fisip Unpad.</p>
        <a href="https://www.linkedin.com/in/nurillah-jamil-achmawati-novel-23183855/" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('techno_mentor_3')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/mentors/mentor_3.jpg') }}" alt="Faishal Wahiduddin">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:32px">Faishal Wahiduddin</h5>
        <p class="text-photo-card-position" style="margin-bottom:32px">CEO DoCheck</p>
        <a href="https://www.linkedin.com/in/faishalwahiduddin/" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('techno_mentor_4')
<img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/techno/mentors/mentor_4.jpeg') }}" alt="Farisadri Fauzan">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-10" style="line-height: 5px;">
        <h5 class="text-photo-card-name" style="margin-top:20px">Farisadri Fauzan</h5>
        <p class="text-photo-card-position" style="margin-bottom:20px">Assistant Professor at Universitas Padjadjaran</p>
        <a href="https://www.linkedin.com/in/farisadri-fauzan?jobid=1234&lipi=urn%3Ali%3Apage%3Ad_jobs_easyapply_pdfgenresume%3BiUy%2F8p6dQZymPDDv88Adiw%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_jobs_easyapply_pdfgenresume-v02_profile" target="_blank"><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

<!-- FAQ -->
@section('faq_techno_1')
<summary class="card-faq-q-text">Is it allowed that the number of members in the workshop team is not 3?</summary>
<p class="card-faq-a-text">For the workshop team members, 2 or 3 people are allowed, because considering making a startup requires teamwork and reducing the burden on each individual in doing the final project. With a team, communication will be more effective in developing business ideas.</p>
@endsection

@section('faq_techno_2')
<summary class="card-faq-q-text">When working on the pitch deck, will we be guided by a mentor?</summary>
<p class="card-faq-a-text">Yes, the mentor act as a guide for workshop participants. In addition to serving in the mentoring session, participants can also ask questions directly related to the material or the final project (pitch deck). However, this task is not fully carried out by the mentor, the mentor is only a guide.</p>
@endsection

@section('faq_techno_3')
<summary class="card-faq-q-text">Are there any specific themes for startup ideas?</summary>
<p class="card-faq-a-text">The business idea is free for each workshop team. Participants can be creative with unique and interesting business ideas to attract the incubator so that they have the opportunity to join the 15 best workshop teams.</p>
@endsection

@section('faq_techno_4')
<summary class="card-faq-q-text">Is it possible to change ideas during technopreneur event?</summary>
<p class="card-faq-a-text">For business idea at an early stage doesn't need to be too detailed, later it can be developed further. replacement of business idea is allowed as long as it is not too far from the business idea at the beginning of registration.</p>
@endsection

@section('faq_techno_5')
<summary class="card-faq-q-text">Is there any further mentoring for winning teams?</summary>
<p class="card-faq-a-text">For this year, prizes for the 3 winning teams are money with placards and an e-certificate. Participants who want to ask more questions can do this during the Technopreneur event with their mentor or can do it externally.</p>
@endsection

<!-- TEMPLATE BODY -->
@section('event_detail')
<div id="Speaker1" data-aos="fade-down" data-aos-duration="1000" align="center" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Workshop Speakers</h1>
    <div id="technoSpeakers" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_speakers_1')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_speakers_2')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_speakers_3')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_speakers_4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#technoSpeakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#technoSpeakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#technoSpeakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#technoSpeakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> -->

<div id="Speaker2" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Seminar Speakers</h1>
    <div id="technoSpeaker" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_speakers_1')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_speakers_2')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_speakers_3')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_speakers_4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#technoSpeaker" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#technoSpeaker" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div id="Speaker1" data-aos="fade-down" data-aos-duration="1000" align="center" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Workshop Mentors</h1>
    <div id="technoMentor" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_mentor_1')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_mentor_2')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_mentor_3')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ifest-photo-card" style="border: 0; width:max-content">
                            @yield('techno_mentor_4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#technoMentor" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#technoMentor" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div id="Speaker2" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Workshop Mentors</h1>
    <div id="technoMentor1" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_mentor_1')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_mentor_2')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_mentor_3')
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card size-img-speakers" style="border: 0;text-align:center;">
                            @yield('techno_mentor_4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#technoMentor1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#technoMentor1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div data-aos="fade-up" data-aos-duration="1000" class="row" align="center" id="eventTimeline" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="tm text-sub-title">Timeline</h1>
    <section class="ps-timeline-sec">
        <div class="container">
            <ol class="ps-timeline">
                <li style="width: 14.2%; padding-top:10px;">
                    <div class="ps-bot">
                        <p style="font-size:12px;">24 July - 8 September 2022</p>
                        <p style="font-size:14px;">Registration</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li style="width: 14.2%; padding-top:10px;">
                    <div class="ps-bot">
                        <p style="font-size:12px;">11 September 2022</p>
                        <p style="font-size:14px;">Seminar and Workshop Day 1</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li style="width: 14.2%; padding-top:10px;">
                    <div class="ps-bot">
                        <p style="font-size:12px;">18 September 2022</p>
                        <p style="font-size:14px;">Seminar and Workshop Day 2</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li style="width: 14.2%; padding-top:10px;">
                    <div class="ps-bot">
                        <p style="font-size:12px;">18 September - 2 October 2022</p>
                        <p style="font-size:14px;">Pitchdeck making</p>
                    </div>
                    <span class=" ps-sp"></span>
                </li>
                <li style="width: 14.2%; padding-top:10px;">
                    <div class="ps-bot">
                        <p style="font-size:12px;">2 - 9 October 2022</p>
                        <p style="font-size:14px;">Assesment Stage 1</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li style="width: 14.2%; padding-top:10px;">
                    <div class="ps-bot">
                        <p style="font-size:12px;">9 - 16 October 2022</p>
                        <p style="font-size:14px;">Pitchdeck Presentation Video Creation</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li style="width: 14.2%; padding-top:10px;">
                    <div class="ps-bot">
                        <p style="font-size:12px;">16 - 25 October 2022</p>
                        <p style="font-size:14px;">Assesment Stage 2</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
            </ol>
        </div>
    </section>
</div>

<!-- INI NANTI BISA PAKE LOOPING AJA -->
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-center padding-2-box-top" align="left" id="sutCards" style="padding-top: 30px;">
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/platform.png') }}" alt="Platform">
                </div>
                <div class="col-10" style="text-align:left;">
                    <h5 style="color:black;margin:0;">Youtube & Zoom Meetings</h5>
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
                    <h5 class="title-1" style="color:black;margin-bottom:0;">Seminar</h5>
                    <p class="title-2" style="color:black;margin:0; font-size:14px;">Seminar</p>
                    <p class="title-1" style="color:black;margin-bottom:0;">Free</p>
                    <p class="title-2" style="color:black;margin:0; font-size:12px;">Free</p>
                </div>
                <?php
                // SET TANGGAL REGIST TECHNO SEMINAR & WORKSHOP
                $techno_regist_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                $techno_regist_end = Carbon::create(2022, 9, 10, 23, 59, 59, 'Asia/Jakarta');
                $now = Carbon::now('Asia/Jakarta');

                $techno_regist_start->toDateTimeString();
                $techno_regist_end->toDateTimeString();
                $now->toDateTimeString();

                if ($now->greaterThan($techno_regist_start) && $now->lessThan($techno_regist_end)) { ?>
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
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('techoSeminar.registration')}}">
                                Register
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('techoSeminar.registration')}}">
                                <p style="margin: 0; font-size:10px">Register</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } elseif ($now->lessThan($techno_regist_start) || $now->greaterThan($techno_regist_end)) { ?>
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
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('techoSeminar.registration')}}">
                                Register
                            </a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('techoSeminar.registration')}}">
                                <p style="margin: 0; font-size:10px">Register</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-center padding-2-box-bottom" align="left" id="technoCards2">
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/guidebook.png') }}" alt="Guidebook">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 class="title-1" style="color:black;margin-bottom:0;">Workshop Guidebook</h5>
                    <p class="title-2" style="color:black;margin:0; font-size:14px;">Workshop Guidebook</p>
                </div>
                <div class="col-5">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                        <a class="title-1 ifest-btn-primary-dark-bg-text" target="_blank" href="https://bit.ly/GuideBookTechnopreneur22">Download</a>
                        <a class="title-2 ifest-btn-primary-dark-bg-text" target="_blank" href="https://bit.ly/GuideBookTechnopreneur22">
                            <p style="margin: 0; font-size:10px">Download</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-6" align="center" style="padding:0">
        <div class="card size-card" style="border: 0;" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="img-fluid events-card-logo" src="{{ URL::asset('icon/workshop.png') }}" alt="Workshop">
                </div>
                <div class="col-5" style="text-align: left;">
                    <h5 class="title-1" style="color:black;margin-bottom:0;">Workshop</h5>
                    <p class="title-2" style="color:black;margin:0; font-size:14px;">Workshop</p>
                    <p class="title-1" style="color:black;margin-bottom:0;">Including Seminar</p>
                    <p class="title-2" style="color:black;margin:0; font-size:12px;">Including Seminar</p>
                </div>
                <?php if ($now->greaterThan($techno_regist_start) && $now->lessThan($techno_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Register</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('technoWorkshop.registration.view')}}">Register</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('technoWorkshop.registration.view')}}">
                                <p style="margin: 0; font-size:10px">Register</p>
                            </a>
                            @endguest
                        </button>
                    </div>
                <?php } elseif ($now->lessThan($techno_regist_start) || $now->greaterThan($techno_regist_end)) { ?>
                    <div class="col-5">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" disabled>
                            @guest
                            @if(Route::has('login'))
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('login')}}">
                                <p style="margin: 0; font-size:10px">Register</p>
                            </a>
                            @endif
                            @else
                            <a class="title-1 ifest-btn-primary-dark-bg-text" href="{{route('technoWorkshop.registration.view')}}">Register</a>
                            <a class="title-2 ifest-btn-primary-dark-bg-text" href="{{route('technoWorkshop.registration.view')}}">
                                <p style="margin: 0; font-size:10px">Register</p>
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
                @yield('faq_techno_1')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_2')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_3')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_4')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_5')
            </details>
        </div>
    </div>
</div>
@endsection
@section('cp1_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="Whatsapp">
@endsection
@section('cp1_contact', 'https://wa.me/6281286407720')
@section('cp1_name', 'Glory Cornelia')

@section('cp2_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
@endsection
@section('cp2_contact', 'https://line.me/ti/p/~glorycpk26')
@section('cp2_name', 'Glory Cornelia')