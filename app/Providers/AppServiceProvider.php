<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('IsUser', function ($user) {
            return $user->role_user === 'user';
        });

        Gate::define('IsAdmin', function ($user) {
            return $user->role_user === 'admin';
        });
    }
}
