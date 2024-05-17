<?php

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
use Modules\Hospitaler\Http\Controllers\HospitalerController;
use Modules\Hospitaler\Http\Controllers\PatientController;

Route::middleware(['web', 'auth'])->prefix('hospitaler')->as('hospitaler.')->group(function() {
    Route::get('/', [HospitalerController::class, 'index'])->name('index');

    Route::prefix('patient')->as('patient.')->group(function() {
        Route::get('/', [PatientController::class, 'index'])->name('index');
        Route::get('/create', [PatientController::class, 'create'])->name('create');
        Route::post('/', [PatientController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [PatientController::class, 'edit'])->name('edit');
        Route::put('/{id}', [PatientController::class, 'update'])->name('update');
    });
});

