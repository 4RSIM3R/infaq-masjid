<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/campaign', 'as' => 'campaign.'], function () {
    Route::resource('', CampaignController::class)->except(['destroy', 'show']);
    Route::delete('{id}/delete', [CampaignController::class, 'destroy'])->name('destroy');
    Route::get('{id}', [CampaignController::class, 'show'])->name('show');
});
