<?php

use App\Http\Controllers\CtfController;
use App\Http\Controllers\DataAnalysisController;
use App\Http\Controllers\IntentionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SemnasController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StartupDay1Controller;
use App\Http\Controllers\StartupDay2Controller;
use App\Http\Controllers\TechnoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComprofController;

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
Route::get('/profil/edit/password', [ProfilController::class, 'editPassword'])->name('profile.edit.password');
Route::patch('/profil/edit/password', [ProfilController::class, 'updatePassword'])->name('profile.update.password');
Route::patch('/profil/edit/update', [ProfilController::class, 'update'])->name('profile.update');
Route::get('/profil/ticket-details-intention', [ProfilController::class, 'ticketDetailsIntention'])->name('profile.ticketDetailsIntention');
Route::get('/profil/ticket-details-dac', [ProfilController::class, 'ticketDetailsDac'])->name('profile.ticketDetailsDac');
Route::get('/profil/ticket-details-ctf', [ProfilController::class, 'ticketDetailsCtf'])->name('profile.ticketDetailsCtf');
Route::get('/profil/ticket-details-technopreneur-workshop', [ProfilController::class, 'ticketDetailsTechnoWorkshop'])->name('profile.ticketDetailsTechnoWorkshop');
Route::get('/profil/ticket-details-seminar-nasional/presenter', [ProfilController::class, 'ticketDetailsSemnasPresenter'])->name('profile.ticketDetailsSemnasPresenter');

// Submitting's route
Route::get('/profil/ticket-details-intention/submit-proposal', [ProfilController::class, 'submittingProposalIntention'])->name('intention.submitting.proposal.view');
Route::patch('/profil/ticket-details-intention/submit-proposal', [ProfilController::class, 'saveProposalIntention'])->name('intention.submitting.proposal');
Route::get('/profil/ticket-details-intention/submit-project', [ProfilController::class, 'submittingProjectIntention'])->name('intention.submitting.project.view');
Route::patch('/profil/ticket-details-intention/submit-project', [ProfilController::class, 'saveProjectIntention'])->name('intention.submitting.project');
Route::get('/profil/ticket-details-dac/submit-paper', [ProfilController::class, 'submittingPaperDAC'])->name('dac.submitting.paper.view');
Route::patch('/profil/ticket-details-dac/submit-paper', [ProfilController::class, 'savePaperDAC'])->name('dac.submitting.paper');
Route::get('/profil/ticket-details-dac/submit-analysis', [ProfilController::class, 'submittingAnalysisDAC'])->name('dac.submitting.analysis.view');
Route::patch('/profil/ticket-details-dac/submit-analysis', [ProfilController::class, 'saveAnalysisDAC'])->name('dac.submitting.analysis');

Route::get('/profil/ticket-details-ctf/submit-writeup', [ProfilController::class, 'submittingWriteupCtf'])->name('ctf.submitting.writeup.view');
Route::patch('/profil/ticket-details-ctf/submit-writeup', [ProfilController::class, 'saveWriteupCtf'])->name('ctf.submitting.writeup');

Route::get('/profil/ticket-details-technopreneur-workshop/submit-proposal', [ProfilController::class, 'submittingProposalTechno'])->name('technoWorkshop.submitting.proposal.view');
Route::patch('/profil/ticket-details-technopreneur-workshop/submit-proposal', [ProfilController::class, 'saveProposalTechno'])->name('technoWorkshop.submitting.proposal');
Route::get('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-1', [ProfilController::class, 'submittingPitchdeck1Techno'])->name('technoWorkshop.submitting.pitchdeck1.view');
Route::patch('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-1', [ProfilController::class, 'savePitchdeck1Techno'])->name('technoWorkshop.submitting.pitchdeck1');
Route::get('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-2', [ProfilController::class, 'submittingPitchdeck2Techno'])->name('technoWorkshop.submitting.pitchdeck2.view');
Route::patch('/profil/ticket-details-technopreneur-workshop/submit-pitchdeck-2', [ProfilController::class, 'savePitchdeck2Techno'])->name('technoWorkshop.submitting.pitchdeck2');
Route::get('/profil/ticket-details-seminar-nasional/presenter/payment', [ProfilController::class, 'paymentSemnasPresenter'])->name('semnas.presenter.payment.view');
Route::patch('/profil/ticket-details-seminar-nasional/presenter/payment', [ProfilController::class, 'savePaymentSemnasPresenter'])->name('semnas.presenter.payment');
Route::get('/profil/ticket-details-seminar-nasional/presenter/submit-paper-1', [ProfilController::class, 'submittingPaper1SemnasPresenter'])->name('semnas.presenter.submitting.paper1.view');
Route::patch('/profil/ticket-details-seminar-nasional/presenter/submit-paper-1', [ProfilController::class, 'savePaper1SemnasPresenter'])->name('semnas.presenter.submitting.paper1');
Route::get('/profil/ticket-details-seminar-nasional/presenter/submit-paper-2', [ProfilController::class, 'submittingPaper2SemnasPresenter'])->name('semnas.presenter.submitting.paper2.view');
Route::patch('/profil/ticket-details-seminar-nasional/presenter/submit-paper-2', [ProfilController::class, 'savePaper2SemnasPresenter'])->name('semnas.presenter.submitting.paper2');

