<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Using a closure-based composer for specific views
        View::composer('front.layouts.app', function ($view) {
            // Cache::flush();
            if (!Request::is('admin/*')) { // Assuming your admin routes are prefixed with 'admin'
                $services = Cache::remember('services_with_pages', 60 * 60, function () {
                    return Service::with('pages')->get(); // Eager load pages
                });

                $view->with('services', $services);
            }
        });
    }
}
