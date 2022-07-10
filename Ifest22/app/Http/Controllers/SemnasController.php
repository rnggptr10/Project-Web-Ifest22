<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Semnas;

class SemnasController extends Controller
{
    public function index()
    {
        // $registered = false;
        // $onLogin = false;

        // if (Auth::check()) {
        //     $data = Ticket::where('email', Auth::user()->email)->first();
        //     if ($data->incon_status != '0') $registered = true;
        //     $onLogin = true;
        // }

        // return view('events.incon', compact('registered', 'onLogin'));
        return view('events.semnas');
    }

    public function registration()
    {
        $check = Ticket::where('email', Auth::user()->email)->first();

        // Error Handling
        if ($check->semnas_status != '0') {
            return redirect()->route('profile');
        }

        return view('registration.regis-semnas');
    }

    public function saveRegister(Request $request)
    {
        $request->validate([
            'payment_confirmation' => 'required|image|max:1024',
        ]);

        // Alamat Penyimpanan 
        $request->payment_confirmation->store('semnas-payment-proof');


        Semnas::create([
            'email' => Auth::user()->email,
            'name' => Auth::user()->name,
            'institute' => Auth::user()->institute,
            'proof_payment' => $request->payment_confirmation->store('semnas-payment-proof'),
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'semnas_status' => '1'
        ]);

        return redirect()->route('profile');
    }
}
