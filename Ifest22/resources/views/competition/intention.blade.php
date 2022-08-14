@extends('competition.competition')

@section('competition_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/competitions.css') }}">
@endsection

@section('competition_webtitle', 'INTENTION')

@section('competition_title')
<div class="col-3" align="center">
    <img class="img-fluid" style="width:200px;" src="{{ URL::asset('img/competition/logo/int.png') }}">
</div>
<div class="col-8">
    <p class="title-competition" style="margin:0; margin-top:10px">Innovative Technology Competition (INTENTION)</p>
</div>
@endsection

@section('competition_theme')
<div style="padding-top: 10px;padding-bottom: 10px;">
    <h2 class="text-theme" style="margin:0">"Reigniting and Developing Innovative Ideas to Face Rapidly Changing Technology"</h2>
</div>
@endsection

@section('competition_desc')
Innovative Technology Competition (INTENTION) is a national-scale competition organized by Himatif FMIPA Unpad as part of the Informatics Festival (IFest) 2022. INTENTION is a competition to turn innovative ideas into useful applications or websites.
This competition is held online and is intended for high school / vocational students or active S1/D4/D3 students as evidenced by a student card. Participants in this competition are a team of 3-5 people. In addition, this competition is divided into two rounds, namely the preliminary round and the final round. With this theme, we hope that participants will be able to create applications that can be a trigger to reignite the spirit of innovation which is much needed to face the ever-changing technological trends.
@endsection

@section('competition_collab')
<div data-aos="fade-down" data-aos-duration="1000" class="row-img-prize justify-content-center" align="center" id="competitionPrizes" style="padding-bottom: 50px;">
    <h1 class="text-sub-title" style="font-size:24px">In Collaboration With</h1>
    <a href="https://coding.id" target="_blank">
        <img class="img-fluid" style="width:180px;" src="{{ URL::asset('img/logo/sponsor/coding-01.png') }}">
    </a>
</div>
@endsection

@section('competition_flashback')
<div class="row align-items-center carousel slide" align="center" id="dacFlashback1" data-ride="carousel" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <div class="col-4" align="center" style="padding-right: 25px;">
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int1.jpg') }}" alt="flashback">
                </div>
                <div class="col-4" align="center" style="padding-left: 25px;">
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int2.png') }}" alt="flashback">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-4" align="center" style="padding-right: 25px;">
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int3.png') }}" alt="flashback">
                </div>
                <div class="col-4" align="center" style="padding-left: 25px;">
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int4.png') }}" alt="flashback">
                </div>
            </div>
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
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int1.jpg') }}" alt="flashback">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col">
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int2.png') }}" alt="flashback">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col">
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int3.png') }}" alt="flashback">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col">
                    <img class="photo-flashback" src="{{ URL::asset('img/competition/flashback/int4.png') }}" alt="flashback">
                </div>
            </div>
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

@section('competition_prizes')
<div data-aos="fade-down" data-aos-duration="1000" class="row-img-prize" align="center" id="competitionPrizes" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Prizes</h1>
    <div class="row justify-content-center" style="padding-top: 20px;"">
        <div class=" col-4">
        <img class="img-fluid" style="width:180px;" src="{{ URL::asset('img/competition/trophy/INTENTION/2.png') }}">
        <div class="col-8">
            <p class="text-desc">+ Rp2.000.000 Dewacloud Credit for each team member</p>
        </div>
    </div>
    <div class="col-4">
        <img class="img-fluid" style="width:220px;" src="{{ URL::asset('img/competition/trophy/INTENTION/1.png') }}">
        <div class="col-8">
            <p class="text-desc">+ Rp3.000.000 Dewacloud Credit for each team member</p>
        </div>
    </div>
    <div class="col-4">
        <img class="img-fluid" style="width:180px;" src="{{ URL::asset('img/competition/trophy/INTENTION/3.png') }}">
        <div class="col-8">
            <p class="text-desc">+ Rp1.000.000 Dewacloud Credit for each team member</p>
        </div>
    </div>
</div>
<div class="row justify-content-center" style="padding-top:30px">
    <div class="col-6">
        <p class="text-desc">
            • All participants will get an E-Certificate
            <br>• Participants who pass the preliminary round will get a Free Pass for the 2022 National Seminar
        </p>
    </div>
</div>
</div>
@endsection

