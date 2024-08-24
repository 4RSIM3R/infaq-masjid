<?php

use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'donation', 'as' => 'donation.'], function () {
    Route::post('', [DonationController::class, 'store'])->name('store');
});