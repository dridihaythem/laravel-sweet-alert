<?php

namespace DridiHaythem\LaravelSweetAlert;

use DridiHaythem\LaravelSweetAlert\Components\SweetAlertComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class SweetAlertProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
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
