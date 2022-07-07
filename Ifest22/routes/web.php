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
Route::get('/profil/ticket-details-intention', [ProfilController::class, 'ticketDetailsIntention'])->name('profile.ticketDetailsIntention');
Route::get('/profil/ticket-details-dac', [ProfilController::class, 'ticketDetailsDac'])->name('profile.ticketDetailsDac');
Route::get('/profil/ticket-details-ctf', [ProfilController::class, 'ticketDetailsCtf'])->name('profile.ticketDetailsCtf');
Route::get('/profil/ticket-details-technopreneur-workshop', [ProfilController::class, 'ticketDetailsTechnoWorkshop'])->name('profile.ticketDetailsTechnoWorkshop');

// Submitting's route
Route::get('/profil/ticket-details-intention/submit-proposal', [ProfilController::class, 'submittingProposalIntention'])->name('intention.submitting.proposal.view');
Route::patch('/profil/ticket-details-intention/submit-proposal', [ProfilController::class, 'belom'])->name('intention.submitting.proposal');
Route::get('/profil/ticket-details-intention/submit-project', [ProfilController::class, 'submittingProjectIntention'])->name('intention.submitting.project.view');
Route::patch('/profil/ticket-details-intention/submit-project', [ProfilController::class, 'belom'])->name('intention.submitting.project');
Route::get('/profil/ticket-details-dac/submit-paper', [ProfilController::class, 'submittingPaperDAC'])->name('dac.submitting.paper.view');
Route::patch('/profil/ticket-details-dac/submit-paper', [ProfilController::class, 'belom'])->name('dac.submitting.paper');
Route::get('/profil/ticket-details-dac/submit-analysis', [ProfilController::class, 'submittingAnalysisDAC'])->name('dac.submitting.analysis.view');
Route::patch('/profil/ticket-details-dac/submit-analysis', [ProfilController::class, 'belom'])->name('dac.submitting.analysis');
Route::get('/profil/ticket-details-technopreneur-workshop/submit-proposal', [ProfilController::class, 'submittingProposalTechno'])->name('techno.submitting.proposal.view');
Route::patch('/profil/ticket-details-technopreneur-workshop/submit-proposal', [ProfilController::class, 'belom'])->name('techno.submitting.proposal');
Route::get('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-1', [ProfilController::class, 'submittingPitchdeck1Techno'])->name('techno.submitting.pitchdeck1.view');
Route::patch('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-1', [ProfilController::class, 'belom'])->name('techno.submitting.pitchdeck1');
Route::get('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-2', [ProfilController::class, 'submittingPitchdeck2Techno'])->name('techno.submitting.pitchdeck2.view');
Route::patch('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-2', [ProfilController::class, 'belom'])->name('techno.submitting.pitchdeck2');

// Route for Event
Route::get('/international-conference', [InconController::class, 'index'])->name('incon');
Route::get('/technopreneur', [TechnoController::class, 'index'])->name('techno');
Route::get('/startup-talk', [StartupController::class, 'index'])->name('startup');
Route::get('/ipod', [HomeController::class, 'ipodIndex'])->name('ipod');

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
    Route::get('/intention/registration', [IntentionController::class, 'registration'])->name('intention.registration.view');
    Route::patch('/intention/registration', [IntentionController::class, 'saveRegister'])->name('intention.registration');

    // Techno Workshop
    Route::get('/technopreneur-workshop/registration', [TechnoController::class, 'registrationWorkshop'])->name('technoWorkshop.registration.view');
    Route::patch('/technopreneur-workshop/registration', [TechnoController::class, 'saveRegisterWorkshop'])->name('technoWorkshop.registration');

    // Techno Workshop Payment
    Route::get('/technopreneur-workshop/payment', [TechnoController::class, 'paymentWorkshop'])->name('technoWorkshop.payment.view');
    Route::patch('/technopreneur-workshop/payment', [TechnoController::class, 'savePaymentWorkshop'])->name('technoWorkshop.payment');

    // Seminar Nasional Payment
    Route::get('/seminar-nasional/registration', [InconController::class, 'registration'])->name('seminarNasional.registration.view');
    Route::patch('/seminar-nasional/registration', [InconController::class, 'saveRegister'])->name('seminarNasional.registration');
});


// Route for DAC's Dashboard