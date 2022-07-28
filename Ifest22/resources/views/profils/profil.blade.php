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
        <div class="row justify-content-between" style="width: 100%; margin-left: 0;">
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
                            <img class="circular--portrait" src="{{asset('img/photo_dummy.png')}}" alt="" style="width:200px; height:200px">
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
                    <div class="row justify-content-center" align="center" style="padding-bottom:15px;">
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
                    @if ($status->startupDay1_status === '1' || $status->startupDay2_status === '1' || $status->semnas_status === '1' || $status->semnas_paper_status === '1' || $status->techno_seminar_status === '1' || $status->techno_ws_status === '1' || $status->intention_status === '1' || $status->da_status === '1' || $status->ctf_status === '1')
                    @if ($status->startupDay1_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Startup Talk Day 1</h6>
                                        <p class="text-tickets-desc">Saturday, 20 Agustus 2022<br>Registration Status :
                                            <span class="text-tickets-status status-green">
                                                Confirmed
                                            </span>
                                        </p>
                                    </div>
                                    <?php
                                    // SET TANGGAL ACARA SUT DAY 1
                                    $sut_1_date_start = Carbon::create(2022, 8, 20, 8, 30, 00, 'Asia/Jakarta');
                                    $sut_1_date_end = Carbon::create(2022, 8, 20, 12, 00, 00, 'Asia/Jakarta');
                                    $now = Carbon::now('Asia/Jakarta');

                                    $sut_1_date_start->toDateTimeString();
                                    $sut_1_date_end->toDateTimeString();
                                    $now->toDateTimeString();

                                    if ($now->greaterThan($sut_1_date_start) && $now->lessThan($sut_1_date_end)) {
                                    ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                            </button>
                                        </div>
                                    <?php
                                    } elseif ($now->lessThan($sut_1_date_start) || $now->greaterThan($sut_1_date_end)) {
                                    ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;" disabled>
                                                <a class="ifest-btn-primary-dark-bg-text" href="#">Link Zoom</a>
                                            </button>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($status->startupDay1_status === '0')
                    @endif
                    @if ($status->startupDay2_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Startup Talk Day 2</h6>
                                        <p class="text-tickets-desc">Sunday, 21 Agustus 2022<br>Registration Status :
                                            <span class="text-tickets-status status-green">
                                                Confirmed
                                            </span>
                                        </p>
                                    </div>
                                    <?php
                                    // SET TANGGAL ACARA SUT DAY 2
                                    $sut_2_date_start = Carbon::create(2022, 8, 21, 8, 30, 00, 'Asia/Jakarta');
                                    $sut_2_date_end = Carbon::create(2022, 8, 21, 12, 00, 00, 'Asia/Jakarta');

                                    $sut_2_date_start->toDateTimeString();
                                    $sut_2_date_end->toDateTimeString();

                                    if ($now->greaterThan($sut_2_date_start) && $now->lessThan($sut_2_date_end)) {
                                    ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                            </button>
                                        </div>
                                    <?php
                                    } elseif ($now->lessThan($sut_2_date_start) || $now->greaterThan($sut_2_date_end)) {
                                    ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;" disabled>
                                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                            </button>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($status->startupDay2_status === '0')
                    @endif


                    @if ($status->semnas_status === '1')
                        @if ($semnas->status_pembayaran === '0')
                            <div class="row" align="center" style="padding:5px 0 5px 0">
                                <div class="col">
                                    <div class="card" style="background-color:#e6eef7;padding:20px">
                                        <div class="row align-items-center">
                                            <div class="col-7" align="left">
                                                <h6 class="text-tickets-head">Seminar Nasional</h6>
                                                <p class="text-tickets-desc">8 - 9 October 2022
                                                <?php
                                                    // SET TANGGAL REGIST SEMNAS
                                                    $semnas_payment_date_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                                                    $semnas_payment_date_end = Carbon::create(2022, 10, 7, 23, 59, 59, 'Asia/Jakarta');

                                                    $semnas_payment_date_start->toDateTimeString();
                                                    $semnas_payment_date_end->toDateTimeString();
                                                ?>
                                                    @if ($semnas->status_pembayaran === '0')
                                                        <?php if ($now->greaterThan($semnas_payment_date_start) && $now->lessThan($semnas_payment_date_end)) { ?>
                                                            <br>Registration Status :
                                                            <span class="text-tickets-status status-red">Payment Failed. Please Re-Upload Payment Proof.</span>
                                                        <?php } elseif ($now->greaterThan($semnas_payment_date_end)) { ?>
                                                            <br>Registration Status :
                                                            <span class="text-tickets-status status-red">Payment Failed</span>
                                                        <?php } ?>
                                                    @elseif ($semnas->status_pembayaran === '1')
                                                        <br>Registration Status :
                                                        <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                                                    @elseif ($semnas->status_pembayaran === '2')
                                                        <br>Registration Status :
                                                        <span class="text-tickets-status status-green">Payment Completed</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <?php if ($now->greaterThan($semnas_payment_date_start) && $now->lessThan($semnas_payment_date_end)) { ?>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.resubmit.payment.view') }}">Re-Upload</a>
                                                    </button>
                                                </div>
                                            <?php } elseif ($now->lessThan($semnas_payment_date_start) || $now->greaterThan($semnas_payment_date_end)) { ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($semnas->status_pembayaran === '1')
                            <div class="row" align="center" style="padding:5px 0 5px 0">
                                <div class="col">
                                    <div class="card" style="background-color:#e6eef7;padding:20px">
                                        <div class="row align-items-center">
                                            <div class="col-7" align="left">
                                                <h6 class="text-tickets-head">Seminar Nasional</h6>
                                                <p class="text-tickets-desc">8 - 9 October 2022<br>Registration Status :
                                                    <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($semnas->status_pembayaran === '2')
                            <div class="row" align="center" style="padding:5px 0 5px 0">
                                <div class="col">
                                    <div class="card" style="background-color:#e6eef7;padding:20px">
                                        <div class="row align-items-center">
                                            <div class="col-7" align="left">
                                                <h6 class="text-tickets-head">Seminar Nasional Day 1</h6>
                                                <p class="text-tickets-desc">Saturday, 8 October 2022<br>Registration Status :
                                                    <span class="text-tickets-status status-green">Confirmed</span>
                                                </p>
                                            </div>
                                            <?php
                                            // SET TANGGAL ACARA SEMNAS DAY 1
                                            $semnas_day1_date_start = Carbon::create(2022, 10, 8, 10, 00, 00, 'Asia/Jakarta');
                                            $semnas_day1_date_end = Carbon::create(2022, 10, 8, 13, 00, 00, 'Asia/Jakarta');

                                            $semnas_day1_date_start->toDateTimeString();
                                            $semnas_day1_date_end->toDateTimeString();

                                            if ($now->greaterThan($semnas_day1_date_start) && $now->lessThan($semnas_day1_date_end)) {
                                            ?>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                                        <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                                    </button>
                                                </div>
                                            <?php
                                            } elseif ($now->lessThan($semnas_day1_date_start) || $now->greaterThan($semnas_day1_date_end)) {
                                            ?>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;" disabled>
                                                        <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                                    </button>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" align="center" style="padding:5px 0 5px 0">
                                <div class="col">
                                    <div class="card" style="background-color:#e6eef7;padding:20px">
                                        <div class="row align-items-center">
                                            <div class="col-7" align="left">
                                                <h6 class="text-tickets-head">Seminar Nasional Day 2</h6>
                                                <p class="text-tickets-desc">Sunday, 9 October 2022<br>Registration Status :
                                                    <span class="text-tickets-status status-green">Confirmed</span>
                                                </p>
                                            </div>
                                            <?php
                                            // SET TANGGAL ACARA SEMNAS DAY 2
                                            $semnas_day2_date_start = Carbon::create(2022, 10, 9, 10, 00, 00, 'Asia/Jakarta');
                                            $semnas_day2_date_end = Carbon::create(2022, 10, 9, 12, 00, 00, 'Asia/Jakarta');

                                            $semnas_day2_date_start->toDateTimeString();
                                            $semnas_day2_date_end->toDateTimeString();

                                            if ($now->greaterThan($semnas_day2_date_start) && $now->lessThan($semnas_day2_date_end)) {
                                            ?>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                                        <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                                    </button>
                                                </div>
                                            <?php
                                            } elseif ($now->lessThan($semnas_day2_date_start) || $now->greaterThan($semnas_day2_date_end)) {
                                            ?>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;" disabled>
                                                        <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                                    </button>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endif
                    @elseif ($status->semnas_status === '0')
                    @endif


                    @if ($status->semnas_paper_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Seminar Nasional - Presenter</h6>
                                        <p class="text-tickets-desc">July - October</p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.ticketDetailsSemnasPresenter') }}">See Details</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($status->semnas_paper_status === '0')
                    @endif
                    @if ($status->techno_seminar_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Technopreneur Seminar Day 1</h6>
                                        <p class="text-tickets-desc">Sunday, 11 September 2022<br>Registration Status :
                                            <span class="text-tickets-status status-green">
                                                Confirmed
                                            </span>
                                        </p>
                                    </div>
                                    <?php
                                    // SET TANGGAL ACARA TECHNO SEMINAR DAY 1
                                    $techno_s_day1_date_start = Carbon::create(2022, 9, 11, 8, 00, 00, 'Asia/Jakarta');
                                    $techno_s_day1_date_end = Carbon::create(2022, 9, 11, 15, 00, 00, 'Asia/Jakarta');

                                    $techno_s_day1_date_start->toDateTimeString();
                                    $techno_s_day1_date_end->toDateTimeString();

                                    if ($now->greaterThan($techno_s_day1_date_start) && $now->lessThan($techno_s_day1_date_end)) {
                                    ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Youtube</a>
                                            </button>
                                        </div>
                                    <?php } elseif ($now->lessThan($techno_s_day1_date_start) || $now->greaterThan($techno_s_day1_date_end)) { ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;" disabled>
                                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Youtube</a>
                                            </button>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Technopreneur Seminar Day 2</h6>
                                        <p class="text-tickets-desc">Sunday, 18 September 2022<br>Registration Status :
                                            <span class="text-tickets-status status-green">
                                                Confirmed
                                            </span>
                                        </p>
                                    </div>
                                    <?php
                                    // SET TANGGAL ACARA TECHNO SEMINAR DAY 2
                                    $techno_s_day2_date_start = Carbon::create(2022, 9, 18, 8, 00, 00, 'Asia/Jakarta');
                                    $techno_s_day2_date_end = Carbon::create(2022, 9, 18, 15, 00, 00, 'Asia/Jakarta');

                                    $techno_s_day2_date_start->toDateTimeString();
                                    $techno_s_day2_date_end->toDateTimeString();

                                    if ($now->greaterThan($techno_s_day2_date_start) && $now->lessThan($techno_s_day2_date_end)) {
                                    ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Youtube</a>
                                            </button>
                                        </div>
                                    <?php } elseif ($now->lessThan($techno_s_day2_date_start) || $now->greaterThan($techno_s_day2_date_end)) { ?>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;" disabled>
                                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Youtube</a>
                                            </button>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($status->techno_seminar_status === '0')
                    @endif
                    @if ($status->techno_ws_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Technopreneur Workshop</h6>
                                        <p class="text-tickets-desc">July - October</p>
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
                    @elseif ($status->techno_ws_status === '0')
                    @endif
                    @if ($status->intention_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Innovative Technology Competition (INTENTION)</h6>
                                        <p class="text-tickets-desc">July - October</p>
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
                    @elseif ($status->intention_status === '0')
                    @endif
                    @if ($status->da_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Data Analysis Competition</h6>
                                        <p class="text-tickets-desc">July - October</p>
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
                    @elseif ($status->da_status === '0')
                    @endif
                    @if ($status->ctf_status === '1')
                    <div class="row" align="center" style="padding:5px 0 5px 0">
                        <div class="col">
                            <div class="card" style="background-color:#e6eef7;padding:20px">
                                <div class="row align-items-center">
                                    <div class="col-7" align="left">
                                        <h6 class="text-tickets-head">Capture The Flag</h6>
                                        <p class="text-tickets-desc">July - September</p>
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
                    @elseif ($status->ctf_status === '0')
                    @endif
                    @else
                    <div class="row" align="center" style="padding:20px 0 5px 0">
                        <p class="no-tickets-text">You don't have any tickets yet</p>
                    </div>
                    @endif
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