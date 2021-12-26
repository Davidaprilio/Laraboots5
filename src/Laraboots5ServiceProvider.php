<?php

namespace Davidaprilio\Laraboots5;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
// use Davidaprilio\Laraboots5\View\Components\Alert;
// use Davidaprilio\Laraboots5\View\Components\Navs;
// use Davidaprilio\Laraboots5\View\Components\Input;
// use Davidaprilio\Laraboots5\View\Components\InputGroup;

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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laraboots5');
        $this->publishes([
            __DIR__.'/../resources/laraboots5' => public_path('vendor/laraboots5'),
        ], 'asset-laraboots5');
        $this->loadAllComponent();

        # Jika Debug true aktifkan Route dokumentasi 
        if (config('app.debug')) {
            $this->loadRoutesFrom(__DIR__.'/../routes/laraboots5.php');
        }
    }
    
    protected function loadAllComponent()
    {
        $this->registerComponent('input');
        $this->registerComponent('input-group');
        $this->registerComponent('input-floating');
        $this->registerComponent('alert');
        $this->registerComponent('navs');
        $this->callAfterResolving(BladeCompiler::class, function () {
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component)
    {
        Blade::component('laraboots5::components.'.$component, 'lb5-'.$component);
    }

    protected function configurePublishing()
    {
        # Views Components
        $this->publishes([
            __DIR__.'/../resources/views/components' => resource_path('views/vendor/laraboots5/components'),
        ], 'laraboots5-views');
    }
}
