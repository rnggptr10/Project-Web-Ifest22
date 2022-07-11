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
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Data Tim</h2>
        </div>
        <div class="row" align="left" style="padding:20px">
            <div class="col">
                <div class="row" style="padding-bottom:7px;">
                    <h5 class="text-details-card-head">Nama Tim</h5>
                    <p class="text-details-card-desc">{{ $techno_ws->team_name }}</p>
                </div>
                <div class="row" style="padding-bottom:7px">
                    <h5 class="text-details-card-head">Email Tim</h5>
                    <p class="text-details-card-desc">{{ $techno_ws->email }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Data Ketua Tim</h5>
                    <p class="text-details-card-desc">{{ $techno_ws->team_leader }} - {{ $techno_ws->team_leader_institute }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Data Anggota Tim</h5>
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
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Progress Lomba</h2>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Team Registration</h6>
                <!-- BUAT STATUS, CLASS TERGANTUNG STATUS DI DATABASE -->
                <p class="text-tickets-desc">20-25 Agustus 2022<br>Status : 
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
                <h6 class="text-tickets-head">Pengumpulan Ide Bisnis</h6>
                <p class="text-tickets-desc">26-30 Agustus 2022<br>Status : 
                    @if ($techno_ws->proposal_link === null)
                        <span class="text-tickets-status status-red">Unsubmitted</span>
                    @elseif ($techno_ws->proposal_link !== null)
                        @if ($techno_ws->selected_team === 1)
                            <span class="text-tickets-status status-orange">Waiting for Selection</span>
                        @elseif ($techno_ws->selected_team === 0)
                        <span class="text-tickets-status status-red">Proposal Declined</span>
                        @elseif ($techno_ws->selected_team === 2)
                            <span class="text-tickets-status status-green">Proposal Selected!</span>
                        @endif
                    @endif
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
                @if ($techno_ws->proposal_link === null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.proposal.view') }}">Submit</a>
                    </button>
                @elseif ($techno_ws->proposal_link !== null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="">Re-Submit?</a>
                    </button>
                @endif
                
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Workshop Payment</h6>
                <p class="text-tickets-desc">1-5 September 2022<br>Status : 
                    @if ($techno_ws->proof_payment === null)
                        <span class="text-tickets-status status-red">Not Yet Paid</span>
                    @elseif ($techno_ws->proof_payment !== null)
                        @if ($techno_ws->status_pembayaran === 1)
                            <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                        @elseif ($techno_ws->status_pembayaran === 0)
                            <span class="text-tickets-status status-red">Payment Failed. Please Re-Upload Payment Proof</span>
                        @elseif ($techno_ws->status_pembayaran === 2)
                            <span class="text-tickets-status status-green">Payment Completed</span>
                        @endif
                    @endif
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
                @if ($techno_ws->proof_payment === null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.payment.view') }}">Submit</a>
                    </button>
                @elseif ($techno_ws->proof_payment !== null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="">Re-Submit?</a>
                    </button>
                @endif
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-4.svg') }}" alt="4">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Seminar</h6>
                <p class="text-tickets-desc">11, 18 September 2022</p>
            </div>
            <div class="col" align="center" style="padding:0">
                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;" disabled>
                    <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
                </button>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-5.svg') }}" alt="5">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Pengumpulan Pitchdeck</h6>
                <p class="text-tickets-desc">21-25 September 2022<br>Status : 
                    @if ($techno_ws->pitcdeck1_link === null)
                        <span class="text-tickets-status status-red">Unsubmitted</span>
                    @elseif ($techno_ws->pitcdeck1_link !== null)
                        <span class="text-tickets-status status-green">Submitted</span>
                    @endif
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
                @if ($techno_ws->pitcdeck1_link === null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck1.view') }}">Submit</a>
                    </button>
                @elseif ($techno_ws->pitcdeck1_link !== null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="">Re-Submit?</a>
                    </button>
                @endif
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-6.svg') }}" alt="6">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Masa Revisi Pitchdeck</h6>
                <p class="text-tickets-desc">21-25 September 2022
                    <!-- <br>Status : 
                    <span class="text-tickets-status status-green">
                    {{ $data->institute }}
                    </span> -->
                </p>
            </div>
            <!-- <div class="col" align="center" style="padding:0">
                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                    <a class="ifest-btn-primary-dark-bg-text" href="">View</a>
                </button>
            </div> -->
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-7.svg') }}" alt="7">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Pengumpulan Revisi Pitchdeck</h6>
                <p class="text-tickets-desc">30 September 2022<br>Status : 
                    @if ($techno_ws->pitcdeck2_link === null)
                        <span class="text-tickets-status status-red">Unsubmitted</span>
                    @elseif ($techno_ws->pitcdeck2_link !== null)
                        <span class="text-tickets-status status-green">Submitted</span>
                    @endif
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
                @if ($techno_ws->pitcdeck2_link === null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.submitting.pitchdeck2.view') }}">Submit</a>
                    </button>
                @elseif ($techno_ws->pitcdeck2_link !== null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="">Re-Submit?</a>
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection