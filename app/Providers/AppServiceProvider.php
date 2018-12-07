<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Navbar;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.magazine', function ($view) {
            $view->with('nav', Navbar::all()->load('page'));
        });
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
}
