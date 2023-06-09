<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\CartComposer;

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
        View::share('name', 'Admin');

        // View::composer('*', CartComposer::class);
        View::composer([
            'admin.users.index',
            'admin.users.create',
        ], CartComposer::class);
    }
}
