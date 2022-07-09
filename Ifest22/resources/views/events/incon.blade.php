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
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
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
    </div>
</div>
@endsection

@section('semnas_speakers_2')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Speaker2</h5>
                <p class="text-photo-card-position">CEO</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('semnas_speakers_3')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Speaker3</h5>
                <p class="text-photo-card-position">CEO</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('semnas_speakers_4')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Speaker4</h5>
                <p class="text-photo-card-position">CEO</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- FAQ -->
@section('faq_semnas_1')
<summary>Pertanyaan 1</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

@section('faq_semnas_2')
<summary>Pertanyaan 2</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

@section('faq_semnas_3')
<summary>Pertanyaan 3</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

@section('faq_semnas_4')
<summary>Pertanyaan 4</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

<!-- TEMPLATE BODY -->
@section('event_detail')
<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center" align="center" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Speakers</h1>
    <div id="semnasSpeakers" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    @yield('semnas_speakers_1')
                    @yield('semnas_speakers_2')
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    @yield('semnas_speakers_3')
                    @yield('semnas_speakers_4')
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

<!-- INI NANTI BISA PAKE LOOPING AJA -->
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-between" align="left" id="semnasCards1" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%;" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/date.png') }}" alt="Date">
                </div>
                <div class="col-6" style="line-height: 5px;">
                    <h5 style="color:black;">22 Agustus 2022</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/seminar.png') }}" alt="Seminar">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black">Seminar</h5>
                </div>
                <div class="col-2" style="padding-left:45px">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                        @guest
                        @if(Route::has('login'))
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Buy Ticket</a>
                        @endif
                        @else
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('seminarNasional.registration.view')}}">Register Now</a>
                        @endguest
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-between" align="left" id="semnasCards2" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/platform.png') }}" alt="Platform">
                </div>
                <div class="col-6" style="line-height: 5px;">
                    <h5 style="color:black;">Zoom Meetings</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/paper.png') }}" alt="Paper">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black">Paper Submission</h5>

                </div>
                <div class="col-2" style="padding-left:45px">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                        @guest
                        @if(Route::has('login'))
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
                        @endif
                        @else
                        <a class="ifest-btn-primary-dark-bg-text" href="">Register Now</a>
                        @endguest
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="row justify-content-center align-items-center" align="center" id="eventFAQ" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Frequently Asked Question (FAQ)</h1>
    <div class="row" style="padding-top: 30px;">
        <div class="card-faq text-left">
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
@section('cp1_contact', 'https://wa.me/628569904718')
@section('cp1_name', 'Bagus Prasetyo')

@section('cp2_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
@endsection
@section('cp2_contact', 'https://line.me/ti/p/~johanesbagus2506')
@section('cp2_name', 'Bagus Prasetyo')