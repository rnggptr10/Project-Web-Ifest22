@extends('competition.competition')

@section('competition_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/competitions.css') }}">
@endsection

@section('competition_webtitle', 'INTENTION')

@section('competition_title', 'Innovative Technology Competition (INTENTION)')

@section('competition_theme')
<div style="padding-top: 10px;padding-bottom: 10px;">
    <h2 class="text-theme">"Reigniting and Developing Innovative Ideas to Face Rapidly Changing Technology"</h2>
</div>
@endsection

@section('competition_desc')
Innovative Technology Competition (INTENTION) is a national-scale competition organized by Himatif FMIPA Unpad as part of the Informatics Festival (IFest) 2022. INTENTION is a competition to turn innovative ideas into useful applications or websites.
This competition is held online and is intended for high school / vocational students or active S1/D4/D3 students as evidenced by a student card. Participants in this competition are a team of 3-5 people. In addition, this competition is divided into two rounds, namely the preliminary round and the final round. With this theme, we hope that participants will be able to create applications that can be a trigger to reignite the spirit of innovation which is much needed to face the ever-changing technological trends.

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

@section('first_prize', 'Rp.5.000.000')
@section('second_prize', 'Rp.3.000.000')
@section('third_prize')
<div class="col-2">
    <img style="width:100%;height: 160px;" src="{{ URL::asset('icon/trophy/3.png') }}">
    <p style="color:white; margin:0">3rd Place</p>
    <p style="color:white">Rp. 1.000.000</p>
</div>
@endsection

@section('competition_judges')
<div class="row" data-aos="fade-down" data-aos-duration="1000" align="center" id="dacFlashback1" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Our Judges</h1>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-4" data-aos="fade-right" data-aos-duration="1000" style="padding-right: 50px;">
            <div class="card ifest-photo-card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-7" style="line-height: 5px;">
                        <h5 class="text-photo-card-name">Juri 1</h5>
                        <p class="text-photo-card-position">FullStack</p>
                    </div>
                    <div class="col-3">
                        <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4" data-aos="fade-left" data-aos-duration="1000" style="padding-left: 50px;">
            <div class="card ifest-photo-card" style="border: 0; width:max-content">
                <img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Card image cap">
                <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                    <div class="col-7" style="line-height: 5px;">
                        <h5 class="text-photo-card-name">Juri 2</h5>
                        <p class="text-photo-card-position">FullStack</p>
                    </div>
                    <div class="col-3">
                        <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="dacFlashback2" data-aos="fade-down" data-aos-duration="1000" align="center" id="sutSpeakers" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Our Judges</h1>
    <div id="semnasSpeakers2" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card" style="border: 0;text-align:center; width:350px;">
                            <img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Card image cap">
                            <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                                <div class="col-7" style="line-height: 5px;">
                                    <h5 class="text-photo-card-name">Juri 2</h5>
                                    <p class="text-photo-card-position">FullStack</p>
                                </div>
                                <div class="col-3">
                                    <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card ifest-photo-card" style="border: 0; text-align:center; width:350px;">
                            <img class="card-img-top" style="width:100%;height:350px;" src="https://archpainting.com/wp-content/uploads/2017/02/empty-profile-pic.jpg" alt="Card image cap">
                            <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
                                <div class="col-7" style="line-height: 5px;">
                                    <h5 class="text-photo-card-name">Juri 2</h5>
                                    <p class="text-photo-card-position">FullStack</p>
                                </div>
                                <div class="col-3">
                                    <img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin">
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
            <a class="carousel-control-prev" href="#semnasSpeakers2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sutSpeakers2Day2" role="button" data-slide="next">
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
<div class="col" data-aos="fade-right" data-aos-duration="1000" style="text-align: right;">
    <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;">Guidebook</button>
</div>
<div class="col" data-aos="fade-left" data-aos-duration="1000" style="text-align: left;">
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
@endsection

@section('competition_faq')
<div class="row" style="padding-top: 30px;">
    <div class="card-faq text-left">
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
