<?php

// namespace App\Providers;

// use Illuminate\Support\ServiceProvider;

// class DirectusServiceProvider extends ServiceProvider
// {
//     /**
//      * Register services.
//      */
//     public function register(): void
//     {
//         //
//     }

//     /**
//      * Bootstrap services.
//      */
//     public function boot(): void
//     {
//         //
//     }
// }

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Slations\DirectusSdk\Directus;

class DirectusServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('directus', function ($app) {
            return new Directus(
                env('DIRECTUS_URL'),
                env('DIRECTUS_PROJECT', '_'),
            );
        });
    }
}