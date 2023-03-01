<?php

namespace App\Providers;

use http\Env;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/qr-menu-routes/web-public.php'));

            Route::middleware('web')
                ->group(base_path('routes/qr-menu-routes/web-auth.php'));

            Route::middleware('web')
                ->prefix('menu')
                ->group(base_path('routes/qr-menu-routes/web-showMenu.php'));

            Route::middleware('web')
                 ->prefix('app')
                ->group(base_path('routes/qr-menu-routes/web-privateArea.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
