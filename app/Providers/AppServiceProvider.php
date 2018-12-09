<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Navbar;
use App\News;

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
        view()->composer('components.news', function ($view) {
            $view->with('news', News::all());
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
