<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Techno_ws_form;
use App\Models\Ticket;
use App\Models\User;

class TechnoController extends Controller
{
    public function index()
    {
        // $registered = false;
        // $registered_ws = false;
        // $onLogin = false;
        // if (Auth::check()) {
        //     $data = Ticket::where('email', Auth::user()->email)->first();
        //     $data_ws = Techno_ws_form::where('email',  Auth::user()->email)->first();
        //     if ($data->techno_seminar_status != '0') $registered = true;
        //     if ($data_ws != null) $registered_ws = true;
        //     $onLogin = true;
        // }
        // return view('events.techno', compact('registered', 'registered_ws', 'onLogin'));
        return view('events.techno');
    }

    public function registrationWorkshop()
    {
        // $data_ws = Techno_ws_form::where('email',  Auth::user()->email)->first();
        // if ($data_ws != null)  return redirect()->route('techno');
        // return view('registration.regis-techno-ws');
        return view('registration.regis-techno-workshop');
    }

    public function paymentWorkshop()
    {
        // $data_ws = Techno_ws_form::where('email',  Auth::user()->email)->first();
        // if ($data_ws != null)  return redirect()->route('techno');
        // return view('registration.regis-techno-ws');
        return view('registration.payment-techno-workshop');
    }

    public function saveRegisterWorkshop(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'team_leader' => 'required',
            'team_leader_institute' => 'required',
            'team_leader_id_card' => 'required',
            'team_member_1' => 'required',
            'team_member_1_institute' => 'required',
            'team_member_1_id_card' => 'required',
        ]);

        // Alamat Penyimpanan 
        $request->team_leader_id_card->store('id-card-techno-ws');
        $request->team_member_1_id_card->store('id-card-techno-ws');

        // =================================================
        // IF ELSE UNTUK 'IDCARD' DEFAULTNYA NONREQUIRED
        // =================================================
        // ID Card ADD Member 1
        if ($request->team_member_2_id_card == null) {
            $file_team_member_2 = null;
        } else {
            $file_team_member_2 = $request->team_member_2_id_card->store('id-card-techno-ws');
        }

        Techno_ws_form::create([
            'email' => Auth::user()->email,
            'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'team_leader_institute' => $request->team_leader_institute,
            'team_leader_id_card' => $request->team_leader_id_card->store('id-card-techno-ws'),
            'team_member_1' => $request->team_member_1,
            'team_member_1_institute' => $request->team_member_1_institute,
            'team_member_1_id_card' => $request->team_member_1_id_card->store('id-card-techno-ws'),
            'team_member_2' => $request->team_member_2,
            'team_member_2_institute' => $request->team_member_2_institute,
            'team_member_2_id_card' => $file_team_member_2,
            'status_pembayaran' => 1,
            'selected_team' => 1,
            // 'proposal_link' => null,
            // 'proof_payment' => null,
            // 'pitcdeck1_link' => null,
            // 'pitcdeck2_link' => null,
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'techno_ws_status' => 1,
            'techno_seminar_status' => 1,
        ]);

        return redirect()->route('profile');
    }

    // INI NGEDIT NAMBAHIN DATA PAYMENT PROOF, SAMA NGAMBIL DATA DARI DB
    public function savePaymentWorkshop(Request $request)
    {
        // $request->validate([
        //     'team_name' => 'required',
        //     'team_leader' => 'required',
        //     'team_member_1' => 'required',
        //     'team_member_2' => 'required',
        //     'proposal_link' => 'required|url',
        //     // 'id_card' => 'required|file|mimes:zip|max:3072',
        // ]);

        // $id_card = $request->file('id_card');
        // $name_id_card = time(). "_". $id_card->getClientOriginalName();
        // $id_card->storeAs('public/images/id_card/techno/workshop',$name_id_card);

        // Techno_ws_form::create([
        //     'email' => Auth::user()->email,
        //     'team_name' => $request->team_name,
        //     'team_leader' => $request->team_leader,
        //     'team_member_1' => $request->team_member_1,
        //     'team_member_2' => $request->team_member_2,
        //     'proposal_link' => $request->proposal_link,
        //     // 'id_card' => $name_id_card,
        //     'selected_team' => 'U',
        // ]);

        // Ticket::where('email', Auth::user()->email)->update([
        //     'techno_seminar_status' => '2'
        // ]);

        // return redirect()->route('profile')->with('status', 'Registration Completed!');
    }

    public function saveRegisterSeminar()
    {
        Ticket::where('email', Auth::user()->email)->update([
            'techno_seminar_status' => 1
        ]);

        // $status = Ticket::where('email', Auth::user()->email)->first();

        // if($status->techno_seminar_status === '2'){
        //     return redirect()->route('profile');
        // }

        // Ticket::where('email',Auth::user()->email)->update([
        //     'techno_seminar_status' => '2'
        // ]);

        return redirect()->route('profile');
        // return redirect()->route('techno');
    }

    public function payment()
    {
        $status = Ticket::where('email', Auth::user()->email)->first();
        if ($status->techno_ws_status !== '0') return redirect()->route('profile');
        return view('registration.regis-techno-ws-payment');
    }

    public function onPayment(Request $request)
    {
        $request->validate([
            'payment_confirmation' => 'required|image|max:1024',
        ]);

        $payment_confirmation = $request->file('payment_confirmation');
        $name_payment_confirmation = time() . "_" . $payment_confirmation->getClientOriginalName();
        $payment_confirmation->storeAs('public/images/payment_confirmation/techno/workshop/', $name_payment_confirmation);

        $email = Auth::user()->email;

        Ticket::where('email', $email)->update([
            'techno_ws_status' => '1'
        ]);

        Techno_ws_form::where('email', $email)->update([
            'proof_payment' => $name_payment_confirmation,
        ]);

        return redirect()->route('profile')->with('status', 'Registration Completed!');
    }
}
