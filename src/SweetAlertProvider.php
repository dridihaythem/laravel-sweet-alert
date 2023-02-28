<?php

namespace DridiHaythem\LaravelSweetAlert;

use DridiHaythem\LaravelSweetAlert\Components\SweetAlertComponent;
use DridiHaythem\LaravelSweetAlert\Facades\SweetAlertFacade;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class SweetAlertProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('SweetAlert', function ($app) {
            return new SweetAlert();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'laravel-sweet-alert');

        Blade::component('sweet-alert', SweetAlertComponent::class);
    }
}
