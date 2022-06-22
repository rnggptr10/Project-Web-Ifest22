@extends('layouts.app')
@section('content')
<div>
    <p>Halaman Profile</p>
    <input type="email" disabled value="{{ $data->email }}"><br>
    <input type="text" disabled value="{{ $data->name }}" name="name"><br>
    <a href="{{ route('profile.edit') }}">Edit</a>
    <a href="">Ganti Password</a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <!-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a> -->

        <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form> -->
    </div>
</div>

<div>
    <p>Your Tickets</p>
</div>
@endsection