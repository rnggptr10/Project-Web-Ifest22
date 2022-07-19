@extends('profils.ticketDetails')

@section('ticket_details_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('event_webtitle', 'Capture The Flag')

@section('event_type', 'Competition Detail')

@section('event_title', 'Capture The Flag')

@section('event_team_data')
<div class="col-sm-6">
    <div class="card ifest-card-details" style="padding:0;">
        <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Team Data</h2>
        </div>
        <div class="row" align="left" style="padding:20px">
            <div class="col">
                <div class="row" style="padding-bottom:7px;">
                    <h5 class="text-details-card-head">Team Name</h5>
                    <p class="text-details-card-desc">{{ $ctf->team_name }}</p>
                </div>
                <div class="row" style="padding-bottom:7px">
                    <h5 class="text-details-card-head">Team Email</h5>
                    <p class="text-details-card-desc">{{ $ctf->email }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Team Leader Data</h5>
                    <p class="text-details-card-desc">{{ $ctf->team_leader }} - {{ $ctf->team_leader_institute }}</p>
                </div>
                @if ($ctf->team_member_1 !== null)
                    <div class="row">
                        <h5 class="text-details-card-head">Team Member Data</h5>
                        <p class="text-details-card-desc">
                            • {{ $ctf->team_member_1 }} - {{ $ctf->team_member_1_institute }}
                            @if ($ctf->team_member_2 !== null)
                                <br>• {{ $ctf->team_member_2 }} - {{ $ctf->team_member_2_institute }}
                            @else
                            @endif
                        </p>
                    </div>
                @else
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('event_progress')
<div class="col-sm-6">
    <div class="card ifest-card-details" style="padding:0;">
        <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Competition Progress</h2>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Team Registration</h6>
                <!-- BUAT STATUS, CLASS TERGANTUNG STATUS DI DATABASE -->
                <p class="text-tickets-desc">24 July - 20 August 2022<br>Status : 
                <?php
                    // SET WAKTU LIVE
                    $now = Carbon::now('Asia/Jakarta');
                    $now->toDateTimeString();

                    // SET TANGGAL REGISTRASI CTF
                    $ctf_regist_date_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                    $ctf_regist_date_end = Carbon::create(2022, 8, 20, 23, 59, 59, 'Asia/Jakarta');
                    $ctf_regist_date_start->toDateTimeString(); 
                    $ctf_regist_date_end->toDateTimeString(); 

                    // SET TANGGAL COMPETITION
                    $ctf_comp_date_start = Carbon::create(2022, 9, 10, 7, 00, 00, 'Asia/Jakarta');
                    $ctf_comp_date_end = Carbon::create(2022, 9, 10, 19, 00, 00, 'Asia/Jakarta');
                    $ctf_comp_date_start->toDateTimeString(); 
                    $ctf_comp_date_end->toDateTimeString(); 

                    // SET TANGGAL SUBMIT WRITEUP
                    $ctf_writeup_date_start = Carbon::create(2022, 9, 10, 19, 00, 00, 'Asia/Jakarta');
                    $ctf_writeup_date_end = Carbon::create(2022, 9, 11, 12, 00, 00, 'Asia/Jakarta');
                    $ctf_writeup_date_start->toDateTimeString(); 
                    $ctf_writeup_date_end->toDateTimeString(); 

                    if ($now->greaterThan($ctf_regist_date_start) && $now->lessThan($ctf_regist_date_end)) {
                ?> 
                    @if ($ctf->status_pembayaran === '1')
                        <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                    @elseif ($ctf->status_pembayaran === '0')
                        <span class="text-tickets-status status-red">Payment Failed. Please Re-Upload Payment Proof</span>
                    @elseif ($ctf->status_pembayaran === '2')
                        <span class="text-tickets-status status-green">Payment Completed</span>
                    @endif
                    <?php } elseif ($now->lessThan($ctf_regist_date_start) || $now->greaterThan($ctf_regist_date_end)) { ?>
                        @if ($ctf->status_pembayaran === '0')
                            <span class="text-tickets-status status-red">Payment Failed</span>
                        @elseif ($ctf->status_pembayaran === '1')
                            <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                        @elseif ($ctf->status_pembayaran === '2')
                            <span class="text-tickets-status status-green">Payment Completed</span>
                        @endif
                    <?php } ?>
                </p>
            </div>
            <?php if ($now->greaterThan($ctf_regist_date_start) && $now->lessThan($ctf_regist_date_end)) { ?>
                @if ($ctf->status_pembayaran === '0')
                <div class="col-4" align="center" style="padding:0">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('ctf.resubmit.payment.view') }}">Re-Submit?</a>
                    </button>
                </div>
            @elseif ($ctf->status_pembayaran === '1' || $ctf->status_pembayaran === '2')
            @endif
            <?php
            } elseif ($now->lessThan($ctf_regist_date_start) || $now->greaterThan($ctf_regist_date_end)) {
                // BUTTON RE-SUBMIT HILANG (KALAU UDAH LEWAT TANGGAL REGIST)
            } ?>
        </div>
        @if ($ctf->status_pembayaran === '2')
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
                </div>
                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Online Competition</h6>
                    <p class="text-tickets-desc">10 September 2022
                    </p>
                </div>
                <div class="col-4" align="center" style="padding:0">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" <?php 
                        if($now->greaterThan($ctf_comp_date_start) && $now->lessThan($ctf_comp_date_end)) { 
                        } elseif ($now->lessThan($ctf_comp_date_start) || $now->greaterThan($ctf_comp_date_end)){
                            echo('disabled'); 
                        }?>>
                        <a class="ifest-btn-primary-dark-bg-text" href="">Link CTFd</a>
                    </button>
                </div>
            </div>
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
                </div>
                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Writeup Submission</h6>
                    <p class="text-tickets-desc">10 - 11 September 2022<br>Status : 
                        @if ($ctf->writeup_link === null)
                            <span class="text-tickets-status status-red">Unsubmitted</span>
                        @elseif ($ctf->writeup_link !== null)
                            <span class="text-tickets-status status-green">Submitted</span>
                        @endif
                    </p>
                </div>
                <div class="col-4" align="center" style="padding:0">
                    @if ($ctf->writeup_link === null)
                        <?php if($now->lessThan($ctf_writeup_date_start)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('ctf.submitting.writeup') }}">Submit</a>
                            </button>
                        <?php } elseif ($now->greaterThan($ctf_writeup_date_start) && $now->lessThan($ctf_writeup_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('ctf.submitting.writeup') }}">Submit</a>
                            </button>
                        <?php } ?>
                    @elseif ($ctf->writeup_link !== null)
                        <?php if ($now->greaterThan($ctf_writeup_date_start) && $now->lessThan($ctf_writeup_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('ctf.submitting.writeup') }}">Re-Submit?</a>
                            </button>
                        <?php } elseif ($now->greaterThan($ctf_writeup_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ $ctf->writeup_link }}">View</a>
                            </button>
                        <?php } ?>
                    @endif
                </div>
            </div>
            <?php if($now->greaterThan($ctf_writeup_date_end)) { ?>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-4.svg') }}" alt="4">
                    </div>
                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Winner Announcement</h6>
                        <p class="text-tickets-desc">17 September 2022</p>
                    </div>
                </div>
            <?php } elseif($now->lessThan($ctf_writeup_date_end)) {  ?>
            <?php } ?>

        @elseif ($ctf->status_pembayaran === '1')
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                </div>
                <div class="col-8" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                </div>
            </div>

        @elseif ($ctf->status_pembayaran === '0')
        <?php if ($now->greaterThan($ctf_regist_date_start) && $now->lessThan($ctf_regist_date_end)) { ?>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                    </div>
                    <div class="col-8" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                    </div>
                </div>
            <?php } elseif ($now->lessThan($ctf_regist_date_start) || $now->greaterThan($ctf_regist_date_end)) { ?>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/unqualified.svg') }}" alt="unqualified">
                    </div>
                    <div class="col-8" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Registration Failed :( <br>Keep your spirits up!</h6>
                    </div>
                </div>
            <?php
                }
            ?>
        @endif
    </div>
</div>
@endsection