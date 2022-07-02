@extends('registration.regis-competition')

@section('regist_competition_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}">
@endsection

@section('regist_competition_webtitle', 'INTENTION')

@section('regist_competition_title', 'Innovative Technology Competition (INTENTION)')

@section('regist-competition-form')
<!-- PAGE 1 -->
<div id="regist-section-1">
    <div class="row mb-2">
        <label for="team_name" class="placeholder regist-form-text" style="padding:0">{{ __('Team Name') }}</label>
        <input id="team_name" type="text" class="form-control @error('team_name') is-invalid @enderror ifest-regist-form" name="team_name" value="{{ old('team_name') }}" required autocomplete="team_name" autofocus>
        @error('team_name')
        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
            {{ $message }}
        </div>
        @enderror
    </div>

    <!-- TEAM LEADER -->
    <div class="row mb-2 align-items-center">
        <div class="col">
            <div class="row" align="left">
                <h5 class="placeholder regist-form-text" style="padding:0">Team Leader</h5>
            </div>
            <div class="row">
                <div class="col-10 text-left" style="padding:0">
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row mb-2">
                        <div class="col">
                            <input type="file" id="id_card" name="id_card" accept=".png" value="+ ID Card" style="color:transparent">
                            @error('id_card')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input type="file" id="id_card" name="id_card" accept=".png" value="+ ID Card" style="color:transparent">
                            @error('id_card')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TEAM MEMBER 1 -->
    <div class="row mb-2 align-items-center">
        <div class="col">
            <div class="row" align="left">
                <h5 class="placeholder regist-form-text" style="padding:0">Team Member 1</h5>
            </div>
            <div class="row">
                <div class="col-10 text-left" style="padding:0">
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row mb-2">
                        <div class="col">
                            <input type="file" id="id_card" name="id_card" accept=".png" value="+ ID Card" style="color:transparent">
                            @error('id_card')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- KLO BLM UPLOAD CUMA 1 BUTTON -->
                    <!-- <div class="row mb-2">
                        <div class="col">
                            <input type="file" id="id_card" name="id_card" accept=".png" value="+ ID Card" style="color:transparent">
                            @error('id_card')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- TEAM MEMBER 2 -->
    <div class="row mb-2 align-items-center">
        <div class="col">
            <div class="row" align="left">
                <h5 class="placeholder regist-form-text" style="padding:0">Team Member 2</h5>
            </div>
            <div class="row">
                <div class="col-10 text-left" style="padding:0">
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row mb-2">
                        <div class="col">
                            <input type="file" id="id_card" name="id_card" accept=".png" value="+ ID Card" style="color:transparent">
                            @error('id_card')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- KLO BLM UPLOAD CUMA 1 BUTTON -->
                    <!-- <div class="row mb-2">
                        <div class="col">
                            <input type="file" id="id_card" name="id_card" accept=".png" value="+ ID Card" style="color:transparent">
                            @error('id_card')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- ADD MEMBER -->
    <div class="row mb-2">
        <div class="col-10" style="padding:0">
            <button id="add-member" type="button" class="input-element-regis mt-3" style="background-color: #c4c4c4; width:100%;" onclick="openOptionalMem(1)">+</button>
        </div>
    </div>

    <!-- <div class="mt-4 upload-idcard-regis">
        <label for="id_card" class="file-upload d-flex justify-content-center align-items-center">
            <span class="iconify me-2" data-icon="feather:upload" data-inline="false" style="color: #001d3d;">
            </span> Upload ID-Card (ZIP File)
        </label>
        <br>
        <input type="file" id="id_card" name="id_card" accept=".zip">
        <div id="idcard-chosen" class="text-center">No file chosen</div>
    </div>
    <div class="hint hint-file hint-file-regis">
        <p>ID-card file size limit to 2MB</p>
    </div>
    @error('id_card')
    <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
    max-width: 333px; margin: 0 auto">
        <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
        {{ $message }}
    </div>
    @enderror -->

    <div class="row mb-2 text-left">
        <div class="col" style="padding:0">
            <p class="regist-form-notes-text">
                Notes :<br>
                • ID Card hanya dapat berbentuk KTP, KTM, SIM, dan Paspor.<br>
                • Scan/Foto ID Card harus jelas.<br>
                • Apabila tidak memenuhi 2 poin diatas, maka pendaftaran ditolak.
            </p>
        </div>
    </div>

    <div class="row justify-content-center align-items-center" align="center" id="registCompButton" style="padding:30px 0 30px 0">
        <div class="col-4">
            <!-- VERTICAL ALIGN NYA BELOM JALAN -->
            <a class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" href="{{ route('intention') }}" style="height:44px; width:128px;">{{ __('< Back') }}</a>
        </div>
        <div class="col-4">
            <button id="regist-next-section" type="button" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" onclick="registNextSection()" style="height:44px; width:128px">{{ __('Next') }}</button>
        </div>
    </div>
</div>

<!-- PAGE 2 -->
<div id="regist-section-2" hidden>
    <div class="row">
        <h6 class="regist-text-subhead">Informasi Tim</h6>
    </div>
    <div class="row mb-2">
        <label for="team_name" class="placeholder regist-form-text" style="padding:0">{{ __('Team Name') }}</label>
        <input id="team_name" type="text" class="form-control @error('team_name') is-invalid @enderror ifest-regist-form" name="team_name" value="{{ old('team_name') }}" disabled autocomplete="team_name" autofocus>
        @error('team_name')
        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="row mb-2 align-items-center">
        <div class="col">
            <div class="row" align="left">
                <h5 class="placeholder regist-form-text" style="padding:10px 0 10px 0">Team Leader</h5>
            </div>
            <div class="row">
                <div class="col-10 text-left" style="padding:0">
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" disabled autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" disabled autocomplete="team_leader" autofocus>
                            @error('team_leader')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row mb-2">
                        <div class="col">
                            <input type="file" id="id_card" name="id_card" accept=".png" value="+ ID Card" style="color:transparent" disabled>
                            @error('id_card')
                            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
                            max-width: 333px; margin: 0 auto">
                                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h6 class="regist-text-subhead">Registration Payment</h6>
    </div>
    <div class="row">
        <div class="col">
            <div class="row" style="padding:0 0 5px 0">
                <p class="regist-form-text-payment-head">Amount to pay :</p>
                <p class="regist-form-text-price">Rp.150000</p>
            </div>
            <div class="row" style="padding:5px 0 5px 0">
                <p class="regist-form-text-payment-head">Payment Methods :</p>
                <p class="regist-form-text-payment">BRI : 1212434343 a.n. Protprot</p>
                <p class="regist-form-text-payment">BNI : 1392832983 a.n. Protprot</p>
            </div>
            <div class="row">
                <div class="container-upload dflex">
                    <label for="payment-confirmation" class="payment-upload d-flex justify-content-center align-items-center">
                        <span class="iconify me-2" data-icon="feather:upload" data-inline="false" style="color: #001d3d;"></span>
                        Upload Payment Proof
                    </label>
                    <input type="file" id="payment-confirmation" name="payment_confirmation" accept=".jpg, .png, .jpeg" style="color:transparent">
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
                    <!-- VERTICAL ALIGN NYA BELOM JALAN -->
                    <a class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" onclick="backToSection1()"  style="height:44px; width:128px;">{{ __('< Back') }}</a>
                </div>
                <div class="col-4">
                    <button id="regist-submit-regist" type="submit" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" onclick="registNextSection()" style="height:44px; width:128px" disabled>{{ __('Submit') }}</button>
                </div>
            </div>
        </div>
    </div> 
</div>
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