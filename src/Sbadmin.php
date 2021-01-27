<?php

namespace Rosyiid1440\Sbadmin;

use Illuminate\Support\ServiceProvider;

class Sbadmin extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/css' => public_path('sbadmin/css'),
        ]);

        $this->publishes([
            __DIR__ . '/js' => public_path('sbadmin/js'),
        ]);

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/template/sbadmin'),
        ]);
    }
}
