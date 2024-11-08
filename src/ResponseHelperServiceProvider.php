<?php

namespace FerdousAhmedKhan\LaravelApiResponse;

use Illuminate\Support\ServiceProvider;

class ResponseHelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Code for publishing config, routes, etc., if needed
    }

    public function register()
    {
        // Register the ResponseHelper class
        $this->app->bind('response-helper', function () {
            return new ResponseHelper;
        });
    }
}
