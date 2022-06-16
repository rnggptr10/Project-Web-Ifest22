<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Startup;
use Carbon\Carbon;

class StartupController extends Controller
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

    public function saveRegister(Request $request)
    {
        $request->validate([
            'payment_confirmation' => 'required|image|max:1024',
        ]);

        $payment_confirmation = $request->file('payment_confirmation');
        $name_payment_confirmation = time() . "_" . $payment_confirmation->getClientOriginalName();
        $payment_confirmation->storeAs('public/images/payment_confirmation/startup/', $name_payment_confirmation);

        $email = Auth::user()->email;

        Ticket::where('email', $email)->update([
            'startup_status' => '1'
        ]);

        Startup::create([
            'email' => $email,
            'proof_payment' => $name_payment_confirmation,
        ]);

        return redirect()->route('profile')->with('status', 'Registration Completed!');
    }
}
