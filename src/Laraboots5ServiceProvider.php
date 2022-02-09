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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laraboots5');
        $this->publishes([
            __DIR__ . '/../resources/laraboots5' => public_path('vendor/laraboots5'),
        ], 'asset-laraboots5');
        $this->loadAllComponent();

        # Jika Debug true aktifkan Route dokumentasi 
        if (config('app.debug')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/laraboots5.php');
        }
    }

    protected function loadAllComponent()
    {
        $this->registerComponent('5|4', 'input');
        $this->registerComponent('5|4', 'textarea');
        $this->registerComponent('5|4', 'form');
        $this->registerComponent('5|4', 'select');
        $this->registerComponent('5|4', 'input-group');
        $this->registerComponent('5|4', 'input-floating');
        $this->registerComponent('5|4', 'alert');
        $this->registerComponent('5|4', 'navs');
        $this->callAfterResolving(BladeCompiler::class, function () {
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $version, string $component)
    {
        $v = explode('|', $version);
        foreach ($v as $ver) {
            Blade::component("laraboots::components.bs{$ver}.{$component}", "bs{$ver}-{$component}");
            if ($ver == '5') {
                Blade::component("laraboots::components.bs5.{$component}", 'lb5-' . $component);
            }
        }
    }

    protected function configurePublishing()
    {
        # Views Components
        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/vendor/laraboots5/components'),
        ], 'laraboots5-views');
    }
}
