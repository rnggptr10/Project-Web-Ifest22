<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Da_form;
use App\Models\Ticket;

class DataAnalysisController extends Controller
{
    public function index()
    {
        // $registered = false;
        // $onLogin = false;

        // if (Auth::check()) {
        //     $data = Ticket::where('email', Auth::user()->email)->first();
        //     if ($data->da_status != '0') $registered = true;
        //     $onLogin = true;
        // }

        // return view('competition.dataAnalysis', compact('registered', 'onLogin'));
        return view('competition.dataAnalysis');
    }

    public function registration()
    {
        $check = Ticket::where('email', Auth::user()->email)->first();

        // Error Handling
        if ($check->da_status != '0') {
            return redirect()->route('profile');
        }

        return view('registration.regis-da');
    }

    public function saveRegister(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'team_leader' => 'required',
            'team_leader_institute' => 'required',
            'team_leader_id_card' => 'required',
            'team_member_1' => 'required',
            'team_member_1_institute' => 'required',
            'team_member_1_id_card' => 'required',
            'team_member_2' => 'required',
            'team_member_2_institute' => 'required',
            'team_member_2_id_card' => 'required',
            'payment_confirmation' => 'required',
        ]);

        // Alamat penyimpanan payment proof
        $request->team_leader_id_card->store('id-card-dac');
        $request->team_member_1_id_card->store('id-card-dac');
        $request->team_member_2_id_card->store('id-card-dac');
        $request->payment_confirmation->store('dac-payment-proof');

        // =================================================
        // IF ELSE UNTUK 'IDCARD' DEFAULTNYA NONREQUIRED
        // =================================================

        // ID Card ADD Member 1
        if ($request->team_member_3_id_card == null) {
            $file_team_member_3 = null;
        } else {
            $file_team_member_3 = $request->team_member_3_id_card->store('id-card-dac');
        }

        Da_Form::create([
            'email' => Auth::user()->email,
            'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'team_leader_institute' => $request->team_leader_institute,
            'team_leader_id_card' => $request->team_leader_id_card->store('dac-payment-proof'),
            'team_member_1' => $request->team_member_1,
            'team_member_1_institute' => $request->team_member_1_institute,
            'team_member_1_id_card' => $request->team_member_1_id_card->store('dac-payment-proof'),
            'team_member_2' => $request->team_member_2,
            'team_member_2_institute' => $request->team_member_2_institute,
            'team_member_2_id_card' => $request->team_member_2_id_card->store('dac-payment-proof'),
            'team_member_3' => $request->team_member_3,
            'team_member_3_institute' => $request->team_member_3_institute,
            'team_member_3_id_card' => $file_team_member_3,
            'proof_payment' =>  $request->payment_confirmation->store('dac-payment-proof'),
            'status_pembayaran' => 1,
            'status_finalist' => 0,
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'da_status' => '1'
        ]);

        return redirect()->route('home');
    }
}
