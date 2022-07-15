@extends('registration.payment-resubmit.payment-resubmit')

@section('title', 'INTENTION')

@section('form')
<form action="{{ route('intention.resubmit.payment') }}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div id="regist-section-1">
        <div class="row">
            <h6 class="regist-text-subhead">Re-Submit Payment</h6>
        </div>
        <div class="row">
            <div class="col">
                <div class="row" style="padding:0 0 5px 0">
                    <p class="regist-form-text-payment-head">Amount to pay :</p>
                    <p class="regist-form-text-price">Rp.50000</p>
                </div>
                <div class="row" style="padding:5px 0 5px 0">
                    <p class="regist-form-text-payment-head">Payment Methods :</p>
                    <p class="regist-form-text-payment">BRI : 1212434343 a.n. Protprot</p>
                    <p class="regist-form-text-payment">BNI : 1392832983 a.n. Protprot</p>
                </div>
                <div class="row" style="padding-top:20px">
                    <div class="container-upload dflex">
                        <label for="payment_confirmation" class="payment-upload d-flex justify-content-center align-items-center button-upload text-button-upload">
                            <span class="iconify me-2" data-icon="feather:upload" data-inline="false" style="color: #001d3d;"></span>
                            Upload Payment Proof
                        </label>
                        <input type="file" id="payment_confirmation" name="payment_confirmation" accept=".jpg, .png, .jpeg" style="color:transparent" required hidden>
                    </div>
                    @error('payment_confirmation')
                    <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%; margin: 0 auto">
                        <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row justify-content-center align-items-center" align="center" id="registCompButton2" style="padding:30px 0 30px 0; text-align:center;">
                    <div class="col">
                        <button class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" style="height:44px; width:128px;"><a class="ifest-btn-primary-dark-bg-text" href="{{ route('profile.ticketDetailsIntention') }}">{{ __('< Back') }}</a></button>
                    </div>
                    <div class="col">
                        <button id="regist-submit-regist" type="submit" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" style="height:44px; width:128px">{{ __('Submit') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
