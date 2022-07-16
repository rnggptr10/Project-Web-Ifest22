<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\StartupDay1;
use App\Models\StartupDay2;
use App\Models\Techno_seminar;
use App\Models\Techno_ws_form;
use App\Models\Intention_form;
use App\Models\Da_Form;
use App\Models\Ctf_form;
use App\Models\Semnas_paper;
use App\Models\Semnas_semnas;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function checkUser()
    // {
    //     if (Auth::user()->is_admin == 0) return redirect()->route('home');
    // }



    public function dataUser()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $user = User::all();
            return view('admin.admin-user', compact('user'));
        }
    }

    public function dataStartupDay1()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $startup = StartupDay1::all();
            return view('admin.admin-startup-day1', compact('startup'));
        }
    }

    public function dataStartupDay2()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $startup = StartupDay2::all();
            return view('admin.admin-startup-day2', compact('startup'));
        }
    }

    public function dataIntention()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $intention = Intention_form::all();
            return view('admin.admin-intention', compact('intention'));
        }
    }

    public function dataDac()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $dac = Da_Form::all();
            return view('admin.admin-dac', compact('dac'));
        }
    }

    public function dataCtf()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $ctf = Ctf_form::all();
            return view('admin.admin-ctf', compact('ctf'));
        }
    }

    public function dataTechno()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $techno = Techno_seminar::all();
            return view('admin.admin-techno', compact('techno'));
        }
    }

    public function dataTechnoWs()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $techno_ws = Techno_ws_form::all();
            return view('admin.admin-techno-ws', compact('techno_ws'));
        }
    }

    public function dataSemnas()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $semnas = Semnas_semnas::all();
            return view('admin.admin-semnas', compact('semnas'));
        }
    }

    public function dataSemnasPresenter()
    {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->is_admin == 0) return redirect()->route('home');
        } else {
            $semnasPresenter = Semnas_paper::all();
            return view('admin.admin-semnas-paper', compact('semnasPresenter'));
        }
    }


    // DROPDOWN CHANGE
    public function changeSemnasStatusPembayaran(Request $request)
    {
        Semnas_semnas::where('email', $request->semnas_email)->update([
            'status_pembayaran' => $request->semnas_payment_status,
        ]);

        return redirect()->route('admin-semnas');
    }

    public function changeSemnasPresenterStatus(Request $request)
    {
        Semnas_paper::where('email', $request->semnas_email)->update([
            'status_pembayaran' => $request->semnas_payment_status,
            'status_selected' => $request->semnas_selected_status,
        ]);

        return redirect()->route('admin-semnas-presenter');
    }


    public function changeCtfStatusPembayaran(Request $request)
    {
        Ctf_form::where('email', $request->ctf_email)->update([
            'status_pembayaran' => $request->ctf_payment_status,
        ]);

        return redirect()->route('admin-ctf');
    }

    public function changeDacStatusPembayaran(Request $request)
    {
        Da_Form::where('email', $request->dac_email)->update([
            'status_pembayaran' => $request->dac_payment_status,
        ]);

        return redirect()->route('admin-dac');
    }

    public function changeIntentionStatusPembayaran(Request $request)
    {
        Intention_Form::where('email', $request->intention_email)->update([
            'status_pembayaran' => $request->intention_payment_status,
        ]);

        return redirect()->route('admin-intention');
    }

    public function changeIntentionStatusFinalist(Request $request)
    {
        Intention_Form::where('email', $request->intention_email)->update([
            'status_finalist' => $request->intention_finalist_status,
        ]);

        return redirect()->route('admin-intention');
    }

    public function changeDacStatusFinalist(Request $request)
    {
        Da_Form::where('email', $request->dac_email)->update([
            'status_finalist' => $request->dac_finalist_status,
        ]);

        return redirect()->route('admin-dac');
    }

    public function changeTechnoWSStatusPembayaran(Request $request)
    {
        Techno_ws_form::where('email', $request->techno_ws_email)->update([
            'status_pembayaran' => $request->techno_ws_payment_status,
        ]);

        return redirect()->route('admin-techno-ws');
    }

    public function changeTechnoWSStatusSelected(Request $request)
    {
        Techno_ws_form::where('email', $request->techno_ws_email)->update([
            'selected_team' => $request->techno_ws_selected_status,
        ]);

        return redirect()->route('admin-techno-ws');
    }
}
