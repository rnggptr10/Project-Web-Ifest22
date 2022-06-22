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
        $status = Ticket::where('email', $email)->first();
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


        return view('profils.profil', compact('data'));
    }

    public function edit()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('profils.editProfil', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        User::where('email', Auth::user()->email)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('profile');
    }
}
