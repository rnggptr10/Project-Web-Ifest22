<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>IFest 2022 - Edit Profile</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('img/logo/logo_nav.png') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atlantis/css/atlantis.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
</head>

<body class="login">
    <div class="wrapper wrapper-login wrapper-login-full p-0" style="background-color: #1c1c1c;">
        <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center">
            <div>
                <img src="{{ asset('img/logo/logopurple.png') }}" alt="" style="width: 60%; height:auto;">
            </div>
        </div>
        <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
            <div class="container container-login container-transparent animated fadeIn">
                <p class="text-center text-greeting-med">Edit Profile</p>
                <form class="user-data mt-4" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row mb-2 data-item">
                        <label for="email" class="placeholder text-form">{{ __('Email') }}</label>
                        <input id="email" type="email" disabled value="{{ $data->email }}" class="form-control ifest-form" name="email">
                    </div>
                    <div class="row mb-2 data-item">
                        <label for="name" class="placeholder text-form">{{ __('Name') }}</label>
                        <input id="name" type="text" value="{{ $data->name }}" class="form-control ifest-form" name="name">
                        @error('name')
                        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert">
                            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-2 data-item">
                        <label for="institute" class="placeholder text-form">{{ __('Institute') }}</label>
                        <input id="institute" type="text" value="{{ $data->institute }}" class="form-control ifest-form" name="institute">
                        @error('institute')
                        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert">
                            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-2 data-item" style="margin-top:20px">
                        <label for="profpic" class="d-flex justify-content-center align-items-center placeholder text-form button-upload text-button-upload">{{ __('Change Profile Picture?') }}</label>
                        <input id="profpic" name="profpic" type="file" value="{{ $data->image }}" class="form-control ifest-form" accept=".jpg, .png, .jpeg" style="color:transparent" hidden>
                        @error('profpic')
                        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert">
                            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-2 data-item" style="margin-top:20px">
                        <label for="password" class="d-flex justify-content-center align-items-center placeholder text-form button-upload text-button-upload"><a class="text-button-href" href="{{route('profile.edit.password')}}">{{ __('Change Password?') }}</a></label>
                        <input id="password" name="password"  class="form-control ifest-form" style="color:transparent" hidden>
                    </div>

                    <div class="form-group form-action-d-flex mb-3 justify-content-center" style="margin-top:20px">
                        <button type="submit" class="btn btn-primary ifest-btn-primary-light-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold">{{ __('Save Changes') }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/atlantis.min.js') }}"></script>
</body>

</html>