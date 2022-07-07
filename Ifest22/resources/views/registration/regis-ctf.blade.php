@extends('registration.regis-competition')

@section('regist_competition_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}">
@endsection

@section('regist_competition_webtitle', 'Capture The Flag')

@section('regist_competition_title', 'Capture The Flag')

@section('regist_action_form', "{{route('ctf.registration')}}")

@section('regist-competition-form')

<form method="post" action="{{ route('ctf.registration') }}" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <!-- PAGE 1 -->
    <div id="regist-section-1">
        <div class="row mb-2">
            <label for="team_name" class="placeholder regist-form-text" style="padding:0">{{ __('Team Name') }}</label>
            <!-- Insert Team Name -->
            <input id="team_name" name="team_name" type="text" class="form-control @error('team_name') is-invalid @enderror ifest-regist-form text-center" name="team_name" value="{{ old('team_name') }}" required autocomplete="team_name" autofocus placeholder="Insert Team Name">
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
                                <!-- Input Team Leader -->
                                <input id="team_leader" name="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form text-center" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus placeholder="Insert Name">
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
                                <!-- Input Team Leader Institute -->
                                <input id="team_leader_institute" name="team_leader_institute" type="text" class="form-control @error('team_leader_institute') is-invalid @enderror ifest-regist-form text-center" value="{{ old('team_leader_institute') }}" required autocomplete="team_leader_institute" autofocus placeholder="Insert Institute">
                                @error('team_leader_institute')
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
                                <label class="button-upload text-button-upload" for="team_leader_id">+ ID Card</label>
                                <input type="file" id="team_leader_id" accept=".png" style="color:transparent" hidden>
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

        <!-- Add 2 Member -->
        <!-- 1 -->
        <div id="addmember1" class="row-addmember mb-2 align-items-center">
            <div class="col">
                <div class="row" align="left">
                    <h5 class="placeholder regist-form-text" style="padding:0">Team Member 1</h5>
                </div>
                <div class="row">
                    <div class="col-10 text-left" style="padding:0">
                        <div class="row mb-2">
                            <div class="col">
                                <input id="team_member_1" name="team_member_1" type="text" class="form-control @error('team_member_1') is-invalid @enderror ifest-regist-form text-center" value="{{ old('team_member_1') }}" autocomplete="team_member_1" autofocus placeholder="Insert Name">
                                @error('team_member_1')
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
                                <input id="team_member_1_institute" name="team_member_1_institute" type="text" class="form-control @error('team_member_1_institute') is-invalid @enderror ifest-regist-form text-center" value="{{ old('team_member_1_institute') }}" autocomplete="team_leader" autofocus placeholder="Insert Institute">
                                @error('team_member_1_institute')
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
                                <label class="button-upload text-button-upload" for="team_member_1_id">+ ID Card</label>
                                <input type="file" id="team_member_1_id" accept=".png" style="color:transparent" hidden>
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

        <!-- 2 -->
        <div id="addmember2" class="row-addmember mb-2 align-items-center">
            <div class="col">
                <div class="row" align="left">
                    <h5 class="placeholder regist-form-text" style="padding:0">Team Member 2</h5>
                </div>
                <div class="row">
                    <div class="col-10 text-left" style="padding:0">
                        <div class="row mb-2">
                            <div class="col">
                                <input id="team_member_2" name="team_member_2" type="text" class="form-control @error('team_member_2') is-invalid @enderror ifest-regist-form text-center" value="{{ old('team_member_2') }}" autocomplete="team_member_2" autofocus placeholder="Insert Name">
                                @error('team_member_2')
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
                                <input id="team_member_2_institute" name="team_member_2_institute" type="text" class="form-control @error('team_member_2_institute') is-invalid @enderror ifest-regist-form text-center" value="{{ old('team_member_2_institute') }}" autocomplete="team_member_2_institute" autofocus placeholder="Insert Institute">
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
                                <label class="button-upload text-button-upload" for="team_member_2_id">+ ID Card</label>
                                <input type="file" id="team_member_2_id" accept=".png" style="color:transparent" hidden>
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
                <button id="btn-addRegisCTF" type="button" class="input-element-regis mt-3" onclick="AddMember('addmember1', 'btn-addRegisCTF', 'btn-removeRegisCTF')">+</button>
            </div>

            <!-- Button Remove Member -->
            <div class="col-10" style="padding:0">
                <button id="btn-removeRegisCTF" type="button" class="input-element-regis mt-3" onclick="RemoveMember('addmember1', 'btn-addRegisCTF', 'btn-removeRegisCTF')" style="display:none">-</button>
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

        <div class="row justify-content-center align-items-center" align="center" id="registCompButton" style="padding:30px 0 30px 0; text-align:center;">
            <div class="col">
                <!-- VERTICAL ALIGN NYA BELOM JALAN -->
                <button class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" style="height:44px; width:128px;"><a class="ifest-btn-primary-dark-bg-text" href="{{ route('ctf') }}">{{ __('< Back') }}</a></button>
            </div>
            <div class="col">
                <button id="regist-next-section" type="button" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" onclick="registNextSection()" style="height:44px; width:128px">{{ __('Next') }}</button>
                <!-- <button id="regist-submit-regist" type="submit" class="btn btn-primary ifest-btn-primary-dark-bg mt-3 mt-sm-0 fw-bold" style="height:44px; width:128px">{{ __('Submit') }}</button> -->

            </div>
        </div>
    </div>

    <!-- PAGE 2 -->
    <div id="regist-section-2" hidden>
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
                    <p class="regist-form-text-payment">BRI : 1212434343 a.n. Protprot<br>
                                                        BNI : 1392832983 a.n. Protprot</p>
                </div>
                <div class="row" style="padding-top:20px">
                    <div class="container-upload dflex">
                        <label for="payment-confirmation" class="payment-upload d-flex justify-content-center align-items-center button-upload text-button-upload">
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
                        <!-- VERTICAL ALIGN NYA BELOM JALAN -->
                        <button class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg mt-3 mt-sm-0 fw-bold text-center" style="height:44px; width:128px;"><a class="ifest-btn-primary-dark-bg-text" onclick="backToSection1()">{{ __('< Back') }}</a></button>
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