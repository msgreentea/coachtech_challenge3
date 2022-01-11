<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;


// お問い合わせフォーム
Route::get('/', [ChallengeController::class, 'form'])->name('form');
Route::get('/confirm', [ChallengeController::class, 'confirm'])->name('confirm');
Route::post('/register', [ChallengeController::class, 'register'])->name('register');