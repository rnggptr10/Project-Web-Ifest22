<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Intention_form;
use App\Models\Ticket;


class IntentionController extends Controller
{
    public function index()
    {
        // $registered = false;
        // $onLogin = false;

        // if (Auth::check()) {
        //     $data = Ticket::where('email', Auth::user()->email)->first();
        //     if ($data->intention_status != '0') $registered = true;
        //     $onLogin = true;
        // }

        // return view('competition.intention', compact('registered', 'onLogin'));
        return view('competition.intention');
    }

    public function registration()
    {
        $check = Ticket::where('email', Auth::user()->email)->first();

        // Error Handling
        if ($check->intention_status != '0') {
            return redirect()->route('profile');
        }

        return view('registration.regis-intention');
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

        // Alamat Penyimpanan
        $request->team_leader_id_card->store('id-card-intention');
        $request->team_member_1_id_card->store('id-card-intention');
        $request->team_member_2_id_card->store('id-card-intention');
        $request->payment_confirmation->store('intention-payment-proof');

        // =================================================
        // IF ELSE UNTUK 'IDCARD' DEFAULTNYA NONREQUIRED
        // =================================================

        // ID Card ADD Member 2
        if ($request->team_member_3_id_card == null) {
            $file_team_member_3 = null;
        } else {
            $file_team_member_3 = $request->team_member_3_id_card->store('id-card-intention');
        }

        if ($request->team_member_4_id_card == null) {
            $file_team_member_4 = null;
        } else {
            $file_team_member_4 = $request->team_member_4_id_card->store('id-card-intention');
        }

        Intention_form::create([
            'email' => Auth::user()->email,
            'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'team_leader_institute' => $request->team_leader_institute,
            'team_leader_id_card' => $request->team_leader_id_card->store('id-card-intention'),
            'team_member_1' => $request->team_member_1,
            'team_member_1_institute' => $request->team_member_1_institute,
            'team_member_1_id_card' => $request->team_member_1_id_card->store('id-card-intention'),
            'team_member_2' => $request->team_member_2,
            'team_member_2_institute' => $request->team_member_2_institute,
            'team_member_2_id_card' => $request->team_member_2_id_card->store('id-card-intention'),
            'team_member_3' => $request->team_member_3,
            'team_member_3_institute' => $request->team_member_3_institute,
            'team_member_3_id_card' => $file_team_member_3,
            'team_member_4' => $request->team_member_4,
            'team_member_4_institute' => $request->team_member_4_institute,
            'team_member_4_id_card' => $file_team_member_4,
            'proof_payment' => $request->payment_confirmation->store('intention-payment-proof'),
            'status_pembayaran' => 1,
            'status_finalist' => 0,
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'intention_status' => '1'
        ]);

        return redirect()->route('profile');
    }

    public function formProposal()
    {
        $check = Intention_form::where('email', Auth::user()->email)->first();
        if ($check->proposal_link === null && !$check->finalist) return view('registration.regis-intention-proposal');

        return redirect()->route('profile');
    }

    public function saveProposal(Request $request)
    {
        $request->validate([
            'proposal_link' => 'required|url',
        ]);

        Intention_form::where('email', Auth::user()->email)->update([
            'proposal_link' => $request->proposal_link,
        ]);

        return redirect()->route('profile')->with('status', 'Proposal Link Submitted');
    }

    public function formApps()
    {
        $check = Intention_form::where('email', Auth::user()->email)->first();
        if ($check->apps_link === null && $check->finalist) return view('registration.regis-intention-apps');

        return redirect()->route('profile');
    }

    public function saveApps(Request $request)
    {
        $request->validate([
            'apps_link' => 'required|url',
        ]);

        Intention_form::where('email', Auth::user()->email)->update([
            'app_link' => $request->apps_link,
        ]);

        return redirect()->route('profile')->with('status', 'Apps Link Submitted');
    }
}
