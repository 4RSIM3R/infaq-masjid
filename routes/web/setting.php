<?php 

use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backoffice/setting', 'as' => 'setting.'], function () {
    Route::get('', [SettingController::class, 'index'])->name('index');
    Route::post('', [SettingController::class, 'update'])->name('update');
});