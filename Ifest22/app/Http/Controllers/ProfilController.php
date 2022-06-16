<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        // dd('f');
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
