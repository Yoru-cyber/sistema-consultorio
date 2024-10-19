<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::resource('patient', PatientController::class);
Route::resource('doctor', DoctorController::class);
Route::resource('recipe', RecipeController::class);
Route::resource('certificate', CertificateController::class);
Route::resource('condition', ConditionController::class);
Route::resource('appointment', AppointmentController::class);
