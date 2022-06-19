@extends('layouts.app')
@section('content')
<h3>Registration DAC</h3>
<form action="{{route('dac.registration')}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div id="regis-section-1" class="dflex flex-column">
        <input type="text" name="team_name" placeholder="Team Name" class="input-element-regis" required>
        <br>
        @error('team_name')
        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
    max-width: 333px; margin: 0 auto">
            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
            {{ $message }}
        </div>
        @enderror
        <input type="text" name="team_leader" placeholder="Leader's Name" class="input-element-regis mt-3" required>
        @error('team_leader')
        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%;
    max-width: 333px; margin: 0 auto">
            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
            {{ $message }}
        </div>
        @enderror
        <br>
        <input type="text" name="team_member_1" placeholder="Member 1's Name (optional)" class="input-element-regis mt-3">
        <br>
        <input type="text" name="team_member_2" placeholder="Member 2's Name (optional)" class="input-element-regis mt-3">
        <br>
        <div class="mt-4 upload-idcard-regis">
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
        @enderror

        <button class="btn-submit-regis mt-4" type="submit">Submit</button>
    </div>
</form>
@endsection