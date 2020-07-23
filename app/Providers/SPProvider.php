<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SPProvider extends ServiceProvider
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

       $this->app->bind('SP', function(){
            return new \App\Classes\SP;
        });
    }
}
