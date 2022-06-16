<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ctf_form;
use App\Models\Ticket;

class CtfController extends Controller
{
    public function index()
    {
        // $registered = false;
        // $onLogin = false;

        // if (Auth::check()) {
        //     $data = Ticket::where('email', Auth::user()->email)->first();
        //     if ($data->ctf_status != '0') $registered = true;
        //     $onLogin = true;
        // }

        // return view('competition.ctf', compact('registered', 'onLogin'));
        return view('competition.ctf');
    }

    public function registration()
    {
        // $email = Auth::user()->email;
        // $check = Ticket::where('email', $email)->first();
        // if($check->ctf_status != '0'){
        //     return redirect()->route('profile');
        // }

        // return view('registration.regis-ctf');
        return redirect()->route('ctf');
    }

    public function saveRegister(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'team_leader' => 'required',
            'id_card' => 'required|file|mimes:zip|max:2000',
            'payment_confirmation' => 'required|image|max:1024',
        ]);

        $id_card = $request->file('id_card');
        $name_id_card = time() . "_" . $id_card->getClientOriginalName();
        $id_card->storeAs('public/images/id_card/ctf/', $name_id_card);

        $payment_confirmation = $request->file('payment_confirmation');
        $name_payment_confirmation = time() . "_" . $payment_confirmation->getClientOriginalName();
        $payment_confirmation->storeAs('public/images/payment_confirmation/ctf/', $name_payment_confirmation);

        Ctf_form::create([
            'email' => Auth::user()->email,
            'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'team_member_1' => $request->team_member_1,
            'team_member_2' => $request->team_member_2,
            'id_card' => $name_id_card,
            'proof_payment' => $name_payment_confirmation,
        ]);
        Ticket::where('email', Auth::user()->email)->update([
            'ctf_status' => '1'
        ]);

        return redirect()->route('profile')->with('status', 'Registration Completed!');
    }
}
