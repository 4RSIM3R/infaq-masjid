<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/report', 'as' => 'report.', 'middleware' => ['permission:admin']], function () {
    Route::get('', [ReportController::class, 'index'])->name('index');
    Route::get('create', [ReportController::class, 'create'])->name('create');
    Route::post('create', [ReportController::class, 'store'])->name('store');
    Route::get('{id}/edit', [ReportController::class, 'edit'])->name('edit');
    Route::put('{id}/edit', [ReportController::class, 'update'])->name('update');
    Route::get('{id}/show', [ReportController::class, 'show'])->name('show');
    Route::post('{id}/delete', [ReportController::class, 'destroy'])->name('destroy');
});
