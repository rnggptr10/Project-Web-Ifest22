<!DOCTYPE html>
<html lang="en">

<title>IFest 2022 - @yield('regist_competition_webtitle') Registration</title>

@yield('regist_competition_head')

@extends('layouts.app')

@section('content')

<body style="background-color: #1c1c1c;">
    <div class="container" style="padding: 0; ">
        <div class="row">
            <div class="col" style="padding: 20px 0 20px 0;">
                <div class="row" align="center" id="intRegistDescription" style="padding-bottom: 30px;">
                    <div>
                        <h1 class="regist-text-title">Registration Form</h1>
                    </div>
                    <div style="padding-bottom: 10px;">
                        <h2 class="regist-text-desc">@yield('regist_competition_title')</h2>
                    </div>
                </div>

                <div class="row justify-content-center" align="center" id="intRegistDescription" style="padding-bottom: 30px;">
                    <div class="col-5">
                        <div class="row">
                            <form action="{{route('intention.registration')}}" method="post" enctype="multipart/form-data">
                                @method('patch')
                                @csrf

                                @yield('regist-competition-form')
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