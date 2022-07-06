<!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>IFest 2022 - Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
</head>

@extends('layouts.app')

@section('content')
<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 0; padding-bottom:50px; padding-top:80px;">
        <div class="row justify-content-between">
            <div class="col-sm-6">
                <div class="card" style="padding:20px; background-color:#2D2D2D">
                    <div class="row" align="center" style="padding-bottom:15px;">
                        <h2 class="text-card-title">Your Profile</h2>
                    </div>
                    <div class="row" align="center" style="padding-top:15px;padding-bottom:15px;">
                        <div id="profileImage">
                            @if($data['image'])
                            <img class="circular--portrait" src="{{asset('storage/' . $data['image'])}}" alt="" style="width:200px; height:200px">
                            @else
                            @endif
                        </div>
                    </div>
                    <div class="row" align="left" style="padding:15px">
                        <div class="col">
                            <div class="row" style="padding-bottom:7px;">
                                <h5 class="text-profile-head">Name</h5>
                                <p class="text-profile-data">{{ $data->name }}</p>
                            </div>
                            <div class="row" style="padding-bottom:7px">
                                <h5 class="text-profile-head">Email</h5>
                                <p class="text-profile-data">{{ $data->email }}</p>
                            </div>
                            <div class="row">
                                <h5 class="text-profile-head">Institute</h5>
                                <p class="text-profile-data">{{ $data->institute }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" align="center"style="padding-bottom:15px;">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.edit') }}">Edit Profile</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="padding:20px; background-color:#2D2D2D">
                    <div class="row" align="center">
                        <h2 class="text-card-title">Your Tickets</h2>
                    </div>
                    <!-- NANTI INI PAKE LOOPING TERGANTUNG TIKET DI USER -->
                    <!-- DATANYA JG BEDA TIAP TIKET, DI SET DI SETIAP IF ELSE -->
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Startup Talk</h6>
                                        <p class="text-tickets-desc">20-21 Agustus 2022<br>Registration Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Seminar Nasional - Non Pemakalah</h6>
                                        <p class="text-tickets-desc">20-21 Agustus 2022<br>Registration Status : <span class="text-tickets-status status-orange">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Seminar Nasional - Pemakalah</h6>
                                        <p class="text-tickets-desc">Juli - Oktober<br>Registration Status : <span class="text-tickets-status status-green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">See Details</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Technopreneur Seminar</h6>
                                        <p class="text-tickets-desc">11, 18 September 2022<br>Registration Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Innovative Technology Competition (INTENTION)</h6>
                                        <p class="text-tickets-desc">Juli - Oktober<br>Registration Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.ticketDetailsIntention') }}">See Details</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Data Analysis Competition</h6>
                                        <p class="text-tickets-desc">Juli - Oktober<br>Registration Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.ticketDetailsDac') }}">See Details</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Capture The Flag</h6>
                                        <p class="text-tickets-desc">Juli - September<br>Registration Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.ticketDetailsCtf') }}">See Details</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Technopreneur Workshop</h6>
                                        <p class="text-tickets-desc">Juli - Oktober<br>Registration Status : <span class="text-tickets-status" style="color:green">{{ $data->institute }}</span></p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.ticketDetailsTechnoWorkshop') }}">See Details</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row justify-content-center" align="center">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.edit') }}">Edit Profile</a>
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
@endsection