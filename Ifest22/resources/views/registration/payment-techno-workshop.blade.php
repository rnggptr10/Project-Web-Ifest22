<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - Technopreneur Workshop Payment</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}">

@extends('layouts.app')

@section('content')
<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 0; ">
        <div class="row">
            <div class="col" style="padding: 100px 0 50px 0;">
                <div class="row" align="center" id="technoWSPayment" style="padding-bottom: 30px;">
                    <div>
                        <h1 class="regist-text-title">Payment Form</h1>
                    </div>
                    <div style="padding-bottom: 10px;">
                        <h2 class="regist-text-desc">Technopreneur Workshop</h2>
                    </div>
                </div>

                <div class="row justify-content-center" align="center" id="technoWSPayment" style="padding-bottom: 30px;">
                    <div class="col-5">
                        <div class="row">
                            <form action="{{route('technoWorkshop.payment')}}" method="post" enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div id="regist-section-1">
                                    <div class="row">
                                        <h6 class="regist-text-subhead">Registration Payment</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="padding:10px 0 0 0">
                                            <div class="row" style="padding:0 0 5px 0">
                                                <p class="regist-form-text-payment-head" style="margin:0">Amount to pay :</p>
                                                <p class="regist-form-text-price">Rp.50000</p>
                                            </div>
                                            <div class="row" style="padding:5px 0 5px 0">
                                                <p class="regist-form-text-payment-head" style="margin:0">Payment Methods :</p>
                                                <p class="regist-form-text-payment">
                                                    • BCA : 5725562729 a.n. Sarah Khairunnisa Prihantoro<br>
                                                    • DANA : 081289516275 a.n. Sarah Khairunnisa Prihantoro
                                                </p>
                                            </div>
                                            <div class="row" style="padding-top:20px">
                                                <div class="container-upload dflex">
                                                    <label for="payment-confirmation" class="payment-upload d-flex justify-content-center align-items-center button-upload text-button-upload">
                                                        <span class="iconify me-2" data-icon="feather:upload" data-inline="false" style="color: #001d3d;"></span>
                                                        Upload Payment Proof
                                                    </label>
                                                    <input type="file" id="payment-confirmation" name="payment_confirmation" accept=".jpg, .png, .jpeg, .jfif" style="color:transparent" required hidden>
                                                </div>
                                                @error('payment_confirmation')
                                                <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%; margin: 0 auto">
                                                    <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row justify-content-center align-items-center" align="center" id="registCompButton2" style="padding:30px 0 30px 0">
                                                <div class="col-4">
                                                    <a class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" style="height:44px; width:128px;" href="{{ route('profile.ticketDetailsTechnoWorkshop') }}">{{ __('< Back') }}</a>
                                                </div>
                                                <div class="col-4">
                                                    <button id="regist-submit-regist" type="submit" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" style="height:44px; width:128px">{{ __('Submit') }}</button>
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