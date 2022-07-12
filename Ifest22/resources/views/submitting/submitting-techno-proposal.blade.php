@extends('submitting.submitting')

@section('competition_webtitle', 'Technopreneur Workshop Proposal')

@section('competition_title', 'Technopreneur Workshop - Proposal')

@section('action_form', "")

@section('competition-form')
<!-- PAGE 1 -->

<form method="post" action="{{route('technoWorkshop.submitting.proposal')}}">
    @method('patch')
    @csrf
    <div id="regist-section-1">
        <div class="row mb-2">
            <label for="proposal_link" class="placeholder regist-form-text" style="padding:0">{{ __('Proposal Link') }}</label>
            <input id="proposal_link" name="proposal_link" type="text" class="form-control @error('proposal_link') is-invalid @enderror ifest-regist-form text-center" value="{{ old('proposal_link') }}" required autocomplete="proposal_link" autofocus placeholder="Insert Proposal Link">
            @error('proposal_link')
            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="row justify-content-center align-items-center" align="center" id="registCompButton" style="padding:30px 0 30px 0">
            <div class="col-4">
                <!-- VERTICAL ALIGN NYA BELOM JALAN -->
                <a class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" href="{{ route('profile.ticketDetailsTechnoWorkshop') }}" style="height:44px; width:128px;">{{ __('< Back') }}</a>
            </div>
            <div class="col-4">
                <button id="regist-next-section" type="submit" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" style="height:44px; width:128px">{{ __('Submit') }}</button>
            </div>
        </div>
    </div>
</form>
@endsection

@section('cp_registrasi')
<div class="row justify-content-center align-items-center" align="center" id="eventCP" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Contact Person</h1>
    <div class="col-2" style="padding-top: 30px;">
        <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;" onclick="window.location.href='https://wa.me/@yield('cp1_wa')';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
            <span>@yield('cp1_name')</span>
        </button>
    </div>
    <div class="col-2" style="padding-top: 30px;">
        <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;" onclick="window.location.href='https://wa.me/@yield('cp2_wa')';">
            <img class="logo-whatsapp" src="{{ URL::asset('icon/whatsapp.svg') }}" alt="whatsapp">
            <span>@yield('cp2_name')</span>
        </button>
    </div>
</div>
@endsection

@section('cp1_wa', '6287720201166')
@section('cp1_name', 'Jarwo 1')
@section('cp2_wa', '6287720201177')
@section('cp2_name', 'Jarwo 2')