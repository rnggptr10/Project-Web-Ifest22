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
        return view('competition.ctf');
    }

    public function registration()
    {
        $check = Ticket::where('email', Auth::user()->email)->first();

        // Error Handling
        if ($check->ctf_status != '0') {
            return redirect()->route('profile');
        }

        return view('registration.regis-ctf');
    }

    public function saveRegister(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'team_leader' => 'required',
            'team_leader_institute' => 'required',
            'team_leader_id_card' => 'required',
            'payment_confirmation' => 'required',
        ]);

        // Alamat penyimpanan payment proof
        $request->team_leader_id_card->store('id-card-ctf');
        $request->payment_confirmation->store('ctf-payment-proof');

        // =================================================
        // IF ELSE UNTUK 'IDCARD' DEFAULTNYA NONREQUIRED
        // =================================================

        // ID Card ADD Member 1
        if ($request->team_member_1_id_card == null) {
            $file_team_member_1 = null;
        } else {
            $file_team_member_1 = $request->team_member_1_id_card->store('id-card-ctf');
        }

        // id Card ADD Member 2
        if ($request->team_member_2_id_card == null) {
            $file_team_member_2 = null;
        } else {
            $file_team_member_2 = $request->team_member_2_id_card->store('id-card-ctf');
        }


        Ctf_form::create([
            'email' => Auth::user()->email,
            'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'team_leader_institute' => $request->team_leader_institute,
            'team_leader_id_card' => $request->team_leader_id_card->store('id-card-ctf'),
            'team_member_1' => $request->team_member_1,
            'team_member_1_institute' => $request->team_member_1_institute,
            'team_member_1_id_card' => $file_team_member_1,
            'team_member_2' => $request->team_member_2,
            'team_member_2_institute' => $request->team_member_2_institute,
            'team_member_2_id_card' => $file_team_member_2,
            'proof_payment' => $request->payment_confirmation->store('ctf-payment-proof'),
            'status_pembayaran' => 1, //
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'ctf_status' => '1'
        ]);

        return redirect()->route('profile');
    }
}
