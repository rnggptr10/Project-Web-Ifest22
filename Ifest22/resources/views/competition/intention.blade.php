<!DOCTYPE html>
<html lang="en">
@extends('layouts.app2')

@section('content')

<head>
    <title>IFest 2022</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/competitions.css') }}">
</head>

<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 0; ">
        <div class="row">
            <div class="col" style="padding: 20px 0 20px 0;">
                <div class="row" align="center" id="intDescription" style="padding-bottom: 30px;">
                    <div style="padding-bottom: 10px;">
                        <h1 class="text-title">Innovative Technology Competition (INTENTION)</h1>
                    </div>
                    <div style="padding-top: 10px;padding-bottom: 10px;">
                        <h2 class="text-theme">"Tema"</h2>
                    </div>
                    <div style="padding: 10px 50px 0 50px; font-size: 16px;">
                        <p class="text-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived
                            not
                            only five centuries, but also the leap into electronic typesetting, remaining
                            essentially
                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                            containing
                            Lorem
                            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                            including versions of Lorem Ipsum.</p>
                    </div>
                </div>
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
                <div class="row" align="center" id="intPrizes" style="padding-top: 30px;padding-bottom: 30px;">
                    <h1 class="text-sub-title">Prizes</h1>
                    <div class="row justify-content-center" style="padding-top: 20px;"">
                            <div class=" col-2">
                        <img style="width:100%;height: 160px;" src="https://clipground.com/images/trophy-winner-clipart-5.jpg">
                        <p style="color:white">Rp. 1.000.000</p>
                    </div>
                    <div class="col-2">
                        <img style="width:100%;height: 180px;" src="https://clipground.com/images/trophy-winner-clipart-5.jpg">
                        <p style="color:white">Rp. 1.000.000</p>
                    </div>
                    <div class="col-2">
                        <img style="width:100%;height: 160px;" src="https://clipground.com/images/trophy-winner-clipart-5.jpg">
                        <p style="color:white">Rp. 1.000.000</p>
                    </div>
                </div>
            </div>
            <div class="row" align="center" id="intJudges" style="padding-top: 30px;padding-bottom: 30px;">
                <h1 class="text-sub-title">Our Judges</h1>
                <div class="row justify-content-center" style="padding-top: 30px;">
                    <div class="col-4">
                        <div class="card" style="border: 0;">
                            <img class="card-img-top" style="width:100%;height:300px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Card image cap">
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
                        <div class="card" style="border: 0;">
                            <img class="card-img-top" style="width:100%;height:300px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Card image cap">
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
                </div>
            </div>
            <div class="row" align="center" id="intTimeline" style="padding-top: 30px;padding-bottom: 30px;">
                <h1 class="text-sub-title">Timeline</h1>
                <div class="row" style="padding-top: 30px;">
                    <p style="color:white;">timeline bulet2 lah pokoknya</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center" align="center" id="intButton" style="padding-top: 30px;padding-bottom: 30px;">
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
            </div>
            <div class="row justify-content-center align-items-center" align="center" id="intFAQ" style="padding-top: 30px;padding-bottom: 30px;">
                <h1 class="text-sub-title">Frequently Asked Question (FAQ)</h1>
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
            </div>
            <div class="row justify-content-center align-items-center" align="center" id="intCP" style="padding-top: 30px;padding-bottom: 30px;">
                <h1 class="text-sub-title">Contact Person</h1>
                <div class="col-2">
                    <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;">
                        <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
                        <span>Jarwo</span>
                    </button>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;">
                        <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
                        <span>Jarwo</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection