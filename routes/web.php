<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('pages.auth.login');
    // dd(bcrypt('admin123'));
});
Route::get('register', function () {
    return view('pages.auth.register');
})->name('register');
Route::post('register', function () {
    return view('pages.auth.login');
})->name('registerProcess');

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.home.dashboard');
    })->name('home');
    Route::get('integrasi', function (){
        return view('pages.integrasi.index');
    })->name('integrasi');
    Route::resource('user', UserController::class);
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::resource('order', \App\Http\Controllers\OrderController::class);
});



