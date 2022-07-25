@extends('competition.competition')

@section('competition_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/competitions.css') }}">
@endsection

@section('competition_webtitle', 'Capture The Flag')

@section('competition_title')
<div class="col-3" align="center">
    <img class="img-fluid" style="width:200px;" src="{{ URL::asset('img/competition/logo/ctf.png') }}">
</div>
<div class="col-4">
    <p class="title-competition" style="margin:0; margin-top:20px ">Capture The Flag</p>
</div>
@endsection

@section('competition_desc')
Capture The Flag (CTF) is a national-scale competition organized by Himatif FMIPA Unpad as part of the Informatics Festival (IFest) 2022. Capture The Flag is a competition in the field of network security that requires each participant to think creatively in search of certain strings called flags.
This competition is held online and is intended for high school / vocational students or active S1/D4/D3 students as evidenced by a student card. This competition uses the jeopardy concept which will test participants' abilities in the fields of Web Hacking, Binary Exploitation, Reverse Engineering, Digital Forensic, Cryptography, and Misc and will be contested by the entire team consisting of 1-3 people.
@endsection

@section('competition_collab')
<div data-aos="fade-down" data-aos-duration="1000" class="row-img-prize justify-content-center" align="center" id="competitionPrizes" style="padding-bottom: 30px;">
    <h1 class="text-sub-title" style="font-size:24px">Problem Setter Collaboration</h1>
    <a href="https://petircysec.com/">
        <img class="img-fluid" style="width:180px;" src="{{ URL::asset('img/logo/sponsor/collab_petir_no_bg.png') }}">
    </a>
</div>
<div data-aos="fade-down" data-aos-duration="1000" class="row-img-prize justify-content-center" align="center" id="competitionPrizes" style="padding-bottom: 50px;">
    <h1 class="text-sub-title" style="font-size:24px">Exclusive Cloud Hosting Partner</h1>
    <img class="img-fluid" style="width:280px;" src="{{ URL::asset('img/logo/sponsor/collab_dewaweb_white.png') }}">
</div>
@endsection

@section('competition_flashback')
<!-- <div class="row align-items-center carousel slide" align="center" id="dacFlashback1" data-ride="carousel" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <div class="col-4" align="center" style="padding-right: 25px;">
                    <img class="photo-flashback" src="https://cdn6.dissolve.com/p/D1061_185_320/D1061_185_320_1200.jpg">
                </div>
                <div class="col-4" align="center" style="padding-left: 25px;">
                    <img class="photo-flashback" src="https://cdn6.dissolve.com/p/D1061_185_320/D1061_185_320_1200.jpg">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-4" align="center" style="padding-right: 25px;">
                    <img style="width:352px" src="https://cdn6.dissolve.com/p/D1061_185_320/D1061_185_320_1200.jpg">
                </div>
                <div class="col-4" align="center" style="padding-left: 25px;">
                    <img style="width:352px" src="https://cdn6.dissolve.com/p/D1061_185_320/D1061_185_320_1200.jpg">
                </div>
            </div>
            <!-- <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-left.svg') }}" alt="arrow-left">
            <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-right.svg') }}" alt="arrow-right">
        </div>
    </div>
    <a class="carousel-control-prev" href="#dacFlashback1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#dacFlashback1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> -->

<!-- <div class="row align-items-center carousel slide" align="center" id="dacFlashback2" data-ride="carousel" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <div class="col">
                    <img class="photo-flashback" src="https://cdn6.dissolve.com/p/D1061_185_320/D1061_185_320_1200.jpg">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col">
                    <img style="width:352px" src="https://cdn6.dissolve.com/p/D1061_185_320/D1061_185_320_1200.jpg">
                </div>
            </div>
            <!-- <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-left.svg') }}" alt="arrow-left">
            <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-right.svg') }}" alt="arrow-right"> 
</div>
</div>
<a class="carousel-control-prev" href="#dacFlashback2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#dacFlashback2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div> -->
@endsection

@section('competition_prizes')
<div data-aos="fade-down" data-aos-duration="1000" class="row-img-prize" align="center" id="competitionPrizes" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Prizes</h1>
    <div class="row justify-content-center" style="padding-top: 20px;"">
        <div class=" col-4">
        <img class="img-fluid" style="width:180px;" src="{{ URL::asset('img/competition/trophy/CTF/2.png') }}">
        <div class="col-8">
            <p class="text-desc">+ Rp2.000.000 Dewacloud Credit for each team member</p>
        </div>
    </div>
    <div class="col-4">
        <img class="img-fluid" style="width:220px;" src="{{ URL::asset('img/competition/trophy/CTF/1.png') }}">
        <div class="col-8">
            <p class="text-desc">+ Rp3.000.000 Dewacloud Credit for each team member</p>
        </div>
    </div>
    <div class="col-4">
        <img class="img-fluid" style="width:180px;" src="{{ URL::asset('img/competition/trophy/CTF/3.png') }}">
        <div class="col-8">
            <p class="text-desc">Rp1.000.000 Dewacloud Credit for each team member</p>
        </div>
    </div>
</div>
<div class="row justify-content-center" style="padding-top:30px">
    <div class="col-7">
        <p class="text-desc">
            • All participants will get an E-Certificate
            <br>• Participants who are in top 5 rankings will get a Free Pass for the 2022 National Seminar
        </p>
    </div>
