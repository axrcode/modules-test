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
use Modules\Sales\Http\Controllers\SaleController;
use Modules\Sales\Http\Controllers\CustomerController;

Route::middleware(['web', 'auth'])->prefix('sales')->as('sales.')->group(function() {
    Route::get('/', [SaleController::class, 'index'])->name('index');
    Route::get('/create', [SaleController::class, 'create'])->name('create');
    Route::post('/', [SaleController::class, 'store'])->name('store');

    Route::prefix('customer')->as('customer.')->group(function() {
        Route::get('/', [CustomerController::class, 'index'])->name('index');
        Route::get('/create', [CustomerController::class, 'create'])->name('create');
        Route::post('/store', [CustomerController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('edit');
        Route::put('/{id}', [CustomerController::class, 'update'])->name('update');
    });
});