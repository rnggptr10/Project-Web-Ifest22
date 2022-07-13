<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - @yield('webtitle') Registration</title>

@yield('head')

@extends('layouts.app')

@section('content')

<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 0; padding-bottom:6% ">
        <div class="row">
            <div class="col" style="padding: 100px 0 50px 0;">
                <div class="row" align="center" id="intRegistDescription" style="padding-bottom: 30px;">
                    <div>
                        <h1 class="regist-text-title">@yield('title')</h1>
                    </div>
                </div>

                <div class="row justify-content-center" align="center" id="intRegistDescription" style="padding: 30px 0 30px 0">
                    <div class="col-5">
                        <div class="row">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

<script src="{{ asset('js/regist-competition-js.js')}}"></script>