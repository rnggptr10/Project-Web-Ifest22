<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\StartupDay2;
use App\Http\Requests\StoreStartupDay2Request;
use App\Http\Requests\UpdateStartupDay2Request;
use Carbon\Carbon;

class StartupDay2Controller extends Controller
{
    public function isOpened()
    {
        return Carbon::now()->diffInSeconds(new Carbon('2021-08-21 00:00:00'), false) >= 0;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.startupTalk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function registration()
    {
        // $check = Ticket::where('email', Auth::user()->email)->first();

        // if ($check->startup_status != '0') {
        //     return redirect()->route('profile');
        // }

        // return view('registration.regis-startup');
        return redirect()->route('startup');
    }

    public function saveRegisterDay2()
    {
        StartupDay2::create([
            'email' => Auth::user()->email,
            'name' => Auth::user()->name,
            'institute' => Auth::user()->institute,
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'startupDay2_status' => '1'
        ]);


        return redirect()->route('profile');
    }
}