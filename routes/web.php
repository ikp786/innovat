<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/{slug?}', 'index')->name('home');
    Route::get('services', 'services')->name('services');
});