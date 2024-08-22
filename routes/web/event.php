<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/event', 'as' => 'event.'], function () {
    Route::delete('{id}', [EventController::class, 'destroy'])->name('destroy');
    Route::resource('', EventController::class)->except(['destroy']);
});