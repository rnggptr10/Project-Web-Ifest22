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

@section('event_desc')
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
@endsection

@section('event_detail')
<div class="row align-items-center" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Seminar Speakers</h1>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-7" style="line-height: 5px;">
                        <h5 style="color:black">Wildan Wortel</h5>
                        <p style="color:black">Pejabat Negara</p>
                    </div>
                    <div class="col-3">
                        <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-7" style="line-height: 5px;">
                        <h5 style="color:black">Wildan Wortel</h5>
                        <p style="color:black">Pejabat Negara</p>
                    </div>
                    <div class="col-3">
                        <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                    </div>
                </div>
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
<div class="row align-items-center" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our workshop Mentors</h1>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-7" style="line-height: 5px;">
                        <h5 style="color:black">Wildan Wortel</h5>
                        <p style="color:black">Pejabat Negara</p>
                    </div>
                    <div class="col-3">
                        <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-7" style="line-height: 5px;">
                        <h5 style="color:black">Wildan Wortel</h5>
                        <p style="color:black">Pejabat Negara</p>
                    </div>
                    <div class="col-3">
                        <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                    </div>
                </div>
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
@endsection

@section('event_timeline')
<div class="row" style="padding-top: 30px;">
    <p style="color:white;">timeline bulet2 lah pokoknya</p>
</div>
@endsection


@section('event_detail2')
<!-- INI NANTI BISA PAKE LOOPING AJA -->
<div class="row align-items-center justify-content-between" align="center" id="sutCards" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-6">
        <div class="card" style="border: 0; width:502px" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="events-card-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                </div>
                <div class="col-6" style="line-height: 5px;">
                    <p style="color:black;">22 Agustus 2022</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" style="border: 0; width:502px" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black">Wildan Wortel</h5>
                    <p style="color:black">Pejabat Negara</p>
                </div>
                <div class="col-2" style="padding-left:45px">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                        @guest
                        @if(Route::has('login'))
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Buy Ticket</a>
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
<div class="row align-items-center justify-content-between" align="center" id="sutCards" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-6">
        <div class="card" style="border: 0; width:502px" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="events-card-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                </div>
                <div class="col-6" style="line-height: 5px;">
                    <p style="color:black;">Zoom Meetings</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" style="border: 0; width:502px" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
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