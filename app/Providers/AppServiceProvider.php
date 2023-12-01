<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use App\Models\Resource;
use Illuminate\Support\Facades\View;
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

        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        if($this->app->environment('local')) {
            URL::forceScheme('http');
        }

        View::share('resources', Resource::all());
        View::share('user', auth()->user());
    }
}
