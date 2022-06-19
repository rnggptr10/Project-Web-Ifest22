@extends('layouts.app')
@section('content')
<p>Halaman Intention</p>
<a href="">view Guidebook</a>
@guest
@if(Route::has('login'))
<a href="{{route('register')}}">Register Now</a>
@endif
@else
<a href="{{route('intention.registration.view')}}">Register Now</a>
@endguest
@endsection