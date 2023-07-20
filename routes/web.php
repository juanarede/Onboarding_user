<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnboardingController;


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

Route::get('/', function () {
    return view('livewire.onboarding-step1');

});

Route::get('/onboarding/step1', [OnboardingController::class, 'step1'])->name('onboarding.step1');
Route::get('/onboarding/step2', [OnboardingController::class, 'step2'])->name('onboarding.step2');
Route::get('/onboarding/step3', [OnboardingController::class, 'step3'])->name('onboarding.step3');
Route::get('/onboarding/step4', [OnboardingController::class, 'step4'])->name('onboarding.step4');
Route::get('/onboarding/step5', [OnboardingController::class, 'step5'])->name('onboarding.step5');
