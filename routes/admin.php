<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::view('login', 'admin.login')->name('login-view');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::middleware(['admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('services', ServiceController::class);
    Route::post('service/updateStatus/{id}', [ServiceController::class, 'updateStatus'])->name('services.update-status');
    Route::resource('pages', PageController::class);
    Route::post('page/updateStatus/{id}', [PageController::class, 'updateStatus'])->name('pages.update-status');
    Route::resource('newses', NewsController::class);
    Route::post('news/updateStatus/{id}', [NewsController::class, 'updateStatus'])->name('newses.update-status');

    Route::get('settings', [DashboardController::class,'setting'])->name('settings.edit');
    Route::post('settings/{id?}', [DashboardController::class,'updateSetting'])->name('settings.update');

    Route::resource('banners', BannerController::class);
    Route::post('banner/updateStatus/{id}', [BannerController::class, 'updateStatus'])->name('banners.update-status');
});
