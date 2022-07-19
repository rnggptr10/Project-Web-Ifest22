@extends('profils.ticketDetails')

@section('ticket_details_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('event_webtitle', 'Seminar Nasional - Presenter')

@section('event_type', 'Seminar Nasional Detail')

@section('event_title', 'Presenter')

@section('event_team_data')
<div class="col-sm-6">
    <div class="card ifest-card-details" style="padding:0;">
        <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Presenter's Data</h2>
        </div>
        <div class="row" align="left" style="padding:20px">
            <div class="col">
                <div class="row" style="padding-bottom:7px;">
                    <h5 class="text-details-card-head">Presenter's Name</h5>
                    <p class="text-details-card-desc">{{ $presenter->name }}</p>
                </div>
                <div class="row" style="padding-bottom:7px">
                    <h5 class="text-details-card-head">Presenter's Email</h5>
                    <p class="text-details-card-desc">{{ $presenter->email }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Presenter's Institute</h5>
                    <p class="text-details-card-desc">{{ $presenter->institute }}</p>
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
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Event Progress</h2>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Abstract Submission</h6>
                <p class="text-tickets-desc">24 July - 5 September 2022
                <?php
                    // SET WAKTU LIVE
                    $now = Carbon::now('Asia/Jakarta');
                    $now->toDateTimeString(); 

                    // SET TANGGAL PENGUMUMAN SELECTED TEAM
                    $semnas_announce_date_start = Carbon::create(2022, 7, 15, 7, 00, 00, 'Asia/Jakarta');
                    $semnas_announce_date_start->toDateTimeString(); 

                    // SET TANGGAL SUBMIT PAYMENT
                    $semnas_payment_date_start = Carbon::create(2022, 7, 15, 7, 00, 00, 'Asia/Jakarta');
                    $semnas_payment_date_end = Carbon::create(2022, 7, 16, 15, 00, 00, 'Asia/Jakarta');
                    $semnas_payment_date_start->toDateTimeString(); 
                    $semnas_payment_date_end->toDateTimeString(); 
                    
                    // SET TANGGAL SUBMIT PAPER 1
                    $semnas_paper_1_date_start = Carbon::create(2022, 7, 15, 7, 00, 00, 'Asia/Jakarta');
                    $semnas_paper_1_date_end = Carbon::create(2022, 7, 16, 15, 00, 00, 'Asia/Jakarta');
                    $semnas_paper_1_date_start->toDateTimeString(); 
                    $semnas_paper_1_date_end->toDateTimeString();
                    
                    // SET TANGGAL REVISI
                    $semnas_revisi_date_start = Carbon::create(2022, 7, 15, 7, 00, 00, 'Asia/Jakarta');
                    $semnas_revisi_date_end = Carbon::create(2022, 7, 17, 15, 00, 00, 'Asia/Jakarta');
                    $semnas_revisi_date_start->toDateTimeString(); 
                    $semnas_revisi_date_end->toDateTimeString(); 

                    // SET TANGGAL SUBMIT PAPER 2
                    $semnas_paper_2_date_start = Carbon::create(2022, 7, 15, 7, 00, 00, 'Asia/Jakarta');
                    $semnas_paper_2_date_end = Carbon::create(2022, 7, 16, 15, 00, 00, 'Asia/Jakarta');
                    $semnas_paper_2_date_start->toDateTimeString(); 
                    $semnas_paper_2_date_end->toDateTimeString();
                    
                    // SET TANGGAL SEMINAR DAY 1
                    $semnas_seminar_1_date_start = Carbon::create(2022, 7, 15, 7, 00, 00, 'Asia/Jakarta');
                    $semnas_seminar_1_date_end = Carbon::create(2022, 7, 16, 14, 00, 00, 'Asia/Jakarta');
                    $semnas_seminar_1_date_start->toDateTimeString(); 
                    $semnas_seminar_1_date_end->toDateTimeString();
                    
                    // SET TANGGAL SEMINAR DAY 2
                    $semnas_seminar_2_date_start = Carbon::create(2022, 7, 15, 7, 00, 00, 'Asia/Jakarta');
                    $semnas_seminar_2_date_end = Carbon::create(2022, 7, 16, 14, 00, 00, 'Asia/Jakarta');
                    $semnas_seminar_2_date_start->toDateTimeString(); 
                    $semnas_seminar_2_date_end->toDateTimeString();

                    
                    if($now->greaterThan($semnas_announce_date_start)) {
                ?> 
                    @if ($presenter->status_selected === '0')
                        <br>Status :
                        <span class="text-tickets-status status-red">Abstract Declined</span>
                    @elseif ($presenter->status_selected === '1')
                        <br>Status :
                        <span class="text-tickets-status status-orange">Submitted. Waiting For Review</span>
                    @elseif ($presenter->status_selected === '2')
                        <br>Status :
                        <span class="text-tickets-status 
                        status-green">Abstract Selected</span>
                    @endif
                <?php } elseif($now->lessThan($semnas_announce_date_start)) { ?>
                    <br>Status :
                    <span class="text-tickets-status status-orange">Submitted. Waiting For Review</span>
                <?php } ?>
                </p>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Selected Abstract Announcement</h6>
                <p class="text-tickets-desc">10 September 2022
                    <?php if($now->greaterThan($semnas_announce_date_start)) { ?>
                        @if ($presenter->status_selected === '0')
                            <br>Status : 
                            <span class="text-tickets-status status-red">Abstract not Selected. Keep your spirits up!</span>
                        @elseif ($presenter->status_selected === '2')
                            <br>Status : 
                            <span class="text-tickets-status status-green">Congratulations! Abstract Selected!</span>
                        @elseif ($presenter->status_selected === '1')
                        @endif
                    <?php } elseif($now->lessThan($semnas_announce_date_start)) {} ?>
                </p>
            </div>
        </div>

        @if($presenter->status_selected === '2') 

            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
                </div>
                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Presenter Payment</h6>
                    <p class="text-tickets-desc">11 - 22 September 2022<br>Status :
                        @if ($presenter->proof_payment === null)
                            <span class="text-tickets-status status-red">Not Yet Paid</span>
                        @elseif ($presenter->proof_payment !== null)
                            @if ($presenter->status_pembayaran === '0')
                                <?php if($now->greaterThan($semnas_payment_date_start) && $now->lessThan($semnas_payment_date_end)) { ?>
                                    <span class="text-tickets-status status-red">Payment Failed. Please Re-Upload Payment Proof</span>
                                <?php } elseif($now->greaterThan($semnas_payment_date_end)) { ?>
                                    <span class="text-tickets-status status-red">Payment Failed.</span>
                                <?php } elseif ($now->lessThan($semnas_payment_date_start)) { ?>
                                    <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                                <?php } ?>
                            @elseif ($presenter->status_pembayaran === '1')
                                <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                            @elseif ($presenter->status_pembayaran === '2')
                                <span class="text-tickets-status status-green">Payment Completed</span>
                            @endif
                        @endif
                    </p>
                </div>
                <div class="col" align="center" style="padding:0">
                    @if ($presenter->status_pembayaran === '1')
                        @if ($presenter->proof_payment === null)
                            <?php if($now->greaterThan($semnas_payment_date_start) && $now->lessThan($semnas_payment_date_end)) { ?>
                                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.payment.view') }}">Submit</a>
                                </button>
                            <?php } elseif($now->lessThan($semnas_payment_date_start)) {  ?>
                                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.payment.view') }}">Submit</a>
                                </button>
                            <?php } ?>
                        @else
                        @endif
                    @elseif ($presenter->status_pembayaran === '0')
                        <?php if($now->greaterThan($semnas_payment_date_start) && $now->lessThan($semnas_payment_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.payment.view') }}">Re-Submit</a>
                            </button>
                        <?php } ?>
                    @else
                    @endif
                </div>
            </div>

            @if ($presenter->status_pembayaran === '2')
                <?php if($now->greaterThan($semnas_paper_1_date_start)) { ?>
                    <div class="row align-items-center" align="left" style="padding:20px">
                        <div class="col-2" style="padding:0 15px 0 8px">
                            <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-4.svg') }}" alt="4">
                        </div>
                        <div class="col-6" align="left" style="padding:0 8px 0 15px">
                            <h6 class="text-tickets-head">Paper Submission</h6>
                            <p class="text-tickets-desc">23-27 September 2022<br>Status :
                                @if ($presenter->paper1_link === null)
                                <span class="text-tickets-status status-red">Unsubmitted</span>
                                @elseif ($presenter->paper1_link !== null)
                                <span class="text-tickets-status status-green">Submitted</span>
                                @endif
                            </p>
                        </div>
                        <div class="col" align="center" style="padding:0">
                            @if ($presenter->paper1_link === null)
                                <?php if($now->lessThan($semnas_paper_1_date_start)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper1.view') }}">Submit</a>
                                    </button>
                                <?php } elseif ($now->greaterThan($semnas_paper_1_date_start) && $now->lessThan($semnas_paper_1_date_end)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper1.view') }}">Submit</a>
                                    </button>
                                <?php } ?> 
                            @elseif($presenter->paper1_link !== null)
                                <?php if ($now->greaterThan($semnas_paper_1_date_start) && $now->lessThan($semnas_paper_1_date_end)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper1.view') }}">Re-Submit?</a>
                                    </button>
                                <?php } elseif ($now->greaterThan($semnas_paper_1_date_end)) { ?>
                                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                        <a class="ifest-btn-primary-dark-bg-text" href="{{ $presenter->paper1_link }}">View</a>
                                    </button>
                                <?php } ?>
                            @endif
                        </div>
                    </div>

                    <?php if($now->greaterThan($semnas_revisi_date_start)) { ?> 
                        <div class="row align-items-center" align="left" style="padding:20px">
                            <div class="col-2" style="padding:0 15px 0 8px">
                                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-5.svg') }}" alt="5">
                            </div>
                            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                <h6 class="text-tickets-head">Paper Revision Period</h6>
                                <p class="text-tickets-desc">28 September - 3 October 2022</p>
                            </div>
                        </div>

                        <?php if($now->greaterThan($semnas_paper_2_date_start)) { ?>
                            <div class="row align-items-center" align="left" style="padding:20px">
                                <div class="col-2" style="padding:0 15px 0 8px">
                                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-6.svg') }}" alt="6">
                                </div>
                                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                    <h6 class="text-tickets-head">Final Paper Submission</h6>
                                    <p class="text-tickets-desc">4 - 7 October 2022<br>Status :
                                        @if ($presenter->paper2_link === null)
                                        <span class="text-tickets-status status-red">Unsubmitted</span>
                                        @elseif ($presenter->paper2_link !== null)
                                        <span class="text-tickets-status status-green">Submitted</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="col" align="center" style="padding:0">
                                    @if ($presenter->paper2_link === null)
                                        <?php if($now->lessThan($semnas_paper_2_date_start)) { ?>
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper2.view') }}">Submit</a>
                                            </button>
                                        <?php } elseif ($now->greaterThan($semnas_paper_2_date_start) && $now->lessThan($semnas_paper_2_date_end)) { ?>
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper2.view') }}">Submit</a>
                                            </button>
                                        <?php } ?> 
                                    @elseif($presenter->paper2_link)
                                        <?php if ($now->greaterThan($semnas_paper_2_date_start) && $now->lessThan($semnas_paper_2_date_end)) { ?>
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper2.view') }}">Re-Submit?</a>
                                            </button>
                                        <?php } elseif ($now->greaterThan($semnas_paper_2_date_end)) { ?>
                                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                                <a class="ifest-btn-primary-dark-bg-text" href="{{ $presenter->paper2_link }}">View</a>
                                            </button>
                                        <?php } ?>
                                    @endif
                                </div>
                            </div>
                            <div class="row align-items-center" align="left" style="padding:20px">
                                <div class="col-2" style="padding:0 15px 0 8px">
                                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-7.svg') }}" alt="7">
                                </div>
                                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                    <h6 class="text-tickets-head">Seminar Day 1</h6>
                                    <p class="text-tickets-desc">8 October 2022</p>
                                </div>
                                <?php 
                                if($now->greaterThan($semnas_seminar_1_date_start) && $now->lessThan($semnas_seminar_1_date_end)) { ?>
                                    <div class="col" align="center" style="padding:0">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                <?php } elseif ($now->lessThan($semnas_seminar_1_date_start) || $now->greaterThan($semnas_seminar_1_date_end)){ ?>
                                    <div class="col" align="center" style="padding:0">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row align-items-center" align="left" style="padding:20px">
                                <div class="col-2" style="padding:0 15px 0 8px">
                                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-8.svg') }}" alt="8">
                                </div>
                                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                                    <h6 class="text-tickets-head">Seminar Day 2</h6>
                                    <p class="text-tickets-desc">9 October 2022</p>
                                </div>
                                <?php 
                                if($now->greaterThan($semnas_seminar_2_date_start) && $now->lessThan($semnas_seminar_2_date_end)) { ?>
                                    <div class="col" align="center" style="padding:0">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                <?php } elseif ($now->lessThan($semnas_seminar_2_date_start) || $now->greaterThan($semnas_seminar_2_date_end)){ ?>
                                    <div class="col" align="center" style="padding:0">
                                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled> 
                                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                                        </button>
                                    </div>
                                <?php } ?>
                            </div>


                        <?php } elseif($now->lessThan($semnas_paper_2_date_start)) { ?>
                            <div class="row align-items-center" align="left" style="padding:20px">
                                <div class="col-2" style="padding:0 15px 0 8px">
                                    <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                                </div>
                                <div class="col-8" align="left" style="padding:0 8px 0 15px">
                                    <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                                </div>
                            </div>
                        <?php } ?>

                    <?php } elseif($now->lessThan($semnas_revisi_date_start)) { ?>
                        <div class="row align-items-center" align="left" style="padding:20px">
                            <div class="col-2" style="padding:0 15px 0 8px">
                                <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                            </div>
                            <div class="col-8" align="left" style="padding:0 8px 0 15px">
                                <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                            </div>
                        </div>
                    <?php } ?>

                <?php } elseif($now->lessThan($semnas_paper_1_date_start)) { ?>
                    <div class="row align-items-center" align="left" style="padding:20px">
                        <div class="col-2" style="padding:0 15px 0 8px">
                            <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                        </div>
                        <div class="col-8" align="left" style="padding:0 8px 0 15px">
                            <h6 class="text-tickets-head">Progress Locked! Please Wait for The Next Event</h6>
                        </div>
                    </div>
                <?php } ?>

            @elseif ($presenter->status_pembayaran === '0')
                <?php if($now->lessThan($semnas_payment_date_start)) {}
                elseif($now->greaterThan($semnas_payment_date_end)) { ?>
                    <div class="row align-items-center" align="left" style="padding:20px">
                        <div class="col-2" style="padding:0 15px 0 8px">
                            <img class="circular-number" src="{{ URL::asset('icon/page-details/unqualified.svg') }}" alt="unqualified">
                        </div>
                        <div class="col-8" align="left" style="padding:0 8px 0 15px">
                            <h6 class="text-tickets-head">Payment Failed. <br>Keep your spirits up!</h6>
                        </div>
                    </div>
                <?php } ?>
            @else
            @endif
            
        @elseif ($presenter->status_selected === '1')
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                </div>
                <div class="col-8" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                </div>
            </div>
        @elseif ($presenter->status_selected === '0')
            <?php if ($now->greaterThan($semnas_announce_date_start)) { ?>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/unqualified.svg') }}" alt="unqualified">
                    </div>
                    <div class="col-8" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">You didn't qualify for the next Stage. Keep your spirits up!</h6>
                    </div>
                </div>
            <?php } elseif ($now->lessThan($semnas_announce_date_start)) { ?>
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