<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Larashout\Larashout;

class LarashoutServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('larashout',function(){

            return new Larashout();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
