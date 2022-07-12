<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Incon;
use App\Models\Techno_ws_form;
use App\Models\Ticket;
use App\Models\Semnas_semnas;
use App\Models\Semnas_paper;
use App\Models\Intention_form;
use App\Models\Da_form;
use App\Models\Ctf_form;
use Illuminate\Support\Facades\Hash;

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
        $semnas = Semnas_semnas::where('email', Auth::user()->email)->first();
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


        return view('profils.profil', compact('data', 'status', 'semnas'));
    }

    public function edit()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('profils.editProfil', compact('data'));
    }

    public function editPassword()
    {
        return view('profils.resetPassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8'],
        ]);

        $currentPassword = Auth::user()->password;
        $oldPassword = $request->old_password;

        if (Hash::check($oldPassword, $currentPassword) && $request->new_password == $request->confirm_password) {
            User::where('email', Auth::user()->email)->update([
                'password' => bcrypt($request->new_password),
            ]);

            return redirect()->route('profile');
        } else {
            if (!Hash::check($oldPassword, $currentPassword)) {
                return back()->withErrors(['old_password' => 'Make sure your password !']);
            } else {
                return back()->withErrors(['old_password' => 'The password confirmation does not match !']);
            }
        }
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
        $intention = Intention_form::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsIntention', compact('data', 'intention'));
    }

    public function submittingProposalIntention()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-intention-proposal', compact('data'));
    }

    public function saveProposalIntention(Request $request)
    {
        $request->validate([
            'proposal_link' => 'required',
        ]);

        Intention_form::where('email', Auth::user()->email)->update([
            'proposal_link' => $request->proposal_link,
        ]);

        return redirect()->route('profile');
    }

    public function submittingProjectIntention()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-intention-project', compact('data'));
    }

    public function saveProjectIntention(Request $request)
    {
        $request->validate([
            'app_link' => 'required',
        ]);

        Intention_form::where('email', Auth::user()->email)->update([
            'app_link' => $request->app_link,
        ]);

        return redirect()->route('profile');
    }

    // DAC
    public function ticketDetailsDac()
    {
        $data = User::where('email', Auth::user()->email)->first();
        $dac = Da_form::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsDac', compact('data', 'dac'));
    }

    public function submittingPaperDAC()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-dac-paper', compact('data'));
    }

    public function savePaperDAC(Request $request)
    {
        $request->validate([
            'paper_link' => 'required',
        ]);

        Da_form::where('email', Auth::user()->email)->update([
            'paper_link' => $request->paper_link,
        ]);

        return redirect()->route('profile');
    }

    public function submittingAnalysisDAC()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-dac-analysis', compact('data'));
    }

    public function saveAnalysisDAC(Request $request)
    {
        $request->validate([
            'analytics_result' => 'required',
        ]);

        Da_form::where('email', Auth::user()->email)->update([
            'analytics_result' => $request->analytics_result,
        ]);

        return redirect()->route('profile');
    }

    // CTF
    public function ticketDetailsCtf()
    {
        $data = User::where('email', Auth::user()->email)->first();
        $ctf = Ctf_form::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsCtf', compact('data', 'ctf'));
    }

    // TECHNO WS
    public function ticketDetailsTechnoWorkshop()
    {
        $data = User::where('email', Auth::user()->email)->first();
        $techno_ws = Techno_ws_form::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsTechnoWorkshop', compact('data', 'techno_ws'));
    }

    public function submittingProposalTechno()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-techno-proposal', compact('data'));
    }

    // Submit Proposal Link
    public function saveProposalTechno(Request $request)
    {
        $request->validate([
            'proposal_link' => 'required',
        ]);

        Techno_ws_form::where('email', Auth::user()->email)->update([
            'proposal_link' => $request->proposal_link,
        ]);

        return redirect()->route('profile');
    }

    public function submittingPitchdeck1Techno()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-techno-pitchdeck-1', compact('data'));
    }

    public function savePitchdeck1Techno(Request $request)
    {
        $request->validate([
            'pitcdeck1_link' => 'required',
        ]);

        Techno_ws_form::where('email', Auth::user()->email)->update([
            'pitcdeck1_link' => $request->pitcdeck1_link,
        ]);

        return redirect()->route('profile');
    }

    public function submittingPitchdeck2Techno()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-techno-pitchdeck-2', compact('data'));
    }

    public function savePitchdeck2Techno(Request $request)
    {
        $request->validate([
            'pitcdeck2_link' => 'required',
        ]);

        Techno_ws_form::where('email', Auth::user()->email)->update([
            'pitcdeck2_link' => $request->pitcdeck2_link,
        ]);

        return redirect()->route('profile');
    }


    // SEMNAS PRESENTER
    public function ticketDetailsSemnasPresenter()
    {
        $data = User::where('email', Auth::user()->email)->first();
        $presenter = Semnas_paper::where('email', Auth::user()->email)->first();
        return view('profils.ticketDetailsSemnasPresenter', compact('data', 'presenter'));
    }

    public function paymentSemnasPresenter()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('registration.payment-semnas-presenter', compact('data'));
    }

    public function savePaymentSemnasPresenter(Request $request)
    {
        $request->validate([
            'payment_confirmation' => 'required',
        ]);

        // Alamat Penyimpanan
        $request->payment_confirmation->store('semnas-payment-proof');


        Semnas_paper::where('email', Auth::user()->email)->update([
            'proof_payment' => $request->payment_confirmation->store('semnas-payment-proof'),
        ]);

        return redirect()->route('profile');
    }

    public function submittingPaper1SemnasPresenter()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-semnas-paper-1', compact('data'));
    }

    public function savePaper1SemnasPresenter(Request $request)
    {
        $request->validate([
            'paper1_link' => 'required',
        ]);

        Semnas_paper::where('email', Auth::user()->email)->update([
            'paper1_link' => $request->paper1_link,
        ]);

        return redirect()->route('profile');
    }

    public function submittingPaper2SemnasPresenter()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('submitting.submitting-semnas-paper-2', compact('data'));
    }

    public function savePaper2SemnasPresenter(Request $request)
    {
        $request->validate([
            'paper2_link' => 'required',
        ]);

        Semnas_paper::where('email', Auth::user()->email)->update([
            'paper2_link' => $request->paper2_link,
        ]);

        return redirect()->route('profile');
    }
}
