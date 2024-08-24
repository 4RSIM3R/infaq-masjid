<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home.index');
Route::get('about', [HomeController::class, 'about'])->name('home.about');
Route::get('event', [HomeController::class, 'event'])->name('home.event');
Route::get('campaign', [HomeController::class, 'campaign'])->name('home.campaign');

Route::get('campaign/{id}', [HomeController::class, 'campaign_detail'])->name('home.campaign_detail');
Route::post('donation/{id}', [HomeController::class, 'donation'])->name('home.donation');
Route::get('event/{id}', [HomeController::class, 'event_detail'])->name('home.event_detail');
