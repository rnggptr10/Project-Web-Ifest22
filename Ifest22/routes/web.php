<?php

use App\Http\Controllers\CtfController;
use App\Http\Controllers\DataAnalysisController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InconController;
use App\Http\Controllers\IntentionController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\TechnoController;

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
Route::get('/profil/ticket-details', [ProfilController::class, 'ticketDetails'])->name('profile.ticketDetails');

// Route for Event
Route::get('/international-conference', [InconController::class, 'index'])->name('incon');
Route::get('/technopreneur', [TechnoController::class, 'index'])->name('techno');
Route::get('/startup-talk', [StartupController::class, 'index'])->name('startup');

// Route for Competition
Route::get('/intention', [IntentionController::class, 'index'])->name('intention');
Route::get('/capture-the-flag', [CtfController::class, 'index'])->name('ctf');
ROute::get('/data-analysis-competition', [DataAnalysisController::class, 'index'])->name('da');

// Route for Registration's Competitions
Route::middleware(['auth'])->group(function () {
    // CTF
    Route::get('/capture-the-flag/registration', [CtfController::class, 'registration'])->name('ctf.registration.view');
    Route::patch('/capture-the-flag/registration', [CtfController::class, 'saveRegister'])->name('ctf.registration');

    // DAC
    Route::get('/data-analysis-competition/registration', [DataAnalysisController::class, 'registration'])->name('dac.registration.view');
    Route::patch('/data-analysis-competition/registration', [DataAnalysisController::class, 'saveRegister'])->name('dac.registration');

    // Intention
    Route::get('/international-conference/registration', [IntentionController::class, 'registration'])->name('intention.registration.view');
    Route::patch('/international-conference/registration', [IntentionController::class, 'saveRegister'])->name('intention.registration');
});


// Route for DAC's Dashboard