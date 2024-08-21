<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/faq', 'as' => 'faq.'], function () {
    Route::resource('', FaqController::class);
});
