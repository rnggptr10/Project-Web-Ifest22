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
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
@endsection

<!-- STARTUP LOGO -->
@section('startup1_logo')
<img class="sut-image" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Startup1">
@endsection

@section('startup2_logo')
<img class="sut-image" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Startup1">
@endsection

@section('startup3_logo')
<img class="sut-image" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Startup1">
@endsection

@section('startup4_logo')
<img class="sut-image" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Startup1">
@endsection

<!-- SPEAKERS DAY 1 -->
@section('startup1_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-1">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 style="color:black">Wortel</h5>
        <p style="color:black">Pejabat</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup2_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-2">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 style="color:black">Wortel</h5>
        <p style="color:black">Pejabat</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup3_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-3">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 style="color:black">Wortel</h5>
        <p style="color:black">Pejabat</p>
    </div>
    <div class="col-3">
        <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
    </div>
</div>
@endsection

@section('startup4_speakers')
<img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-4">
<div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
    <div class="col-7" style="line-height: 5px;">
        <h5 style="color:black">Wortel</h5>
        <p style="color:black">Pejabat</p>
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
<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center" align="center" id="sutStartup" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Our Startup</h1>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col">
            @yield('startup1_logo')
        </div>
        <div class="col">
            @yield('startup2_logo')
        </div>
        <div class="col">
            @yield('startup3_logo')
        </div>
        <div class="col">
            @yield('startup4_logo')
        </div>
    </div>
</div>

<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Startup Talk Day 1</h1>
    <h2 class="text-event-sub-theme">"Tema Day 1"</h2>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                @yield('startup1_speakers')
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                @yield('startup2_speakers')
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 30px;">
            <div class="col-2">
                <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-left.svg') }}" alt="arrow-left">
                <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-right.svg') }}" alt="arrow-right">
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Startup Talk Day 2</h1>
    <h2 class="text-event-sub-theme">"Tema Day 2"</h2>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                @yield('startup3_speakers')
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                @yield('startup4_speakers')
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 30px;">
            <div class="col-2">
                <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-left.svg') }}" alt="arrow-left">
                <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-right.svg') }}" alt="arrow-right">
            </div>
        </div>
    </div>
</div>

<!-- INI NANTI BISA PAKE LOOPING AJA -->
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-between" align="left" id="sutCards" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-6">
        <div class="card" style="border: 0; width:502px" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/date.png') }}" alt="Date">
                </div>
                <div class="col-6">
                    <h5 style="color:black; ">20 - 21 Agustus 2022</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" style="border: 0; width:502px" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/ticket.png') }}" alt="Ticket">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black;">Free</h5>
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
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-center" align="left" id="sutCards" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-6">
        <div class="card" style="border: 0; width:502px" id="cardPlatform">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/platform.png') }}" alt="Platform">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black; ">Zoom Meeting</h5>
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

@section('cp1_wa', '6287720201166')
@section('cp1_name', 'Jarwo 1')
@section('cp2_wa', '6287720201177')
@section('cp2_name', 'Jarwo 2')

