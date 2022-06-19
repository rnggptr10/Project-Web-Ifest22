@extends('layouts.app')
@section('content')
<h3>Registration Capture The Flag</h3>
<form action="{{route('ctf.registration')}}" method="post" enctype="multipart/form-data">
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

    <!-- <div id="regis-section-2" hidden>
        <p>Amount of payment <span class="price"><strong class="contrast">: Rp. 100.000,00-</strong></span></p>
        <p style="margin-top: 2rem;margin-bottom: 0">
            Please transfer to the following bank account:<br>
            Bank Mandiri : 1340018620939 a/n Anggie Forestry<br>
            DANA/OVO/Gopay : 081224013119 a/n Anggie Forestry <br> <br>
        </p>
        <ul class="cp-regis-intention">
            <li class="desc-cp">
                <p>
                    Rheza Pandya Andhikaputra<br>
                    WA : <a href="https://wa.me/6287720201166" target="_blank">087720201166</a> <br>
                    Line : <a href="https://line.me/ti/p/~rhezapandya" target="_blank">rhezapandya</a> <br>
                    Email : <a href="mailto:rhezapandyaa@gmail.com" target="_blank">rhezapandyaa@gmail.com</a>
                </p>
            </li>
            <li class="desc-cp">
                <p>
                    M. Attila An Naufal<br>
                    WA : <a href="https://wa.me/6285252709071" target="_blank">085252709071</a> <br>
                    Line : <a href="https://line.me/ti/p/~annaufal112" target="_blank">annaufal112</a> <br>
                    Email : <a href="mailto:attilanfl14@gmail.com" target="_blank">attilanfl14@gmail.com</a>
                </p>
            </li>
        </ul>
        <div class="container-upload dflex">
            <label for="payment-confirmation" class="payment-upload d-flex justify-content-center align-items-center">
                <span class="iconify me-2" data-icon="feather:upload" data-inline="false" style="color: #001d3d;"></span>
                Upload Payment Proof
            </label>
            <input type="file" id="payment-confirmation" name="payment_confirmation" accept=".jpg, .png, .jpeg">
            <span id="payment-chosen" class="payment-chosen">No File Choosen</span>
        </div>
        <div class="hint hint-file" style="text-align: center; margin-top: 12px;">
            <p>Payment proof file size limit to 1MB</p>
        </div>
        @error('payment_confirmation')
        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert" style="width: 100%; margin: 0 auto">
            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
            {{ $message }}
        </div>
        @enderror
        <button class="btn-submit-regis mt-4" type="submit">Submit</button>
    </div> -->
</form>
@endsection