<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
});

Route::post('/send-verification-code', [VerificationController::class, 'sendVerificationCode'])->name('send.verification.code');
Route::get('/verify', [VerificationController::class, 'showVerificationForm'])->name('verification.form');
Route::post('/verify', [VerificationController::class, 'verifyCode'])->name('verify');
Route::post('/verify-code', [VerificationController::class, 'verifyCode'])->name('verify.code');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/register-step-two', [RegisterController::class, 'showRegistrationStepTwo'])->name('registerStepTwo');
Route::post('/register-step-two', [RegisterController::class, 'processRegistration'])->name('process.registration');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('pages/home');
    })->name('home');

    Route::get('/vacancy', [VacancyController::class, 'index'])->name('vacancy');
    Route::get('/detailVacancy/{id}', [VacancyController::class, 'show'])->name('detailVacancy');
    Route::get('/vacancyUser/{id}', [VacancyController::class, 'showUser'])->name('vacancyUser');

    Route::get('/staff', [UserController::class, 'showCandidates'])->name('staff');

    Route::get('/employee', [UserController::class, 'showEmployee'])->name('employee');

    Route::get('/contacts', function () {
        return view('pages/contacts');
    })->name('contacts');

    Route::get('/chat', [MessageController::class, 'index'])->name('messages');
    Route::post('/chat', [MessageController::class, 'store'])->name('sendMessage');
});
