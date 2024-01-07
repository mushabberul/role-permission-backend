<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'dashboard');
    });
});
