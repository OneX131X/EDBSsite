<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');

            retry(4, function () {
                DB::purge('mysql');
                DB::connection('mysql')->getPdo();
            }, 2000, function (Throwable $e) {
                return str_contains($e->getMessage(), '2006')
                    || str_contains($e->getMessage(), 'gone away')
                    || str_contains($e->getMessage(), 'Lost connection');
            });
        }

        Gate::before(function ($user, $ability) {
            if ($user->hasRole('super_admin')) {
                return true;
            }
        });
    }

    // public function boot(): void
    // {
    //     if (app()->environment('production')) {
    //         URL::forceScheme('https');
    //     }

    //     Gate::before(function ($user, $ability) {
    //         if ($user->hasRole('super_admin')) {
    //             return true;
    //         }
    //     });
    // }
}
