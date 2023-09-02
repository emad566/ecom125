<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            // Api Routes
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api/api.php'));

            Route::middleware('api', 'auth:sanctum', 'role:Admin')
                ->prefix('api/admin')
                ->group(base_path('routes/api/admin.php'));

            Route::middleware('api', 'auth:sanctum', 'role:Vendor')
                ->prefix('api/admin')
                ->group(base_path('routes/api/vendor.php'));

            // Web Routes
            Route::middleware('web')
                ->group(base_path('routes/web/web.php'));

            Route::middleware('web', 'auth', 'role:Admin')
                ->prefix('admin')
                ->as('admin.')
                ->group(base_path('routes/web/admin.php'));

            Route::middleware('web', 'auth', 'role:Vendor')
                ->prefix('vendor')
                ->as('vendor.')
                ->group(base_path('routes/web/vendor.php'));
        });
    }
}
