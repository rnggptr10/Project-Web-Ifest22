<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - @yield('competition_webtitle') Submission</title>

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
                <div class="row" align="center" id="intSubmissionDescription" style="padding-bottom: 30px;">
                    <div>
                        <h1 class="regist-text-title">Submission Form</h1>
                    </div>
                    <div style="padding-bottom: 10px;">
                        <h2 class="regist-text-desc">@yield('competition_title')</h2>
                    </div>
                </div>

                <div class="row justify-content-center" align="center" id="intSubmissionDescription" style="padding-bottom: 30px;">
                    <div class="col-5">
                        <div class="row">
                            <form action="@yield('regist_action_form')" method="post" enctype="multipart/form-data">
                                @method('patch')
                                @csrf

                                @yield('competition-form')
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