// Route for Re-Submit Payment Proof (Confirmation gagal, bukti bayar salah)
Route::get('/profil/ticket-details-intention/resubmit-payment', [ProfilController::class, 'paymentResubmitIntention'])->name('intention.resubmit.payment.view');
Route::patch('/profil/ticket-details-intention/resubmit-payment', [ProfilController::class, 'savePaymentResubmitIntention'])->name('intention.resubmit.payment');
Route::get('/profil/ticket-details-dac/resubmit-payment', [ProfilController::class, 'paymentResubmitDac'])->name('dac.resubmit.payment.view');
Route::patch('/profil/ticket-details-dac/resubmit-payment', [ProfilController::class, 'savePaymentResubmitDac'])->name('dac.resubmit.payment');
Route::get('/profil/ticket-details-ctf/resubmit-payment', [ProfilController::class, 'paymentResubmitCtf'])->name('ctf.resubmit.payment.view');
Route::patch('/profil/ticket-details-ctf/resubmit-payment', [ProfilController::class, 'savePaymentResubmitCtf'])->name('ctf.resubmit.payment');
Route::get('/profil/resubmit-payment-semnas', [ProfilController::class, 'paymentResubmitSemnas'])->name('semnas.resubmit.payment.view');
Route::patch('/profil/resubmit-payment-semnas', [ProfilController::class, 'savePaymentResubmitSemnas'])->name('semnas.resubmit.payment');

// Route for Event
Route::get('/seminar-nasional', [SemnasController::class, 'index'])->name('semnas');
Route::get('/technopreneur', [TechnoController::class, 'index'])->name('techno');
Route::get('/startup-talk', [StartupDay1Controller::class, 'index'])->name('startup');
Route::get('/ipod', [HomeController::class, 'ipodIndex'])->name('ipod');
Route::get('/company-profile', [ComprofController::class, 'companyIndex'])->name('company');


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

    // Techno Seminar
    Route::get('/technopreneur-seminar/registration', [TechnoController::class, 'saveRegisterSeminar'])->name('techoSeminar.registration');

    // Techno Workshop Payment
    Route::get('/technopreneur-workshop/payment', [TechnoController::class, 'paymentWorkshop'])->name('technoWorkshop.payment.view');
    Route::patch('/technopreneur-workshop/payment', [TechnoController::class, 'savePaymentWorkshop'])->name('technoWorkshop.payment');

    // StartupTalk
    Route::get('/startup-talk/registration-day1', [StartupDay1Controller::class, 'saveRegisterDay1'])->name('startup.day1.registration');
    Route::get('/startup-talk/registration-day2', [StartupDay2Controller::class, 'saveRegisterDay2'])->name('startup.day2.registration');

    // Seminar Nasional Non Pemakalah
    Route::get('/seminar-nasional/registration', [SemnasController::class, 'registration'])->name('semnas.registration.view');
    Route::patch('/seminar-nasional/registration', [SemnasController::class, 'saveRegister'])->name('semnas.registration');

    // Seminar Nasional Pemakalah
    Route::get('/seminar-nasional/presenter-registration', [SemnasController::class, 'presenterRegistration'])->name('semnas.presenter.registration.view');
    Route::patch('/seminar-nasional/presenter-registration', [SemnasController::class, 'presenterSaveRegister'])->name('semnas.presenter.registration');
});


// Route for Admin Page Dashboard
Route::get('/admin/users', [AdminController::class, 'dataUser'])->name('admin-user');
Route::get('/admin/startup-talk-day1', [AdminController::class, 'dataStartupDay1'])->name('admin-startup-day1');
Route::get('/admin/startup-talk-day2', [AdminController::class, 'dataStartupDay2'])->name('admin-startup-day2');
Route::get('/admin/technopreneur', [AdminController::class, 'dataTechno'])->name('admin-techno');
Route::get('/admin/technopreneur-workshop', [AdminController::class, 'dataTechnoWs'])->name('admin-techno-ws');
Route::get('/admin/seminar-nasional', [AdminController::class, 'dataSemnas'])->name('admin-semnas');
Route::get('/admin/seminar-nasional-presenter', [AdminController::class, 'dataSemnasPresenter'])->name('admin-semnas-presenter');
Route::get('/admin/intention', [AdminController::class, 'dataIntention'])->name('admin-intention');
Route::get('/admin/dac', [AdminController::class, 'dataDac'])->name('admin-dac');
Route::get('/admin/ctf', [AdminController::class, 'dataCtf'])->name('admin-ctf');

// Route for Admin Data Dropdown Change
Route::put('/admin/seminar-nasional/change-status-payment', [AdminController::class, 'changeSemnasStatusPembayaran'])->name('admin-semnas-change-status-pembayaran');
Route::put('/admin/seminar-nasional-presenter/change-status-payment', [AdminController::class, 'changeSemnasPresenterStatus'])->name('admin-semnas-presenter-change-status');
Route::put('/admin/ctf/change-status-payment', [AdminController::class, 'changeCtfStatusPembayaran'])->name('admin-ctf-change-status-pembayaran');
Route::put('/admin/dac/change-status-payment', [AdminController::class, 'changeDacStatusPembayaran'])->name('admin-dac-change-status-pembayaran');
Route::put('/admin/dac/change-status-finalist', [AdminController::class, 'changeDacStatusFinalist'])->name('admin-dac-change-status-finalist');
Route::put('/admin/intention/change-status-payment', [AdminController::class, 'changeIntentionStatusPembayaran'])->name('admin-intention-change-status-pembayaran');
Route::put('/admin/intention/change-status-finalist', [AdminController::class, 'changeIntentionStatusFinalist'])->name('admin-intention-change-status-finalist');
Route::put('/admin/techno-workshop/change-status-payment', [AdminController::class, 'changeTechnoWSStatusPembayaran'])->name('admin-techno-ws-change-status-pembayaran');
Route::put('/admin/techno-workshop/change-status-tim', [AdminController::class, 'changeTechnoWSStatusSelected'])->name('admin-techno-ws-change-status-tim');
