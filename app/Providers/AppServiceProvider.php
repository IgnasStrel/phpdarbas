<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();


class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Paginator::useBootstrap();
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
}
