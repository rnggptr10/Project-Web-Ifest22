@extends('profils.ticketDetails')

@section('ticket_details_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('event_webtitle', 'Technopreneur Workshop')

@section('event_type', 'Workshop Detail')

@section('event_title', 'Technopreneur Workshop')

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
                    <p class="text-details-card-desc">{{ $techno_ws->team_name }}</p>
                </div>
                <div class="row" style="padding-bottom:7px">
                    <h5 class="text-details-card-head">Team Email</h5>
                    <p class="text-details-card-desc">{{ $techno_ws->email }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Team Leader Data</h5>
                    <p class="text-details-card-desc">{{ $techno_ws->team_leader }} - {{ $techno_ws->team_leader_institute }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Team Member Data</h5>
                    <p class="text-details-card-desc">
                        • {{ $techno_ws->team_member_1 }} - {{ $techno_ws->team_member_1_institute }}
                        @if ($techno_ws->team_member_2 !== null)
                            <br>• {{ $techno_ws->team_member_2 }} - {{ $techno_ws->team_member_2_institute }}
                        @else
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('event_progress')
<div class="col-sm-6">
    <div class="card ifest-card-details" style="padding:0;">
        <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Workshop Progress</h2>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Team Registration</h6>
                <!-- BUAT STATUS, CLASS TERGANTUNG STATUS DI DATABASE -->
                <p class="text-tickets-desc">24 July - 31 August 2022<br>Status : 
                    <span class="text-tickets-status status-green">
                        Confirmed
                    </span>
                </p>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Business Idea and Workshop Document Submission</h6>
                <p class="text-tickets-desc">24 July - 31 August 2022<br>Status :
                <?php
                    // SET WAKTU LIVE
                    $now = Carbon::now('Asia/Jakarta');
                    $now->toDateTimeString();

                    // SET TANGGAL UPLOAD PROPOSAL
                    $techno_ws_proposal_date_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                    $techno_ws_proposal_date_end = Carbon::create(2022, 8, 31, 23, 59, 59, 'Asia/Jakarta');
                    $techno_ws_proposal_date_start->toDateTimeString(); 
                    $techno_ws_proposal_date_end->toDateTimeString(); 

                    // SET TANGGAL PENGUMUMAN SELECTED TEAM
                    $techno_ws_announce_date_start = Carbon::create(2022, 8, 31, 00, 00, 01, 'Asia/Jakarta');
                    $techno_ws_announce_date_start->toDateTimeString(); 

                    // SET TANGGAL SUBMIT PAYMENT
                    $techno_ws_payment_date_start = Carbon::create(2022, 8, 31, 00, 00, 01, 'Asia/Jakarta');
                    $techno_ws_payment_date_end = Carbon::create(2022, 9, 7, 23, 59, 59, 'Asia/Jakarta');
                    $techno_ws_payment_date_start->toDateTimeString(); 
                    $techno_ws_payment_date_end->toDateTimeString(); 

                    // SET TANGGAL SEMINAR 1
                    $techno_ws_seminar_1_date_start = Carbon::create(2022, 9, 11, 8, 00, 00, 'Asia/Jakarta');
                    $techno_ws_seminar_1_date_end = Carbon::create(2022, 9, 11, 15, 00, 00, 'Asia/Jakarta');
                    $techno_ws_seminar_1_date_start->toDateTimeString(); 
                    $techno_ws_seminar_1_date_end->toDateTimeString(); 

                    // SET TANGGAL SEMINAR 2
                    $techno_ws_seminar_2_date_start = Carbon::create(2022, 9, 18, 8, 00, 00, 'Asia/Jakarta');
                    $techno_ws_seminar_2_date_end = Carbon::create(2022, 9, 18, 15, 00, 00, 'Asia/Jakarta');
                    $techno_ws_seminar_2_date_start->toDateTimeString(); 
                    $techno_ws_seminar_2_date_end->toDateTimeString();
                    
                    // SET TANGGAL SUBMIT PITCHDECK 1
                    $techno_ws_pitchdeck_1_date_start = Carbon::create(2022, 9, 18, 15, 00, 00, 'Asia/Jakarta');
                    $techno_ws_pitchdeck_1_date_end = Carbon::create(2022, 10, 2, 23, 59, 59, 'Asia/Jakarta');
                    $techno_ws_pitchdeck_1_date_start->toDateTimeString(); 
                    $techno_ws_pitchdeck_1_date_end->toDateTimeString();
                    
                    // SET TANGGAL REVISI
                    $techno_ws_revisi_date_start = Carbon::create(2022, 10, 3, 00, 00, 01, 'Asia/Jakarta');
                    $techno_ws_revisi_date_end = Carbon::create(2022, 10, 9, 23, 59, 59, 'Asia/Jakarta');
                    $techno_ws_revisi_date_start->toDateTimeString(); 
                    $techno_ws_revisi_date_end->toDateTimeString(); 

                    // SET TANGGAL SUBMIT PITCHDECK 2
                    $techno_ws_pitchdeck_2_date_start = Carbon::create(2022, 10, 10, 00, 00, 01, 'Asia/Jakarta');
                    $techno_ws_pitchdeck_2_date_end = Carbon::create(2022, 10, 16, 23, 59, 59, 'Asia/Jakarta');
                    $techno_ws_pitchdeck_2_date_start->toDateTimeString(); 
                    $techno_ws_pitchdeck_2_date_end->toDateTimeString(); 

                    if ($now->greaterThan($techno_ws_proposal_date_start) && $now->lessThan($techno_ws_proposal_date_end)) {
                ?> 
                    @if ($techno_ws->proposal_link === null)
                        <span class="text-tickets-status status-red">Unsubmitted</span>
                    @elseif ($techno_ws->proposal_link !== null)
                        @if ($techno_ws->selected_team === '1')
                            <span class="text-tickets-status status-orange">Submitted.Waiting for Selection</span>
                        @elseif ($techno_ws->selected_team === '0')
                            <?php if ($now->greaterThan($techno_ws_announce_date_start)) { ?>
                                <span class="text-tickets-status status-red">Proposal Declined</span>
                            <?php } elseif ($now->lessThan($techno_ws_announce_date_start)) { ?>
                                <span class="text-tickets-status status-orange">Submitted. Waiting for Selection.</span>
                            <?php } ?>
                        @elseif ($techno_ws->selected_team === '2')
                            <?php if ($now->greaterThan($techno_ws_announce_date_start)) { ?>
                                <span class="text-tickets-status status-green">Proposal Selected!</span>
                            <?php } elseif ($now->lessThan($techno_ws_announce_date_start)) { ?>
                                <span class="text-tickets-status status-orange">Submitted. Waiting for Selection.</span>
                            <?php } ?>
                        @endif
                    @endif
                    <?php
                    } elseif ($now->lessThan($techno_ws_proposal_date_start) || $now->greaterThan($techno_ws_proposal_date_end)) { 
                    ?>
                        @if ($techno_ws->proposal_link === null)
                            <span class="text-tickets-status status-red">Unsubmitted</span>
                        @elseif ($techno_ws->proposal_link !== null)
                            @if ($techno_ws->selected_team === '0')
                                <span class="text-tickets-status status-green">Submitted</span>
                            @elseif ($techno_ws->selected_team === '1')
                                <span class="text-tickets-status status-green">Submitted</span>
                            @elseif ($techno_ws->selected_team === '2')
                                <span class="text-tickets-status status-green">Proposal Selected!</span>
                            @endif
                        @endif
                    <?php
                        }
                    ?>
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
            @if ($techno_ws->selected_team === '1')
                @if ($techno_ws->proposal_link === null)
                    <?php if ($now->lessThan($techno_ws_proposal_date_start)) { ?>
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.proposal.view') }}">Submit</a>
                        </button>
                    <?php
                    } elseif ($now->greaterThan($techno_ws_proposal_date_start) && $now->lessThan($techno_ws_proposal_date_end)) { 
                    ?>
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.proposal.view') }}">Submit</a>
                        </button>
                    <?php } elseif($now->greaterThan($techno_ws_proposal_date_end)) {?>
                    <?php } ?>
                @elseif ($techno_ws->proposal_link !== null)
                    <?php if ($now->greaterThan($techno_ws_announce_date_start) && $now->lessThan($techno_ws_proposal_date_end)) { ?>
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.proposal.view') }}">Re-Submit?</a>
                        </button>
                    <?php } elseif ($now->greaterThan($techno_ws_proposal_date_end)) { ?>
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                            <a class="ifest-btn-primary-dark-bg-text" href="{{ $techno_ws->proposal_link }}">View</a>
                        </button>
                    <?php } ?>
                @endif
            @elseif ($techno_ws->selected_team === '2')
                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                    <a class="ifest-btn-primary-dark-bg-text" href="{{ $techno_ws->proposal_link }}">View</a>
                </button>
            @endif
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Selected Team Announcement</h6>
                <p class="text-tickets-desc">31 August 2022
                    <?php if ($now->greaterThan($techno_ws_announce_date_start)) { ?>     
                    @if ($techno_ws->selected_team === '0')
                        <br>Status : 
                        <span class="text-tickets-status status-red">Your team didn't qualify for the Next Round. Keep your spirits up!</span>
                    @elseif ($techno_ws->selected_team === '2')
                        <br>Status : 
                        <span class="text-tickets-status status-green">Congratulations! Your team advances to the Next Round</span>
                    @elseif ($techno_ws->selected_team === '1')
                    @endif
                <?php
                } elseif ($now->lessThan($techno_ws_proposal_date_start)) { }
                ?>
                </p>
            </div>
        </div>
        
        @if ($techno_ws->selected_team === '2')


                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-4.svg') }}" alt="4">
                    </div>
                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Workshop Payment</h6>
                        <p class="text-tickets-desc">1-5 September 2022<br>Status : 
                            @if ($techno_ws->proof_payment === null)
                                <span class="text-tickets-status status-red">Not Yet Paid</span>
                            @elseif ($techno_ws->proof_payment !== null)
                                @if ($techno_ws->status_pembayaran === '1')
                                    <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                                @elseif ($techno_ws->status_pembayaran === '0')
                                    <?php if($now->greaterThan($techno_ws_payment_date_start) && $now->lessThan($techno_ws_payment_date_end)) { ?>
                                        <span class="text-tickets-status status-red">Payment Failed. Please Re-Upload Payment Proof</span>
                                    <?php } elseif($now->greaterThan($techno_ws_payment_date_end)) { ?>
                                        <span class="text-tickets-status status-red">Payment Failed.</span>
                                    <?php } ?>
                                @elseif ($techno_ws->status_pembayaran === '2')
                                    <span class="text-tickets-status status-green">Payment Completed</span>
                                @endif
                            @endif
                        </p>
                    </div>
                    <div class="col" align="center" style="padding:0">
                        @if ($techno_ws->status_pembayaran === '1')
                            @if ($techno_ws->proof_payment === null)
                                <?php if($now->greaterThan($techno_ws_payment_date_start) && $now->lessThan($techno_ws_payment_date_end)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.payment.view') }}">Submit</a>
                                    </button>
                                <?php } elseif($now->lessThan($techno_ws_payment_date_start)) {  ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.payment.view') }}">Submit</a>
                                    </button>
                                <?php } ?>
                            @else()
                            @endif
                        @elseif ($techno_ws->status_pembayaran === '0')
                        <?php if($now->greaterThan($techno_ws_payment_date_start) && $now->lessThan($techno_ws_payment_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.payment.view') }}">Re-Submit</a>
                            </button>
                        <?php } ?>
                        @else
                        @endif
                    
                    </div>
                </div>

            @if ($techno_ws->status_pembayaran === '2')
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-5.svg') }}" alt="5">
                    </div>
                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Seminar & Workshop Day 1</h6>
                        <p class="text-tickets-desc">11 September 2022</p>
                    </div>
                    <?php 
                    if($now->greaterThan($techno_ws_seminar_1_date_start) && $now->lessThan($techno_ws_seminar_1_date_end)) { ?>
                        <div class="col" align="center" style="padding:0">
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                            </button>
                        </div>
                    <?php } elseif ($now->lessThan($techno_ws_seminar_1_date_start) || $now->greaterThan($techno_ws_seminar_1_date_end)){ ?>
                        <div class="col" align="center" style="padding:0">
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                            </button>
                        </div>
                    <?php } ?>
                </div>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-6.svg') }}" alt="6">
                    </div>
                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Seminar & Workshop Day 2</h6>
                        <p class="text-tickets-desc">18 September 2022</p>
                    </div>
                    <?php 
                    if($now->greaterThan($techno_ws_seminar_2_date_start) && $now->lessThan($techno_ws_seminar_2_date_end)) { ?>
                        <div class="col" align="center" style="padding:0">
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                            </button>
                        </div>
                    <?php } elseif ($now->lessThan($techno_ws_seminar_2_date_start) || $now->greaterThan($techno_ws_seminar_2_date_end)){ ?>
                        <div class="col" align="center" style="padding:0">
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                            </button>
                        </div>
                    <?php } ?>
                </div>

                <?php if($now->greaterThan($techno_ws_pitchdeck_1_date_start)) { ?>
                    <div class="row align-items-center" align="left" style="padding:20px">
                        <div class="col-2" style="padding:0 15px 0 8px">
                            <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-7.svg') }}" alt="7">
                        </div>
                        <div class="col-6" align="left" style="padding:0 8px 0 15px">
                            <h6 class="text-tickets-head">Pitchdeck Submission</h6>
                            <p class="text-tickets-desc">18 September - 2 October 2022<br>Status : 
                                @if ($techno_ws->pitcdeck1_link === null)
                                    <span class="text-tickets-status status-red">Unsubmitted</span>
                                @elseif ($techno_ws->pitcdeck1_link !== null)
                                    <span class="text-tickets-status status-green">Submitted</span>
                                @endif
                            </p>
                        </div>
                        <div class="col" align="center" style="padding:0">
                            @if ($techno_ws->pitcdeck1_link === null)
                                <?php if($now->lessThan($techno_ws_pitchdeck_1_date_start)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck1.view') }}">Submit</a>
                                    </button>
                                <?php } elseif ($now->greaterThan($techno_ws_pitchdeck_1_date_start) && $now->lessThan($techno_ws_pitchdeck_1_date_end)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck1.view') }}">Submit</a>
                                    </button>
                                <?php } ?> 
                            @elseif ($techno_ws->pitcdeck1_link !== null)
                                <?php if ($now->greaterThan($techno_ws_pitchdeck_1_date_start) && $now->lessThan($techno_ws_pitchdeck_1_date_end)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck1.view') }}">Re-Submit?</a>
                                    </button>
                                <?php } elseif ($now->greaterThan($techno_ws_pitchdeck_1_date_end)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ $techno_ws->pitcdeck1_link }}">View</a>
                                    </button>
                                <?php } ?>
                            @endif
                        </div>
                    </div>

                    <?php if($now->greaterThan($techno_ws_revisi_date_start)) { ?> 
                        <div class="row align-items-center" align="left" style="padding:20px">
                            <div class="col-2" style="padding:0 15px 0 8px">
                                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-8.svg') }}" alt="8">
                            </div>
                            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                <h6 class="text-tickets-head">Pitchdeck Assesment</h6>
                                <p class="text-tickets-desc">2 - 9 October 2022</p>
                            </div>
                        </div>

                        <?php if($now->greaterThan($techno_ws_pitchdeck_2_date_start)) { ?>
                            <div class="row align-items-center" align="left" style="padding:20px">
                                <div class="col-2" style="padding:0 15px 0 8px">
                                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-9.svg') }}" alt="9">
                                </div>
                                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                    <h6 class="text-tickets-head">Final Pitchdeck & Video Submission</h6>
                                    <p class="text-tickets-desc">9 - 16 October 2022<br>Status : 
                                        @if ($techno_ws->pitcdeck2_link === null)
                                            <span class="text-tickets-status status-red">Unsubmitted</span>
                                        @elseif ($techno_ws->pitcdeck2_link !== null)
                                            <span class="text-tickets-status status-green">Submitted</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="col" align="center" style="padding:0">
                                    @if ($techno_ws->pitcdeck2_link === null)
                                        <?php if($now->lessThan($techno_ws_pitchdeck_2_date_start)) { ?>
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck2.view') }}">Submit</a>
                                            </button>
                                        <?php } elseif ($now->greaterThan($techno_ws_pitchdeck_2_date_start) && $now->lessThan($techno_ws_pitchdeck_2_date_end)) { ?>
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck2.view') }}">Submit</a>
                                            </button>
                                        <?php } ?> 
                                    @elseif ($techno_ws->pitcdeck2_link !== null)
                                    <?php if ($now->greaterThan($techno_ws_pitchdeck_2_date_start) && $now->lessThan($techno_ws_pitchdeck_2_date_end)) { ?>
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck2.view') }}">Re-Submit?</a>
                                        </button>
                                    <?php } elseif ($now->greaterThan($techno_ws_pitchdeck_2_date_end)) { ?>
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="{{ $techno_ws->pitcdeck2_link }}">View</a>
                                        </button>
                                    <?php } ?>
                                    @endif
                                </div>
                            </div>
                            <?php if($now->greaterThan($techno_ws_pitchdeck_2_date_end)) { ?>
                                <div class="row align-items-center" align="left" style="padding:20px">
                                    <div class="col-2" style="padding:0 15px 0 8px">
                                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-10.svg') }}" alt="10">
                                    </div>
                                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                        <h6 class="text-tickets-head">Winner Announcement</h6>
                                        <p class="text-tickets-desc">30 October 2022</p>
                                    </div>
                                </div>
                            <?php } elseif($now->lessThan($techno_ws_pitchdeck_2_date_end)) {  ?>
                            <?php } ?>

                        <?php } elseif($now->lessThan($techno_ws_pitchdeck_2_date_start)) { ?>
                            <div class="row align-items-center" align="left" style="padding:20px">
                                <div class="col-2" style="padding:0 15px 0 8px">
                                    <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                                </div>
                                <div class="col-8" align="left" style="padding:0 8px 0 15px">
                                    <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                                </div>
                            </div>
                        <?php } ?>

                    <?php } elseif($now->lessThan($techno_ws_revisi_date_start)) { ?>
                        <div class="row align-items-center" align="left" style="padding:20px">
                            <div class="col-2" style="padding:0 15px 0 8px">
                                <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                            </div>
                            <div class="col-8" align="left" style="padding:0 8px 0 15px">
                                <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                            </div>
                        </div>
                    <?php } ?>

                <?php } elseif($now->lessThan($techno_ws_pitchdeck_1_date_start)) { ?>
                    <div class="row align-items-center" align="left" style="padding:20px">
                        <div class="col-2" style="padding:0 15px 0 8px">
                            <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                        </div>
                        <div class="col-8" align="left" style="padding:0 8px 0 15px">
                            <h6 class="text-tickets-head">Progress Locked! Please Wait for The Next Event</h6>
                        </div>
                    </div>
                <?php } ?>

            @elseif ($techno_ws->status_pembayaran === '0')
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/unqualified.svg') }}" alt="unqualified">
                    </div>
                    <div class="col-8" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Payment Failed. <br>Keep your spirits up!</h6>
                    </div>
                </div>
            @else()
            @endif


        @elseif($techno_ws->selected_team === '1')
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                </div>
                <div class="col-8" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                </div>
            </div>
        @elseif($techno_ws->selected_team === '0')
            <?php if ($now->greaterThan($techno_ws_announce_date_start)) { ?>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/unqualified.svg') }}" alt="unqualified">
                    </div>
                    <div class="col-8" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Your team didn't qualify for the Final Round. <br>Keep your spirits up!</h6>
                    </div>
                </div>
            <?php } elseif ($now->lessThan($techno_ws_announce_date_start)) { ?>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                    </div>
                    <div class="col-8" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                    </div>
                </div>
            <?php
                }
            ?>
        @endif


    </div>
</div>
@endsection