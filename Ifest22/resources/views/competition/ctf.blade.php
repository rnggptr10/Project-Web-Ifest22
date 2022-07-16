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

@section('competition_desc')
Capture The Flag (CTF) is a national-scale competition organized by Himatif FMIPA Unpad as part of the Informatics Festival (IFest) 2022. Capture The Flag is a competition in the field of network security that requires each participant to think creatively in search of certain strings called flags.
This competition is held online and is intended for high school / vocational students or active S1/D4/D3 students as evidenced by a student card. This competition uses the jeopardy concept which will test participants' abilities in the fields of Web Hacking, Binary Exploitation, Reverse Engineering, Digital Forensic, Cryptography, and Misc and will be contested by the entire team consisting of 1-3 people.
@endsection

@section('competition_flashback')
<div class="row align-items-center carousel slide" align="center" id="dacFlashback1" data-ride="carousel" style="padding-top: 30px;padding-bottom: 30px;">
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
            <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-right.svg') }}" alt="arrow-right"> -->
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
</div>

<div class="row align-items-center carousel slide" align="center" id="dacFlashback2" data-ride="carousel" style="padding-top: 30px;padding-bottom: 30px;">
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
            <img class="arrow-switch" src="{{ URL::asset('icon/circle-arrow-right.svg') }}" alt="arrow-right"> -->
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
</div>
@endsection

@section('first_prize', 'Rp 2.000.000')
@section('second_prize', 'Rp 1.000.000')

@section('competition_timeline')
<section class="ps-timeline-sec">
    <div class="container">
        <ol class="ps-timeline">
            <li>
                <div class="ps-bot">
                    <p>Timeline 1</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li>
                <div class="ps-bot">
                    <p>Timeline 2</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li>
                <div class="ps-bot">
                    <p>Timeline 3</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li>
                <div class="ps-bot">
                    <p>Timeline 4</p>
                </div>
                <span class="ps-sp"></span>
            </li>
        </ol>
    </div>
</section>
@endsection

@section('competition_button')
<div class="row-cp" style="margin-left: 0; margin-right:0;">
    <div class="col-btn-left">
        <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg">
            <a class="ifest-btn-primary-dark-bg-text" href="">Guidebook</a>
        </button>
    </div>
    <div class="col-btn-right">
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
</div>
@endsection

@section('competition_faq')
<div class="row-box-question-faq" style="padding-top: 30px;">
    <div class="card-faq text-left">
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