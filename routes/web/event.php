<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/event', 'as' => 'event.'], function () {
    Route::get('', [EventController::class, 'index'])->name('index');
    Route::get('create', [EventController::class, 'create'])->name('create');
    Route::post('create', [EventController::class, 'store'])->name('store');
    Route::get('{id}/edit', [EventController::class, 'edit'])->name('edit');
    Route::put('{id}/edit', [EventController::class, 'update'])->name('update');
    Route::get('{id}/show', [EventController::class, 'show'])->name('show');
    Route::post('{id}/delete', [EventController::class, 'destroy'])->name('destroy');
});
