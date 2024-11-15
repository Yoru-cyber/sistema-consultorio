<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecipeController;
use App\Models\Certificate;
use App\Models\Recipe;
use Carbon\Carbon;
use Dompdf\Dompdf;
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
Route::get('recipe/pdf/{recipe}', function (Recipe $recipe) {
    $html = view('recipe.pdf', compact('recipe'))->render();
    $dompdf = new Dompdf();
    $dompdf->getOptions()->setChroot('/path/to/common/assets-directory');
    $dompdf->loadHtml($html);
    $todays_date = Carbon::now()->format('d-m-Y');
    $formattedPatientsName = str_replace('-', ' ', $recipe->patient->name);
    $dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream(filename: "{$formattedPatientsName}-{$todays_date}.pdf");
})->name('recipe.pdf');
Route::get('certificate/pdf/{certificate}', function (Certificate $certificate) {
    $html = view('certificate.pdf', compact('certificate'))->render();
    $dompdf = new Dompdf();
    $dompdf->getOptions()->setChroot('/path/to/common/assets-directory');
    $dompdf->loadHtml($html);
    $todays_date = Carbon::now()->format('d-m-Y');
    $formattedPatientsName = str_replace('-', ' ', $certificate->patient->name);
    $dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream(filename: "{$formattedPatientsName}-{$todays_date}.pdf");
})->name('certificate.pdf');
