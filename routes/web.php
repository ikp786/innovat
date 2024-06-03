<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('services/{slug?}', 'services')->name('services');
});

Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate');
        return 'Migrations executed successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/route-cache', function () {
    try {
        Artisan::call('route:cache');
        return ' routes cached successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});


Route::get('/run-seeder/{seeder?}', function ($seeder = null) {
    try {
        if ($seeder) {
            Artisan::call('db:seed', [
                '--class' => $seeder
            ]);
            return 'Seeder executed successfully';
        } else {
            Artisan::call('db:seed');
            return 'All seeders executed successfully';
        }
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});