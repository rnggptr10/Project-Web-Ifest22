@extends('profils.ticketDetails')

@section('ticket_details_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('event_webtitle', 'Technopreneur Workshop')

@section('event_title', 'Technopreneur Workshop')

@section('event_section_1')
<div class="row align-items-center" align="left" style="padding:20px">
    <div class="col-2" style="padding:0 15px 0 8px">
        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
    </div>
    <div class="col-6" align="left" style="padding:0 8px 0 15px">
        <h6 class="text-tickets-head">Registrasi Tim</h6>
        <!-- BUAT STATUS, CLASS TERGANTUNG STATUS DI DATABASE -->
        <p class="text-tickets-desc">20-25 Agustus 2022<br>Status : 
            <span class="text-tickets-status status-green">
            {{ $data->institute }}
        </span>
        </p>
    </div>
</div>
@endsection

@section('event_section_2')
<div class="row align-items-center" align="left" style="padding:20px">
    <div class="col-2" style="padding:0 15px 0 8px">
        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
    </div>
    <div class="col-6" align="left" style="padding:0 8px 0 15px">
        <h6 class="text-tickets-head">Pengumpulan Ide Bisnis</h6>
        <p class="text-tickets-desc">26-30 Agustus 2022<br>Status : 
            <span class="text-tickets-status status-orange">
            {{ $data->institute }}
            </span>
        </p>
    </div>
    <div class="col-4" align="center" style="padding:0">
        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('techno.submitting.proposal.view') }}">View</a>
        </button>
    </div>
</div>
@endsection

@section('event_section_3')
<div class="row align-items-center" align="left" style="padding:20px">
    <div class="col-2" style="padding:0 15px 0 8px">
        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
    </div>
    <div class="col-6" align="left" style="padding:0 8px 0 15px">
        <h6 class="text-tickets-head">Pembayaran Workshop</h6>
        <p class="text-tickets-desc">1-5 September 2022<br>Status : 
            <span class="text-tickets-status status-red">
            {{ $data->institute }}
            </span>
        </p>
    </div>
    <div class="col-4" align="center" style="padding:0">
        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('technoWorkshop.payment.view') }}">Submit</a>
        </button>
    </div>
</div>
@endsection

@section('event_section_4')
<div class="row align-items-center" align="left" style="padding:20px">
    <div class="col-2" style="padding:0 15px 0 8px">
        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-4.svg') }}" alt="4">
    </div>
    <div class="col-6" align="left" style="padding:0 8px 0 15px">
        <h6 class="text-tickets-head">Seminar</h6>
        <p class="text-tickets-desc">11, 18 September 2022</p>
    </div>
    <div class="col-4" align="center" style="padding:0">
        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
            <a class="ifest-btn-primary-dark-bg-text" href="">Link Zoom</a>
        </button>
    </div>
</div>
@endsection

@section('event_section_5')
<div class="row align-items-center" align="left" style="padding:20px">
    <div class="col-2" style="padding:0 15px 0 8px">
        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-5.svg') }}" alt="5">
    </div>
    <div class="col-6" align="left" style="padding:0 8px 0 15px">
        <h6 class="text-tickets-head">Pengumpulan Pitchdeck</h6>
        <p class="text-tickets-desc">21-25 September 2022<br>Status : 
            <span class="text-tickets-status status-red">
            {{ $data->institute }}
            </span>
        </p>
    </div>
    <div class="col-4" align="center" style="padding:0">
        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('techno.submitting.pitchdeck1.view') }}">Submit</a>
        </button>
    </div>
</div>
@endsection

@section('event_section_6')
<div class="row align-items-center" align="left" style="padding:20px">
    <div class="col-2" style="padding:0 15px 0 8px">
        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-6.svg') }}" alt="6">
    </div>
    <div class="col-6" align="left" style="padding:0 8px 0 15px">
        <h6 class="text-tickets-head">Masa Revisi Pitchdeck</h6>
        <p class="text-tickets-desc">21-25 September 2022<br>Status : 
            <span class="text-tickets-status status-green">
            {{ $data->institute }}
            </span>
        </p>
    </div>
    <div class="col-4" align="center" style="padding:0">
        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
            <a class="ifest-btn-primary-dark-bg-text" href="">View</a>
        </button>
    </div>
</div>
@endsection

@section('event_section_7')
<div class="row align-items-center" align="left" style="padding:20px">
    <div class="col-2" style="padding:0 15px 0 8px">
        <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-7.svg') }}" alt="7">
    </div>
    <div class="col-6" align="left" style="padding:0 8px 0 15px">
        <h6 class="text-tickets-head">Pengumpulan Revisi Pitchdeck</h6>
        <p class="text-tickets-desc">30 September 2022<br>Status : 
            <span class="text-tickets-status status-green">
            {{ $data->institute }}
            </span>
        </p>
    </div>
    <div class="col-4" align="center" style="padding:0">
        <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
            <a class="ifest-btn-primary-dark-bg-text" href="{{ route('techno.submitting.pitchdeck2.view') }}">Submit</a>
        </button>
    </div>
</div>
@endsection