<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/faq', 'as' => 'faq.'], function () {
    Route::get('', [FaqController::class, 'index'])->name('index');
    Route::get('create', [FaqController::class, 'create'])->name('create');
    Route::post('create', [FaqController::class, 'store'])->name('store');
    Route::get('{id}/edit', [FaqController::class, 'edit'])->name('edit');
    Route::put('{id}/edit', [FaqController::class, 'update'])->name('update');
    Route::get('{id}/show', [FaqController::class, 'show'])->name('show');
    Route::post('{id}/delete', [FaqController::class, 'destroy'])->name('destroy');
});
