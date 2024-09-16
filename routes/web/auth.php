<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [AuthController::class, 'login_form'])->name('login.form');
    Route::post('login', [AuthController::class, 'login_store'])->name('login.store');
    Route::get('register', [AuthController::class, 'register_form'])->name('register.form');
    Route::post('register', [AuthController::class, 'register_store'])->name('register.store');
    Route::get('logout', [AuthController::class, 'logout_store'])->name('logout.store');
});
