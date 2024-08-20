<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home.index');
Route::get('about', [HomeController::class, 'about'])->name('home.about');
Route::get('event', [HomeController::class, 'event'])->name('home.event');
Route::get('campaign', [HomeController::class, 'campaign'])->name('home.campaign');