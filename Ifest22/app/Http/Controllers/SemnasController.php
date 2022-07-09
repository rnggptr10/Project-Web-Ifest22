<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Incon;
use App\Models\Profile;

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
        return view('events.incon');
    }

    public function registration()
    {
        $check = Ticket::where('email', Auth::user()->email)->first();

        if ($check->incon_status != '0') {
            return redirect()->route('profile');
        }

        return view('registration.regis-incon');
    }

    public function saveRegister(Request $request)
    {
        $request->validate([
            'id_card' => 'required|image|max:1024',
            'payment_confirmation' => 'required|image|max:1024',
        ]);

        $id_card = $request->file('id_card');
        $name_id_card = time() . "_" . $id_card->getClientOriginalName();
        $id_card->storeAs('public/images/id_card/', $name_id_card);

        $payment_confirmation = $request->file('payment_confirmation');
        $name_payment_confirmation = time() . "_" . $payment_confirmation->getClientOriginalName();
        $payment_confirmation->storeAs('public/images/payment_confirmation/incon/', $name_payment_confirmation);


        $email = Auth::user()->email;
        Profile::where('email', $email)->update([
            'id_card' => $name_id_card
        ]);

        Ticket::where('email', $email)->update([
            'incon_status' => '1'
        ]);

        Incon::create([
            'email' => $email,
            'proof_payment' => $name_payment_confirmation,
        ]);

        return redirect()->route('profile')->with('status', 'Registration Completed!');
    }
}
