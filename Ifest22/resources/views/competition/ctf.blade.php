@extends('layouts.app')
@section('content')
<p>Halaman CTF</p>
<a href="">view Guidebook</a>
@guest
@if(Route::has('login'))
<a href="{{route('register')}}">Register Now</a>
@endif
@else
<a href="{{route('ctf.registration.view')}}">Register Now</a>
@endguest
@endsection