@extends('competition.competition')

@section('competition_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/competitions.css') }}">
@endsection

@section('competition_webtitle', 'Capture The Flag')

@section('competition_title', 'Capture The Flag')

@section('competition_theme', 'Tema')

@section('competition_desc')
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
@endsection

@section('competition_flashback')
<div class="row align-items-center" align="center" id="intFlashback" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-1">
        <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-left.svg') }}" alt="arrow-left">
    </div>
    <div class="col-10">
        <div class="row">
            <div class="col-sm" align="center" style="padding-right: 25px;">
                <img style="width:100%;height: 320px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7">
            </div>
            <div class="col-sm" align="center" style="padding-right: 25px;padding-left: 25px;">
                <img style="width:100%;height: 320px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7">
            </div>
            <div class="col-sm" align="center" style="padding-left: 25px;">
                <img style="width:100%;height: 320px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7">
            </div>
        </div>
    </div>
    <div class="col-1">
        <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-right.svg') }}" alt="arrow-right">
    </div>
</div>
@endsection

@section('first_prize', 'Rp.3.000.000')
@section('second_prize', 'Rp.2.000.000')
@section('third_prize')
<div class="col-2">
    <img style="width:100%;height: 160px;" src="https://clipground.com/images/trophy-winner-clipart-5.jpg">
    <p style="color:white">Rp. 1.000.000</p>
</div>
@endsection

@section('competition_timeline')
<div class="row" style="padding-top: 30px;">
    <p style="color:white;">timeline bulet2 lah pokoknya</p>
</div>
@endsection

@section('competition_button')
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
        <a class="ifest-btn-primary-dark-bg-text" href="{{route('ctf.registration.view')}}">Register Now</a>
        @endguest
    </button>
</div>
@endsection

@section('competition_faq')
<div class="row" style="padding-top: 30px;">
    <p style="color:white;">ini FAQ</p>
    <!-- <div class="card">
        <details style="color:#000000;">
            <summary>Pertanyaan 1</summary>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown</p>
        </details>
    </div>
    <div class="card">
        <details style="color:#000000;">
            <summary>Pertanyaan 1</summary>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown</p>
        </details>
    </div> -->
</div>
@endsection

@section('cp1_wa', '6287720201166')
@section('cp1_name', 'Jarwo 1')
@section('cp2_wa', '6287720201177')
@section('cp2_name', 'Jarwo 2')