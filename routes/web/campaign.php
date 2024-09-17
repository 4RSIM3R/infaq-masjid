<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/campaign', 'as' => 'campaign.', 'middleware' => ['permission:admin']], function () {
    Route::get('', [CampaignController::class, 'index'])->name('index');
    Route::get('create', [CampaignController::class, 'create'])->name('create');
    Route::post('create', [CampaignController::class, 'store'])->name('store');
    Route::get('{id}/edit', [CampaignController::class, 'edit'])->name('edit');
    Route::put('{id}/edit', [CampaignController::class, 'update'])->name('update');
    Route::get('{id}/show', [CampaignController::class, 'show'])->name('show');
    Route::delete('{id}/delete', [CampaignController::class, 'destroy'])->name('destroy');
    Route::get('{id}/report', [CampaignController::class, 'report'])->name('report');
    Route::get('{id}/usage', [CampaignController::class, 'usage_form'])->name('usage.form');
    Route::post('{id}/usage', [CampaignController::class, 'usage_store'])->name('usage.store');
});
