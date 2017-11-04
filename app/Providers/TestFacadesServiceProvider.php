<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class TestFacadesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Test Facades Service register function here
        App::bind('test',function() {
            return new \App\Test\TestFacades;
        });
    }
}
