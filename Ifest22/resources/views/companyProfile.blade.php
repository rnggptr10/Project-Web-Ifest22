<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - Company Profile</title>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/comprof.css') }}">


@extends('layouts.app')

@section('content')

<body style="background-color: #1c1c1c;">
    <!-- Deskripsi IFEST 2022 -->
    <div class="container" style="padding: 100px 0 50px 0;">
        <div class="row justify-content-center" style="padding: 5%">
            <img src="{{asset('img/company_profile.png')}}">
            <div style="padding: 10px 50px 0 50px; font-size: 16px; text-align:center;">
                <p class="text-desc">
                    IFest is an annual event held by Unpad informatics engineering students that have been running for eight years to increase the knowledge and abilities of the society towards the development of IT, which is considered to be highly competitive and valuable in this digital era.
                    This year, we bring the theme “enhancing awareness of the digital transformation.”
                    We believe IFest can contribute to spreading the awareness of digitalization to our community by developing their understanding of digital technology.
                </p>
            </div>
            {{-- <div class="col-sm-5" style="padding: 20px 0 20px 0; text-align:center;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAGFBMVEXBw8Ta183y8e74+Pm9v8Dp5+H///+5u7zLiu2GAAABH0lEQVR4nO3PCQ2EABAAMX78Oz4IORGzaR10Wadb1nOb7HyG27XPdW3vcL+Pqe79Gx7LVIdhnmGfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYZ9hn2GfYd9/eB9T3d/w2ue63uG5TXY+w+l+h1EihcbqknUAAAAASUVORK5CYII=" style="width: 70%;">
            </div>
            <div class="col-sm-7" style="padding: 20px 0 20px 0;">
                <div class="row" align="center" id="eventDescription" style="padding-bottom: 30px;">
                    <div style="padding: 10px 50px 0 50px; text-align:left;">
                        <h1 class="text-title" style="margin: 0 0 0 0;">iPod</h1>
                        <p class="text-desc" style="margin: 0 0 0 0; font-size: 20px;">Informatics Festival<br>Podcast</p>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>

    <!-- Video -->
    <!-- Core Value -->
    <div class="container" style="padding: 30px 0 50px 0;">
        <h1 style="display: flex; row justify-content-center;">Our Core Values</h1>
        <div class="container">
            <div class="box">
              <div class="boxContent">
                <img class="fa icon image" src="{{ asset('img/coreValue/relation new.png') }}">
                <h1 class="title">Relation</h1>
                <p class="desc">We build valuable relationships with numerous Indonesian IT companies and all the participants to support the event.</p>
              </div>
            </div>
            <div class="box">
              <div class="boxContent">
                <img class="fa icon image" src="{{ asset('img/coreValue/quality new.png') }}">
                <h1 class="title">Quality</h1>
                <p class="desc">We provide quality by giving our best effort to the event by incorporating students' creativity to build a valuable event.</p>
              </div>
            </div>
            <div class="box">
              <div class="boxContent">
                <img class="fa icon image" src="{{ asset('img/coreValue/continuos_improvement new.png') }}">
                <h1 class="title">Continuos Improvement</h1>
                <p class="desc">We balance quality with continuous improvement to provide an event that satisfies all parties who have contributed to the event.</p>
              </div>
            </div>
          </div>
        {{-- <div style=" display: flex; justify-content:space-around;">
            <div class="person">
                <div class="cont">
                    <div class="cont-inner">
                        <img class="circle" src="{{ asset('img/coreValue/relation2.png') }}" />
                    </div>
                </div>
                <div class="cont-desc">
                    <div class="divider"></div>
                    <div class="name">Relation</div>
                    <div class="title">We build valuable relationships with numerous Indonesian IT companies and all the participants to support the event.</div>
                </div>
            </div>
            <div class="person">
                <div class="cont">
                    <div class="cont-inner">
                        <img class="circle" src="{{ asset('img/coreValue/quality2.png') }}" />
                    </div>
                </div>
                <div class="divider"></div>
                <div class="name">Quality</div>
                <div class="title">We provide quality by giving our best effort to the event by incorporating students' creativity to build a valuable event.</div>
            </div>
            <div class="person">
                <div class="cont">
                    <div class="cont-inner">
                        <img class="circle" src="{{ asset('img/coreValue/continuos improvement2.png') }}" />
                    </div>
                </div>
                <div class="divider"></div>
                <div class="name">Continues Improvement</div>
                <div class="title">We balance quality with continuous improvement to provide an event that satisfies all parties who have contributed to the event.</div>
            </div>
        </div> --}}
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
@endsection