<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\Setting;
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
            Cache::flush();
            if (!Request::is('admin/*')) { // Assuming your admin routes are prefixed with 'admin'
                $services = Cache::remember('services_with_pages', 60 * 60, function () {
                    return Service::with('pages')->orderBy('sort_by', 'asc')->get(); // Eager load pages
                });

                $blogs = Cache::remember('blogs_with_pages', 60 * 60, function () {
                    return Blog::active()->limit(10)->get();
                });

                // Caching settings
                $settings = Cache::remember('settings_data', 60 * 60, function () {
                    return Setting::first();
                });

                $view->with('services', $services);
                $view->with('blogs', $blogs);
                $view->with('settings', $settings);
            }
        });
    }
}
