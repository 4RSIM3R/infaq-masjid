<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/event', 'as' => 'event.'], function () {
    Route::resource('', EventController::class);
});