@section('competition_judges')
<div class="row" data-aos="fade-down" data-aos-duration="1000" align="center" id="dacFlashback1" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Our Judges</h1>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-4" data-aos="fade-right" data-aos-duration="1000" style="padding-right: 50px;">
            <div class="card ifest-photo-card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="{{ asset('img/event/intention/juri_2.png') }}" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-10" style="line-height: 5px;">
                        <h5 class="text-photo-card-name">Diki Muhamad Syidik</h5>
                        <!-- <h5 class="text-photo-card-name">Juri 1</h5> -->
                        <p class="text-photo-card-position">Software Developer at Nawa Data Solutions</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4" data-aos="fade-left" data-aos-duration="1000" style="padding-left: 50px;">
            <div class="card ifest-photo-card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="{{ asset('img/event/intention/juri_1.png') }}" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-10" style="line-height: 5px;">
                        <h5 class="text-photo-card-name" style="margin-top:12px">Muhamad Nizham</h5>
                        <!-- <h5 class="text-photo-card-name">Juri 2</h5> -->
                        <p class="text-photo-card-position" style="margin-bottom:12px">Coach at Coding.id</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="dacFlashback2" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Our Judges</h1>
    <div id="intJudge" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card" style="border: 0;text-align:center;">
                            <img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/intention/juri_2.png') }}" alt="Card image cap">
                            <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                                <div class="col" style="line-height: 5px;">
                                    <h5 class="text-photo-card-name">Diki Muhamad Syidik</h5>
                                    <!-- <h5 class="text-photo-card-name">Juri 1</h5> -->
                                    <p class="text-photo-card-position">Software Developer at <br> Nawa Data Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="size-img-speakers card ifest-photo-card" style="border: 0; text-align:center;">
                            <img class="card-img-top size-img-top-speakers" src="{{ asset('img/event/intention/juri_1.png') }}" alt="Card image cap">
                            <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                                <div class="col" style="line-height: 5px;">
                                    <h5 class="text-photo-card-name" style="margin-top:12px">Muhamad Nizham</h5>
                                    <!-- <h5 class="text-photo-card-name">Juri 2</h5> -->
                                    <p class="text-photo-card-position" style="margin-bottom:12px">Coach at Coding.id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#intJudge" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#intJudge" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('competition_timeline')
<section class="ps-timeline-sec">
    <div class="container">
        <ol class="ps-timeline">
            <li style="padding-top:10px; width:16%;">
                <div class="ps-bot">
                    <p style="font-size:12px;">24 July - 20 August 2022</p>
                    <p style="font-size:14px;">Registration</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px; width:16%;">
                <div class="ps-bot">
                    <p style="font-size:12px;">27 August - 5 September 2022</p>
                    <p style="font-size:14px;">Proposal and Video Submission</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px; width:16%;">
                <div class="ps-bot">
                    <p style="font-size:12px;">9 September 2022</p>
                    <p style="font-size:14px;">Finalist Announcement</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px; width:16%;">
                <div class="ps-bot">
                    <p style="font-size:12px;">10 September - 18 October 2022</p>
                    <p style="font-size:14px;">Final Product Submission</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px; width:16%;">
                <div class="ps-bot">
                    <p style="font-size:12px;">22 October 2022</p>
                    <p style="font-size:14px;">Final Product Presentation</p>
                </div>
                <span class="ps-sp"></span>
            </li>
            <li style="padding-top:10px; width:16%;">
                <div class="ps-bot">
                    <p style="font-size:12px;">30 October 2022</p>
                    <p style="font-size:14px;">Winner Announcement</p>
                </div>
                <span class="ps-sp"></span>
            </li>
        </ol>
    </div>
</section>
@endsection

@section('competition_button')
<div class="row-cp">
    <div class="col-btn-left pad-regist" style="padding-top: 30px;" data-aos="fade-right" data-aos-duration="1000">
        <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;">
            <a class="ifest-btn-primary-dark-bg-text" target="_blank" href="https://drive.google.com/file/d/1nEXAGMxijc5rVU9mip-Pd4Q16c5hnF0v/view?usp=sharing">Guidebook</a>
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
        <div class="col-btn-right pad-regist" data-aos="fade-left" data-aos-duration="1000">
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
    <?php } elseif ($now->lessThan($comp_regist_start) || $now->greaterThan($comp_regist_end)) { ?>
        <div class="col-btn-right pad-regist" data-aos="fade-left" data-aos-duration="1000">
            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;" disabled>
                @guest
                @if(Route::has('login'))
                <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
                @endif
                @else
                <a class="ifest-btn-primary-dark-bg-text" href="{{route('intention.registration.view')}}">Register Now</a>
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
            <summary class="card-faq-q-text">What type of ID Card is used for the INTENTION 2022 registration ?</summary>
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
            <summary class="card-faq-q-text">Is there a specific theme for the development of the project ?</summary>
            <p class="card-faq-a-text">There is no specific theme. The things that are prioritized are uniqueness and strength of the innovation that is implemented in the development of the project.</p>
        </details>
    </div>
    <div class="card-faq text-left">
        <details>
            <summary class="card-faq-q-text">What programming languages and frameworks are allowed in INTENTION ?</summary>
            <p class="card-faq-a-text">Any programming language and framework is allowed as long as it does not violate the terms and conditions of the competition.</p>
        </details>
    </div>
    <div class="card-faq text-left">
        <details>
            <summary class="card-faq-q-text">Does the cover need to be included in the submission video ?</summary>
            <p class="card-faq-a-text">Yes. The cover is uploaded as the first page of the instagram post and also inserted into the front of the INTENTION submission video.</p>
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
        <button id="btn-cp3" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content; padding:10px 20px 10px 20px" onclick="window.location.href='https://wa.me/6282178237082';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="Whatsapp">
            <span style="margin-left:10px">Hudzaifah Al Mutaz Billah</span>
        </button>
    </div>
    <div class="col" style="padding-top: 30px;">
        <button id="btn-cp4" type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: fit-content; padding:10px 20px 10px 20px" onclick="window.location.href='https://line.me/ti/p/~saudaramutaz';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/line.svg') }}" alt="Line">
            <span style="margin-left:10px">Hudzaifah Al Mutaz Billah</span>
        </button>
    </div>
</div>
@endsection