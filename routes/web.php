<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShortenerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/shorten', [ShortenerController::class, 'shorten'])->name('shorten');
Route::get('/register', [AuthController::class, 'registerIndex'])->name('register');
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::get('/{code}', [ShortenerController::class, 'redirect']);
