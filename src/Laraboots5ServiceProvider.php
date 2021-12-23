<?php

namespace Davidaprilio\Laraboots5;

use Illuminate\Support\ServiceProvider;

class Laraboots5ServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/../routes/laraboots5.php');
    }
}