</div>
</div>
@endsection

@section('competition_timeline')
<section class="ps-timeline-sec">
    <div class="container">
        <ol class="ps-timeline">
            <li style="padding-top: 10px;">
                <div class="ps-bot">
                    <p>24 July 2022</p>
                    <p>Open Registration</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px;">
                <div class="ps-bot">
                    <p>20 August 2022</p>
                    <p>Close Registration</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px;">
                <div class="ps-bot">
                    <p>10 September 2022</p>
                    <p>Online Competition</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px;">
                <div class="ps-bot">
                    <p>17 September 2022</p>
                    <p>Winner Announcement </p>
                </div>
                <span class="ps-sp"></span>
            </li>
        </ol>
    </div>
</section>
@endsection

@section('competition_button')
<div class="row-cp">
    <div class="col-btn-left pad-regist" style="padding-top: 30px;">
        <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg">
            <a class="ifest-btn-primary-dark-bg-text" target="_blank" href="https://drive.google.com/file/d/1IaLLqAbb3zgewSplyaNvYGekBAnZZ7F7/view?usp=sharing">Guidebook</a>
        </button>
    </div>
    <?php
    // SET TANGGAL REGIST LOMBA
    $comp_regist_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
    $comp_regist_end = Carbon::create(2022, 8, 20, 23, 59, 59, 'Asia/Jakarta');
    $now = Carbon::now('Asia/Jakarta');

    $comp_regist_start->toDateTimeString();
    $comp_regist_end->toDateTimeString();
    $now->toDateTimeString();

    if ($now->greaterThan($comp_regist_start) && $now->lessThan($comp_regist_end)) { ?>
        <div class="col-btn-right pad-regist">
            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg">
                @guest
                @if(Route::has('login'))
                <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
                @endif
                @else
                <a class="ifest-btn-primary-dark-bg-text" href="{{route('ctf.registration.view')}}">Register Now</a>
                @endguest
            </button>
        </div>
    <?php } elseif ($now->lessThan($comp_regist_start) || $now->greaterThan($comp_regist_end)) { ?>
        <div class="col-btn-right pad-regist">
            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" disabled>
                @guest
                @if(Route::has('login'))
                <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
                @endif
                @else
                <a class="ifest-btn-primary-dark-bg-text" href="{{route('ctf.registration.view')}}">Register Now</a>
                @endguest
            </button>
        </div>
    <?php } ?>
</div>
@endsection

@section('competition_faq')
<div class="row text-left margin-l-r" style="padding-top: 30px;">
    <div class="card-faq">
        <details>
            <summary class="card-faq-q-text">What type of ID Card is used for the CTF 2022 registration ?</summary>
            <p class="card-faq-a-text">Identity card in the form of an active student card uploaded by the team leader on the website.</p>
        </details>
    </div>
    <div class="card-faq text-left">
        <details>
            <summary class="card-faq-q-text">Does each participant have to fill in personal data on the website separately ?</summary>
            <p class="card-faq-a-text">No, filling in and uploading the member data of each team is only done by the team leader.</p>
        </details>
    </div>
    <div class="card-faq text-left">
        <details>
            <summary class="card-faq-q-text">Is it allowed to have members from other institutions ?</summary>
            <p class="card-faq-a-text">It is allowed as long as it still meets the participant requirements.</p>
        </details>
    </div>
    <div class="card-faq text-left">
        <details>
            <summary class="card-faq-q-text">Will the participant's write-up be published ?</summary>
            <p class="card-faq-a-text">The committee will not issue a participant's write-up in any form.</p>
        </details>
    </div>
    <div class="card-faq text-left">
        <details>
            <summary class="card-faq-q-text">Is the use of automated brute force tools allowed ?</summary>
            <p class="card-faq-a-text">Not allowed. If detected, the team will be disqualified.</p>
        </details>
    </div>
    <div class="card-faq text-left">
        <details>
            <summary class="card-faq-q-text">What categories of CTF questions will be contested ?</summary>
            <p class="card-faq-a-text">The categories that will be contested are Web Hacking, Binary Exploitation, Reverse Engineering, Cryptography, Digital Forensic, and Misc.</p>
        </details>
    </div>
</div>
@endsection

@section('cp1_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="Whatsapp">
@endsection
@section('cp1_contact', 'https://wa.me/6285793831376')
@section('cp1_name', 'Rihlan Lumenda Suherman')

@section('cp2_media')
<img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
@endsection
@section('cp2_contact', 'https://line.me/ti/p/~Lanrihlan24')
@section('cp2_name', 'Rihlan Lumenda Suherman')

@section('add_cp3_cp4')
<div class="row align-items-center">
    <div class="col" style="padding-top: 30px;">
        <button id="btn-cp3" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content;padding:10px 20px 10px 20px" onclick="window.location.href='https://wa.me/6285252709071';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="Whatsapp">
            <span style="margin-left:10px">M. Attila An Naufal</span>
        </button>
    </div>
    <div class="col" style="padding-top: 30px;">
        <button id="btn-cp4" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content;padding:10px 20px 10px 20px" onclick="window.location.href='https://line.me/ti/p/~annaufal12';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
            <span style="margin-left:10px">M. Attila An Naufal</span>
        </button>
    </div>
</div>
@endsection