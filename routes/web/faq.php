<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/faq', 'as' => 'faq.'], function () {
    Route::delete('{id}', [FaqController::class, 'destroy'])->name('destroy');
    Route::resource('', FaqController::class)->except(['destroy']);
});
