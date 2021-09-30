<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ChatterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        // $this->publishes([
        //     public_path() . '/assets' => app_path() . '/devdojo/chatter/assets',
        // ], 'chatter_assets');

        // $this->publishes([
        //     __DIR__ . '/../config/chatter.php' => config_path('chatter.php'),
        // ], 'chatter_config');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    // public function register()
    // {
    //     $this->loadViewsFrom(__DIR__ . '/Views', 'chatter');
    // }
}
