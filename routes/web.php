<?php

use App\Http\Controllers\ShortenerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/shorten', [ShortenerController::class, 'shorten'])->name('shorten');
Route::get('/{code}', [ShortenerController::class, 'redirect']);
