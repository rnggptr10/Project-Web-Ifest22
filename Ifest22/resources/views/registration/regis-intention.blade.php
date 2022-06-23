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
<form action="{{route('intention.registration')}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf

    <div class="row mb-2">
        <label for="team_name" class="placeholder regist-form-text">{{ __('Team Name') }}</label>
        <input id="team_name" type="text" class="form-control @error('team_name') is-invalid @enderror ifest-regist-form" name="team_name" value="{{ old('team_name') }}" required autocomplete="team_name" autofocus>
        @error('team_name')
        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
        max-width: 333px; margin: 0 auto">
            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
            {{ $message }}
        </div>
        @enderror
    </div>         

    <div class="row mb-2 align-items-center">
        <div class="col-10 text-left">
            <label for="team_leader" class="placeholder regist-form-text">{{ __('Team Leader') }}</label>
            <input id="team_leader" type="text" class="form-control @error('team_leader') is-invalid @enderror ifest-regist-form" name="team_leader" value="{{ old('team_leader') }}" required autocomplete="team_leader" autofocus>
            @error('team_leader')
            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
            max-width: 333px; margin: 0 auto">
                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-2">
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

    <div class="row mb-2 justify-content-center">
        <button id="add-member" type="button" class="input-element-regis mt-3" style="background-color: #c4c4c4" onclick="openOptionalMem(1)">+</button>
    </div>

    <div class="row mb-2 justify-content-center text-left">
        <p>notes</p>
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

    <div class="row justify-content-center align-items-center" align="center" id="registCompButton" style="padding:30px 0 30px 0">
        <button class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold" href="">{{ __('< Back') }}</button>
        <button class="btn btn-primary ifest-btn-primary-dark-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold" href="">{{ __('Next') }}</button>
    </div>
</form>
@endsection

@section('regist-competition-js')
<script>
    let count = 3;
    const openOptionalMem = (category) => {
    // 1 for Intention
    // 2 for CTF
    // 3 for DA
    if (category === 1) {
        var numberOfMember = 5;
    } else if (category === 2) {
        var numberOfMember = 4;
    } else if (category === 3) {
        var numberOfMember = 4;
    } else {
        var numberOfMember = 4;
    }
    var input = document.createElement("input");
    var parent = document.getElementById("optional-member");
    var button = document.getElementById("add-member");
    input.setAttribute("type", "text");
    input.setAttribute("name", `team_member_${count}`);
    input.setAttribute("placeholder", `Member ${count}'s Name (Optional)`);
    input.setAttribute("class", "input-element-regis mt-3 dflex");
    parent.appendChild(input);
    count++;
    if (count === numberOfMember) {
        button.remove();
    }
};
</script>
@endsection
