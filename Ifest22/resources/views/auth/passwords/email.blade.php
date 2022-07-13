@extends('auth.passwords.forgotPassword')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}">
@endsection
@section('title', 'Reset Password')
@section('form')

<form method="post" action="{{ route('password.email') }}" enctype="multipart/form-data">
    @csrf
    <!-- PAGE 1 -->
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div id="regist-section-1">
        <div class="row mb-2">
            <label for="email" class="placeholder regist-form-text" style="padding:0">{{ __('Email Address') }}</label>
            <!-- Insert Team Name -->
            <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror ifest-regist-form text-center" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Insert Your Email Address">
            @error('email')
            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col" style="padding-top:30px">
            <button type="submit" class="btn btn-primary" style="background-color: #8267B4; border:none;">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </div>
</form>
@endsection