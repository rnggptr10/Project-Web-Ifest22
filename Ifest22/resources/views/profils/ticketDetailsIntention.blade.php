@extends('profils.ticketDetails')

@section('ticket_details_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('event_webtitle', 'INTENTION')

@section('event_type', 'Competition Detail')

@section('event_title', 'Innovative Technology Competition (INTENTION)')

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
                    <p class="text-details-card-desc">{{ $intention->team_name }}</p>
                </div>
                <div class="row" style="padding-bottom:7px">
                    <h5 class="text-details-card-head">Team Email</h5>
                    <p class="text-details-card-desc">{{ $intention->email }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Team Leader Data</h5>
                    <p class="text-details-card-desc">{{ $intention->team_leader }} - {{ $intention->team_leader_institute }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Team Member Data</h5>
                    <p class="text-details-card-desc">
                        • {{ $intention->team_member_1 }} - {{ $intention->team_member_1_institute }}
                        <br>• {{ $intention->team_member_2 }} - {{ $intention->team_member_2_institute }}
                        @if ($intention->team_member_3 !== null)
                            <br>• {{ $intention->team_member_3 }} - {{ $intention->team_member_3_institute }}
                        @else
                        @endif
                        @if ($intention->team_member_4 !== null)
                            <br>• {{ $intention->team_member_4 }} - {{ $intention->team_member_4_institute }}
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
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Competition Progress</h2>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Team Registration</h6>
                <p class="text-tickets-desc">24 July - 20 August 2022<br>Status : 
                <?php
                    // SET WAKTU LIVE
                    $now = Carbon::now('Asia/Jakarta');
                    $now->toDateTimeString();

                    // SET TANGGAL REGISTRASI INTENTION
                    $intention_regist_date_start = Carbon::create(2022, 7, 24, 00, 00, 01, 'Asia/Jakarta');
                    $intention_regist_date_end = Carbon::create(2022, 8, 25, 23, 59, 59, 'Asia/Jakarta');
                    $intention_regist_date_start->toDateTimeString(); 
                    $intention_regist_date_end->toDateTimeString(); 

                    // SET TANGGAL SUBMIT PROPOSAL INTENTION
                    $intention_proposal_date_start = Carbon::create(2022, 8, 27, 00, 00, 01, 'Asia/Jakarta');
                    $intention_proposal_date_end = Carbon::create(2022, 9, 5, 23, 59, 59, 'Asia/Jakarta');
                    $intention_proposal_date_start->toDateTimeString(); 
                    $intention_proposal_date_end->toDateTimeString(); 

                    // SET TANGGAL PENGUMUMAN FINALIST
                    $intention_finalist_date_start = Carbon::create(2022, 9, 9, 00, 00, 01, 'Asia/Jakarta');
                    $intention_finalist_date_start->toDateTimeString(); 

                    // SET TANGGAL SUBMIT PRODUCT INTENTION
                    $intention_product_date_start = Carbon::create(2022, 9, 10, 00, 00, 01, 'Asia/Jakarta');
                    $intention_product_date_end = Carbon::create(2022, 10, 18, 23, 59, 59, 'Asia/Jakarta');
                    $intention_product_date_start->toDateTimeString(); 
                    $intention_product_date_end->toDateTimeString(); 

                    // SET TANGGAL FINAL STAGE (UNSET JAM)
                    $intention_final_date_start = Carbon::create(2022, 10, 22, 8, 00, 00, 'Asia/Jakarta');
                    $intention_final_date_end = Carbon::create(2022, 10, 22, 15, 00, 00, 'Asia/Jakarta');
                    $intention_final_date_start->toDateTimeString(); 
                    $intention_final_date_end->toDateTimeString(); 

                    if ($now->greaterThan($intention_regist_date_start) && $now->lessThan($intention_regist_date_end)) {
                ?> 
                    @if ($intention->status_pembayaran === '1')
                        <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                    @elseif ($intention->status_pembayaran === '0')
                        <span class="text-tickets-status status-red">Payment Failed. Please Re-Upload Payment Proof</span>
                    @elseif ($intention->status_pembayaran === '2')
                        <span class="text-tickets-status status-green">Payment Completed</span><br>
                        <span class="text-tickets-desc">Please Join Our Discord for Further Information!<span>
                    @endif
                <?php } elseif ($now->lessThan($intention_regist_date_start) || $now->greaterThan($intention_regist_date_end)) { ?>
                    @if ($intention->status_pembayaran === '0')
                        <span class="text-tickets-status status-red">Payment Failed</span>
                    @elseif ($intention->status_pembayaran === '1')
                        <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                    @elseif ($intention->status_pembayaran === '2')
                        <span class="text-tickets-status status-green">Payment Completed</span><br>
                        <span class="text-tickets-desc">Please Join Our Discord for Further Information!<span>
                    @endif
                <?php } ?>
                </p>
            </div>
            <?php if ($now->greaterThan($intention_regist_date_start) && $now->lessThan($intention_regist_date_end)) { ?>
            @if ($intention->status_pembayaran === '0')
                <div class="col-4" align="center" style="padding:0">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('intention.resubmit.payment.view') }}">Re-Submit?</a>
                    </button>
                </div>
            @elseif ($intention->status_pembayaran === '1')
            @elseif ($intention->status_pembayaran === '2')
                <div class="col-4" align="center" style="padding:0">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 60px;">
                        <a class="ifest-btn-primary-dark-bg-text" target="_blank" href="https://discord.gg/F2eVM23bQ8">Discord<br>IFest 2022</a>
                    </button>
                </div>
            @endif
            <?php
            } elseif ($now->lessThan($intention_regist_date_start) || $now->greaterThan($intention_regist_date_end)) { ?>
                @if ($ctf->status_pembayaran === '2')
                <div class="col-4" align="center" style="padding:0">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 60px;">
                        <a class="ifest-btn-primary-dark-bg-text" target="_blank" href="https://discord.gg/F2eVM23bQ8">Discord<br>IFest 2022</a>
                    </button>
                </div>
                @endif
            <?php } ?>
        </div>
        @if ($intention->status_pembayaran === '2')
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
                </div>
                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Proposal and Video Submission</h6>
                    <p class="text-tickets-desc">27 August - 5 September 2022<br>Status :
                    <?php
                        // SET TANGGAL ACARA
                        if ($now->greaterThan($intention_proposal_date_start) && $now->lessThan($intention_proposal_date_end)) {
                    ?>  
                        @if ($intention->proposal_link === null)
                            <span class="text-tickets-status status-red">Unsubmitted</span>
                        @elseif ($intention->proposal_link !== null)
                            @if ($intention->status_finalist === '0')
                                <?php if ($now->greaterThan($intention_finalist_date_start)) { ?>
                                    <span class="text-tickets-status status-green">Submitted</span>
                                <?php } elseif ($now->lessThan($intention_finalist_date_start)) { ?>
                                    <span class="text-tickets-status status-orange">Submitted. Waiting for Selection.</span>
                                <?php } ?>
                            @elseif ($intention->status_finalist === '1')
                                <?php if ($now->greaterThan($intention_finalist_date_start)) { ?>
                                    <span class="text-tickets-status status-green">Proposal Selected!</span>
                                <?php } elseif ($now->lessThan($intention_finalist_date_start)) { ?>
                                    <span class="text-tickets-status status-orange">Submitted. Waiting for Selection.</span>
                                <?php } ?>
                            @endif
                        @endif
                    <?php
                    } elseif ($now->lessThan($intention_proposal_date_start) || $now->greaterThan($intention_proposal_date_end)) { 
                    ?>
                        @if ($intention->proposal_link === null)
                            <span class="text-tickets-status status-red">Unsubmitted</span>
                        @elseif ($intention->proposal_link !== null)
                            @if ($intention->status_finalist === '0')
                                <span class="text-tickets-status status-green">Submitted</span>
                            @elseif ($intention->status_finalist === '1')
                                <span class="text-tickets-status status-green">Proposal Selected!</span>
                            @endif
                        @endif
                    <?php
                        }
                    ?>
                    </p>
                </div>
                <div class="col-4" align="center" style="padding:0">
                @if ($intention->status_finalist === '0')
                    @if ($intention->proposal_link === null)
                        <?php if($now->lessThan($intention_proposal_date_start)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('intention.submitting.proposal.view') }}">Submit</a>
                            </button>
                        <?php } elseif($now->greaterThan($intention_proposal_date_start) && $now->lessThan($intention_proposal_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('intention.submitting.proposal.view') }}">Submit</a>
                            </button>
                        <?php } elseif($now->greaterThan($intention_proposal_date_end)) {?>
                        <?php } ?>
                    @elseif ($intention->proposal_link !== null)
                        <?php if ($now->greaterThan($intention_finalist_date_start) || $now->greaterThan($intention_proposal_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ $intention->proposal_link }}">View</a>
                            </button>
                        <?php } elseif ($now->lessThan($intention_proposal_date_end)) { ?>
                            <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                <a class="ifest-btn-primary-dark-bg-text" href="{{ route('intention.submitting.proposal.view') }}">Re-Submit?</a>
                            </button>
                        <?php } ?>
                    @endif
                @elseif ($intention->status_finalist === '1')
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ $intention->proposal_link }}">View</a>
                    </button>
                @endif
                </div>
            </div>
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
                </div>
                <div class="col-6" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Finalist Announcement</h6>
                    <p class="text-tickets-desc">9 September 2022
                        <?php if ($now->greaterThan($intention_finalist_date_start)) { ?>
                        <br>Status : 
                        @if ($intention->status_finalist === '0')
                            <span class="text-tickets-status status-red">Your team didn't qualify for the Final Round. Keep your spirits up!</span>
                        @elseif ($intention->status_finalist === '1')
                            <span class="text-tickets-status status-green">Congratulations! Your team advances to the Final Round</span>
                        @endif
                        <?php
                        } elseif ($now->lessThan($intention_proposal_date_start)) { }
                        ?>
                    </p>
                </div>
            </div>

            @if ($intention->status_finalist === '1')
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-4.svg') }}" alt="4">
                    </div>
                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Final Product Submission</h6>
                        <p class="text-tickets-desc">10 September - 18 October 2022<br>Status : 
                            @if ($intention->app_link === null)
                                <span class="text-tickets-status status-red">Unsubmitted</span>
                            @elseif ($intention->app_link !== null)
                                <span class="text-tickets-status status-green">Submitted</span>
                            @endif
                        </p>
                    </div>
                    <div class="col-4" align="center" style="padding:0">
                        @if ($intention->app_link === null)
                            <?php if($now->lessThan($intention_product_date_start)) { ?>
                                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('intention.submitting.project.view') }}">Submit</a>
                                </button>
                            <?php } elseif ($now->greaterThan($intention_product_date_start) && $now->lessThan($intention_product_date_end)) { ?>
                                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('intention.submitting.project.view') }}">Submit</a>
                                </button>
                            <?php } ?>
                        @elseif ($intention->app_link !== null)
                            <?php if ($now->greaterThan($intention_product_date_start) && $now->lessThan($intention_product_date_end)) { ?>
                                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('intention.submitting.project.view') }}">Re-Submit?</a>
                                </button>
                            <?php } elseif ($now->greaterThan($intention_product_date_end)) { ?>
                                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                                    <a class="ifest-btn-primary-dark-bg-text" href="{{ $intention->app_link }}">View</a>
                                </button>
                            <?php } ?>
                        @endif
                    </div>
                </div>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-5.svg') }}" alt="5">
                    </div>
                    <div class="col-6" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Final Product Presentation</h6>
                        <p class="text-tickets-desc">22 October 2022</p>
                    </div>
                    <div class="col-4" align="center" style="padding:0">
                        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" <?php 
                            if($now->greaterThan($intention_final_date_start) && $now->lessThan($intention_final_date_end)) { ?>
                                @if ($intention->app_link === null)
                                    <?php echo('disabled'); ?>
                                @elseif ($intention->app_link !== null)
                                @endif
                            <?php } elseif ($now->lessThan($intention_final_date_start) || $now->greaterThan($intention_final_date_end)){
                                echo('disabled'); 
                            }?>>
                            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                        </button>
                    </div>
                </div>
                <?php if($now->greaterThan($intention_final_date_end)) { ?>
                    <div class="row align-items-center" align="left" style="padding:20px">
                        <div class="col-2" style="padding:0 15px 0 8px">
                            <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-6.svg') }}" alt="6">
                        </div>
                        <div class="col-6" align="left" style="padding:0 8px 0 15px">
                            <h6 class="text-tickets-head">Winner Announcement</h6>
                            <p class="text-tickets-desc">30 October 2022</p>
                        </div>
                    </div>
                <?php } elseif($now->lessThan($intention_final_date_end)) {  ?>
                <?php } ?>

            @elseif ($intention->status_finalist === '0')
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                </div>
                <div class="col-8" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                </div>
            </div>
            @endif

        @elseif ($intention->status_pembayaran === '1')
            <div class="row align-items-center" align="left" style="padding:20px">
                <div class="col-2" style="padding:0 15px 0 8px">
                    <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                </div>
                <div class="col-8" align="left" style="padding:0 8px 0 15px">
                    <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                </div>
            </div>

        @elseif ($intention->status_pembayaran === '0')
            <?php if ($now->greaterThan($intention_regist_date_start) && $now->lessThan($intention_regist_date_end)) { ?>
                <div class="row align-items-center" align="left" style="padding:20px">
                    <div class="col-2" style="padding:0 15px 0 8px">
                        <img class="circular-number" src="{{ URL::asset('icon/page-details/gembok.svg') }}" alt="locked">
                    </div>
                    <div class="col-8" align="left" style="padding:0 8px 0 15px">
                        <h6 class="text-tickets-head">Progress Locked! Please complete previous step</h6>
                    </div>
                </div>
            <?php } elseif ($now->lessThan($intention_regist_date_start) || $now->greaterThan($intention_regist_date_end)) { ?>
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
