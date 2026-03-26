<?php

namespace Balouch\ResponseKit;

use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/responsekit.php' => config_path('responsekit.php'),
        ], 'config');
    }
}
