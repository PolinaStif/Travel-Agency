<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/destination', function () {
    return view('destination');
})->name('destination');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');

Route::prefix('customers')->name('customers.')->group(function () {
    Route::get('/create', [CustomerController::class, 'create'])->name('create');
});

Route::middleware('auth')->prefix('admin')->name('admin.')
    ->group(base_path('routes\web\admin.php'));
