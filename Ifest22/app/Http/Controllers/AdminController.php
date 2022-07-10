<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Startup;
use App\Models\Techno_seminar;
use App\Models\Techno_ws_form;
use App\Models\Semnas;
use App\Models\Intention_form;
use App\Models\Da_form;
use App\Models\Ctf_form;

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

    public function dataUser()
    {
        $user = User::all();
        return view('admin.admin-user', compact('user'));
    }

    public function dataStartup()
    {
        $startup = Startup::all();
        return view('admin.admin-startup', compact('startup'));
    }

    public function dataIntention()
    {
        $intention = Intention_form::all();
        return view('admin.admin-intention', compact('intention'));
    }

    public function dataDac()
    {
        $dac = Da_form::all();
        return view('admin.admin-dac', compact('dac'));
    }

    public function dataCtf()
    {
        $ctf = Ctf_form::all();
        return view('admin.admin-ctf', compact('ctf'));
    }

    public function dataTechno()
    {
        $techno = Techno_seminar::all();
        return view('admin.admin-techno', compact('techno'));
    }

    public function dataTechnoWs()
    {
        $techno_ws = Techno_ws_form::all();
        return view('admin.admin-techno-ws', compact('techno_ws'));
    }

    public function dataSemnas()
    {
        $semnas = Semnas::all();
        return view('admin.admin-semnas', compact('semnas'));
    }
}
