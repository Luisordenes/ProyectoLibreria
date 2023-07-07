<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
   if (env('REDIRECT_HTTPS')) {
       $this->app['request']->server->set('HTTPS', true);
   }
    }

    
    public function boot(UrlGenerator $url)
    {
   if (env('REDIRECT_HTTPS')) {
       $url->formatScheme('https://');
   }
    }
}
