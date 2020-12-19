<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'index'])->name('index');

Route::prefix('customers')->name('customers.')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('index');

    Route::prefix('{customer}')->group(function () {
        Route::get('/show', [CustomerController::class, 'show'])->name('show');
        Route::get('/processed', [CustomerController::class, 'processed'])->name('processed');
        Route::get('/unprocessed', [CustomerController::class, 'unprocessed'])->name('unprocessed');
    });
});

Auth::routes(['register' => false]);
