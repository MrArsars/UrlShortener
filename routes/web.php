<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShortenerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'registerIndex')->name('show.register');
    Route::get('/login', 'loginIndex')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/userpage', [UserController::class, 'userIndex'])->name('show.userpage')->middleware('auth');

Route::post('/shorten', [ShortenerController::class, 'shorten'])->name('shorten');
Route::get('/{code}', [ShortenerController::class, 'redirect']);
