<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::view('login', 'admin.login')->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::middleware(['admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('services', ServiceController::class);
    Route::resource('pages', PageController::class);

    Route::post('service/updateStatus/{id}', [ServiceController::class,'updateStatus'])->name('services.update-status');
    Route::post('page/updateStatus/{id}', [PageController::class,'updateStatus'])->name('pages.update-status');

});
