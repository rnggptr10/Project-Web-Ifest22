<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\StartupDay1;
use Carbon\Carbon;

class StartupDay1Controller extends Controller
{
    public function isOpened()
    {
        return Carbon::now()->diffInSeconds(new Carbon('2021-08-21 00:00:00'), false) >= 0;
    }

    public function index()
    {
        // $registered = false;
        // $onLogin = false;

        // if (Auth::check()) {
        //     $data = Ticket::where('email', Auth::user()->email)->first();
        //     if ($data->startup_status != '0') $registered = true;
        //     $onLogin = true;
        // }

        // return view('events.startupTalk', compact('registered', 'onLogin'));
        return view('events.startupTalk');
    }

    public function registration()
    {
        // $check = Ticket::where('email', Auth::user()->email)->first();

        // if ($check->startup_status != '0') {
        //     return redirect()->route('profile');
        // }

        // return view('registration.regis-startup');
        return redirect()->route('startup');
    }

    public function saveRegisterDay1()
    {
        StartupDay1::create([
            'email' => Auth::user()->email,
            'name' => Auth::user()->name,
            'institute' => Auth::user()->institute,
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'startupDay1_status' => '1'
        ]);


        return redirect()->route('profile');
    }
}
