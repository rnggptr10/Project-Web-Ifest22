@extends('registration.regis-competition')

@section('regist_competition_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}">
@endsection
@section('regist_competition_title', 'Reset Password')
@section('regist-competition-form')

<form method="post" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div id="regist-section-1">
        <div class="row mb-2">
            <label for="email" class="placeholder regist-form-text" style="padding:0">{{ __('Email Address') }}</label>
            <!-- Insert Team Name -->
            <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror ifest-regist-form text-center" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
            @error('email')
            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                {{ $message }}
            </div>
            @enderror
            <label for="password" class="placeholder regist-form-text" style="padding:0">{{ __('Password') }}</label>
            <!-- Insert Team Name -->
            <input id="password" name="password" type="text" class="form-control @error('password') is-invalid @enderror ifest-regist-form text-center" required autocomplete="new-password" autofocus>
            @error('password')
            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                {{ $message }}
            </div>
            @enderror
            <label for="password-confirm" class="placeholder regist-form-text" style="padding:0">{{ __('Confirm Password') }}</label>
            <!-- Insert Team Name -->
            <input id="password-confirm" name="password_confirmation" type="text" class="form-control @error('password-confirm') is-invalid @enderror ifest-regist-form text-center" required autocomplete="new-confirm" autofocus>
            @error('password-confirm')
            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary" style="background-color: #8267B4; border:none;">
                {{ __('Reset Password') }}
            </button>
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