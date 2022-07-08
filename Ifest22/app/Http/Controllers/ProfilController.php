<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Incon;
use App\Models\Techno_ws_form;
use App\Models\Ticket;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $email = Auth::user()->email;
        $data = User::where('email', $email)->first();
        $techno_ws = Techno_ws_form::where('email', $email)->first();
        $status = Ticket::where('email', Auth::user()->email)->first();
        $no_ticket_incon = null;

        // if (Incon::where('email', $email)->first()) {
        //     // $no_ticket_incon = 
        // }
        $all = [
            'intention' => $status->intention_status,
            'da' => $status->da_status,
            'ctf' => $status->ctf_status,
            'techno_seminar' => $status->techno_seminar_status,
            'techno_ws' => $status->techno_ws_status,
            'startup' => $status->startup_status,
            'incon' => $status->incon_status,
        ];


        return view('profils.profil', compact('data', 'status'));
    }

    public function edit()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('profils.editProfil', compact('data'));
    }

    public function update(Request $request)
    {
        $data = User::where('email', Auth::user()->email)->first();

        $request->validate([
            'name' => 'required',
            'institute' => 'required',
        ]);

        if ($request->profpic == null) {
            $new_profpic = $data->image;
        } else {
            $new_profpic = $request->profpic->store('profpic-user');
        }

        User::where('email', Auth::user()->email)->update([
            'name' => $request->name,
            'institute' => $request->institute,
            'image' => $new_profpic,
        ]);

        return redirect()->route('profile');
    }

    // INTENTION
    public function ticketDetailsIntention()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsIntention', compact('data'));
    }

    public function submittingProposalIntention()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-intention-proposal', compact('data'));
    }

    public function submittingProjectIntention()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-intention-project', compact('data'));
    }

    // DAC
    public function ticketDetailsDac()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsDac', compact('data'));
    }

    public function submittingPaperDAC()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-dac-paper', compact('data'));
    }

    public function submittingAnalysisDAC()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-dac-analysis', compact('data'));
    }

    // CTF
    public function ticketDetailsCtf()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsCtf', compact('data'));
    }

    // TECHNO WS
    public function ticketDetailsTechnoWorkshop()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsTechnoWorkshop', compact('data'));
    }

    public function submittingProposalTechno()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-techno-proposal', compact('data'));
    }

    public function submittingPitchdeck1Techno()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-techno-pitchdeck-1', compact('data'));
    }

    public function submittingPitchdeck2Techno()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-techno-pitchdeck-2', compact('data'));
    }
}
