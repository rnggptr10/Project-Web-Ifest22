<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'image' => ['norequired', 'image']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        // Alamat penyimpanan sementara
        if ($data['profpic'] != null)
            $data['profpic']->store('profpic-user');
        // return $data['profpic']->store('profpic-user');

        // untuk testing 
        // ddd($data);
        Ticket::create([
            'email' => $data['email'],
            'intention_status' => '0',
            'da_status' => '0',
            'ctf_status' => '0',
            'techno_seminar_status' => '0',
            'techno_ws_status' => '0',
            'startup_status' => '0',
            'incon_status' => '0',
        ]);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'institute' => $data['institute'],
            'password' => Hash::make($data['password']),
            'image' => $data['profpic']->store('profpic-user'),
        ]);
    }
}
