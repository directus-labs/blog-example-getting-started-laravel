<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class DirectusServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('directus', function ($app) {
            return new class {
                protected $baseUrl;
                
                public function __construct()
                {
                    $this->baseUrl = rtrim(env('DIRECTUS_URL'), '/');                }

                public function request($method, $endpoint, $data = [])
                {
                    $url = "{$this->baseUrl}/items/{$endpoint}";
                    return Http::$method($url, $data);
                }

                public function get($endpoint, $params = [])
                {
                    return $this->request('get', $endpoint, $params);
                }
            };
        });
    }
}