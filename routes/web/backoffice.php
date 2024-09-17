<?php

use App\Http\Controllers\BackofficeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice', 'middleware' => ['permission:admin']], function () {
    Route::get('', [BackofficeController::class, 'index'])->name('backoffice.index');
});
