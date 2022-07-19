<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - Seminar Nasional Payment</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}">

@extends('layouts.app')

@section('content')

<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 30px 0 100px 0; ">
        <div class="row">
            <div class="col" style="padding: 100px 0 50px 0;">
                <div class="row" align="center" id="technoWSPayment" style="padding-bottom: 30px;">
                    <div>
                        <h1 class="regist-text-title">Registration Form</h1>
                    </div>
                    <div style="padding-bottom: 10px;">
                        <h2 class="regist-text-desc">Seminar Nasional - Presenter</h2>
                    </div>
                </div>

                <div class="row justify-content-center" align="center" id="technoWSPayment" style="padding-bottom: 30px;">
                    <div class="col-5">
                        <div class="row">
                            <form action="{{route('semnas.presenter.registration')}}" method="post" enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div id="regist-section-1">
                                    <div class="row mb-2" style="padding-bottom:20px">
                                        <label for="abstract_link" class="placeholder regist-form-text" style="padding:0">{{ __('Abstract Link') }}</label>
                                        <input id="abstract_link" name="abstract_link" type="text" class="form-control @error('abstract_link') is-invalid @enderror ifest-regist-form text-center" value="{{ old('abstract_link') }}" required autocomplete="abstract_link" autofocus placeholder="Insert Abstract Link">
                                        @error('abstract_link')
                                        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                                        max-width: 333px; margin: 0 auto">
                                            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="row justify-content-center align-items-center" align="center" id="registCompButton" style="padding:30px 0 30px 0">
                                                <div class="col-4">
                                                    <!-- VERTICAL ALIGN NYA BELOM JALAN -->
                                                    <a class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" href="{{ route('semnas') }}" style="height:44px; width:128px;">{{ __('< Back') }}</a>
                                                </div>
                                                <div class="col-4">
                                                    <button id="regist-next-section" type="submit" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" style="height:44px; width:128px">{{ __('Submit') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

<script src="{{ asset('js/regist-competition-js.js')}}"></script>