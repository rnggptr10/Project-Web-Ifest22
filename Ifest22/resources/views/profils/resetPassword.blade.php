<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>IFest 2022 - Edit Profile</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

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
                <form class="user-data mt-4" method="post" action="{{route('profile.update.password')}}">
                    @method('patch')
                    @csrf
                    <div class="row mb-2 data-item">
                        <label for="old_password" class="placeholder text-form">{{ __('Old Password') }}</label>
                        <input id="old_password" type="password" value="{{ old('old_password') }}" class="form-control ifest-form" name="old_password" required>
                        @error('old_password')
                        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert">
                            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-2 data-item">
                        <label for="new_password" class="placeholder text-form">{{ __('New Password') }}</label>
                        <input id="new_password" type="password" value="{{ old('new_password') }}" class="form-control ifest-form" name="new_password" required>
                        @error('new_password')
                        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert">
                            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-2 data-item">
                        <label for="confirm_password" class="placeholder text-form">{{ __('Confirm Password') }}</label>
                        <input id="confirm_password" type="password" value="{{ old('confirm_password') }}" class="form-control ifest-form" name="confirm_password" required>
                        @error('confirm_password')
                        <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert">
                            <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                            {{ $message }}
                        </div>
                        @enderror
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