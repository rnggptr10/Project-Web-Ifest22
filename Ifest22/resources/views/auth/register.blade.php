<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>IFest 2022 - Register Account</title>
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
                <p class="text-center text-greeting-med">Create Account</p>
                <p class="text-center text-greeting-desc">Enter your personal details and start journey with us </p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-2">
                        <label for="name" class="placeholder text-form">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror ifest-form" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-2">
                        <label for="email" class="placeholder text-form">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror ifest-form" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-2">
                        <label for="password" class="placeholder text-form">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror ifest-form" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-2">
                        <label for="password-confirm" class="placeholder text-form">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control ifest-form" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="row mb-2">
                        <label for="institute" class="placeholder text-form">{{ __('Institute') }}</label>
                        <input id="institute" type="text" class="form-control @error('institute') is-invalid @enderror ifest-form" name="institute" value="{{ old('institute') }}" required autocomplete="institute" autofocus disabled>
                        @error('institute')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-2">
                        <label for="profpic" class="placeholder text-form">{{ __('Profile Picture') }}</label>
                        <input id="profpic" type="text" class="form-control @error('profpic') is-invalid @enderror ifest-form" name="profpic" value="{{ old('profpic') }}" required autocomplete="profpic" autofocus disabled>
                        @error('profpic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group form-action-d-flex mb-3" style="margin-top:20px">
                        <button class="btn btn-outline-primary ifest-btn-outline-primary-light-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold" href="">{{ __('< Back') }}</button>
                        <button type="submit" class="btn btn-primary ifest-btn-primary-light-bg col-md-5 float-right mt-3 mt-sm-0 fw-bold">{{ __('Register') }}</button>
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