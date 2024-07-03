<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $navigation = [
            ['url' => '/', 'label' => 'Home'],
            ['url' => '/blog', 'label' => 'Blog Posts'],
            ['url' => '/page/about', 'label' => 'About'],

        ];

        View::composer('*', function ($view) use ($navigation) {
            $view->with('navigation', $navigation);
        });
    }
}
