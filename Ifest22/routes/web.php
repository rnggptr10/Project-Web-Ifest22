<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LandingPage Before Login
Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Landing Page After Login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile's route
Route::get('/profil', [ProfilController::class, 'index'])->name('profile');
Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profile.edit');
Route::patch('/profil/edit/update', [ProfilController::class, 'update'])->name('profile.update');
