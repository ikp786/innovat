<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            //Route::namespace('admin')->middleware('web')->prefix('admin')->name('admin.')->group(base_path('routes/admin.php'));
            Route::namespace('App\Http\Controllers\Admin')->middleware('web')->prefix('admin')->name('admin.')->group(base_path('routes/admin.php'));

            // Route::group([], base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Api not found.'
                ], 404);
            } elseif ($request->is('admin/*')) {
                abort(404);
            } else {
                return response()->view('front.errors.404');
            }
        });
    })
    ->create();
