<?php

namespace FiroCMS\Firo;

use Illuminate\Support\ServiceProvider;

class FiroServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('firo', function ($app) {
            return new Firo;
        });
    }

    public function boot()
    {
        require __DIR__ . '/app/Http/routes.php';
        require __DIR__ . '/app/helpers.php';

        $this->loadViewsFrom(__DIR__ . '/resources/views/', 'firo');

        $this->mergeConfigFrom(
            __DIR__ . '/config/nav.php', 'firo::nav'
        );

        $this->publishes([
            __DIR__ . '/resources/assets/dist' => public_path('vendor/firo'),
        ], 'public');
    }
}