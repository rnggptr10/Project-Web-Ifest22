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
                <h6 class="text-tickets-head">Abstract</h6>
                <!-- BUAT STATUS, CLASS TERGANTUNG STATUS DI DATABASE -->
                <p class="text-tickets-desc">20-25 Agustus 2022<br>Status :
                    @if ($presenter->status_selected === '0')
                    <span class="text-tickets-status status-red">Abstract Declined</span>
                    @elseif ($presenter->status_selected === '1')
                    <span class="text-tickets-status status-orange">Submitted. Waiting For Review</span>
                    @elseif ($presenter->status_selected === '2')
                    <span class="text-tickets-status status-green">Abstract Selected</span>
                    @endif
                </p>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Presenter Payment</h6>
                <p class="text-tickets-desc">1-5 September 2022<br>Status :
                    @if ($presenter->status_pembayaran === '0')
                    <span class="text-tickets-status status-red">Declined</span>
                    @elseif ($presenter->status_pembayaran === '1')
                    <span class="text-tickets-status status-orange">Pending</span>
                    @elseif ($presenter->status_pembayaran === '2')
                    <span class="text-tickets-status status-green">Confirmed</span>
                    @endif
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.payment.view') }}">Details</a>
                </button>
            </div>
        </div>

        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Paper Submission</h6>
                <p class="text-tickets-desc">21-25 September 2022<br>Status :
                    @if ($presenter->paper1_link === null)
                    <span class="text-tickets-status status-red">Unsubmitted</span>
                    @elseif ($presenter->paper1_link !== null)
                    <span class="text-tickets-status status-green">Submitted</span>
                    @endif
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper1.view') }}">Submit</a>
                </button>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-4.svg') }}" alt="4">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Masa Revisi Paper</h6>
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
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-5.svg') }}" alt="5">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Pengumpulan Revisi Paper</h6>
                <p class="text-tickets-desc">30 September 2022<br>Status :
                    @if ($presenter->paper2_link === null)
                    <span class="text-tickets-status status-red">Unsubmitted</span>
                    @elseif ($presenter->paper2_link !== null)
                    <span class="text-tickets-status status-green">Submitted</span>
                    @endif
                </p>
            </div>
            <div class="col" align="center" style="padding:0">
                <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                    <a class="ifest-btn-primary-dark-bg-text" href="{{ route('semnas.presenter.submitting.paper2.view') }}">Submit</a>
                </button>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-6.svg') }}" alt="6">
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
    </div>
</div>
@endsection