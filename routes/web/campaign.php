<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/campaign', 'as' => 'campaign.'], function () {
    Route::delete('{id}', [CampaignController::class, 'destroy'])->name('destroy');
    Route::resource('', CampaignController::class)->except(['destroy']);
});