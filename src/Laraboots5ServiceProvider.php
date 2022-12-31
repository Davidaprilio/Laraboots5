<?php

namespace DavidArl\Laraboots5;

use Illuminate\Support\Facades\Blade;
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laraboots5');
        $this->publishes([
            __DIR__ . '/../resources/laraboots5' => public_path('vendor/laraboots5'),
        ], 'asset-laraboots5');
        $this->loadAllComponent();

        # Jika Debug true aktifkan Route dokumentasi 
        if (config('app.debug')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/laraboots5.php');
            $this->loadDocsComponents();
        }
    }

    protected function loadDocsComponents()
    {
        $this->registerComponent('page', true);
        $this->registerComponent('section', true);
        $this->registerComponent('codes', true);
        $this->registerComponent('item-tree', true);
        $this->registerComponent('item', true);
        $this->registerComponent('navs-item', true);
        $this->registerComponent('navs', true);
        $this->registerComponent('blank', true);
    }

    protected function loadAllComponent()
    {
        // From
        $this->registerComponent('form.input');


        // Components
        $this->registerComponent('progress');
        $this->registerComponent('progress-bar');
        $this->registerComponent('spinner');


        $this->registerComponent('input');
        $this->registerComponent('textarea');
        $this->registerComponent('form');
        $this->registerComponent('button');
        $this->registerComponent('select');
        $this->registerComponent('code');
        $this->registerComponent('input-group');
        $this->registerComponent('input-floating');
        $this->registerComponent('navs');
        $this->registerComponent('link');
        $this->registerComponent('breadcrumb');

        $this->registerComponent('alert');
        $this->registerComponent('alert.basic');
        $this->registerComponent('alert.error');
        $this->registerComponent('alert.flash');

        $this->callAfterResolving(BladeCompiler::class, function () {
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component, bool $docs = false)
    {
        if ($docs) {
            Blade::component("laraboots5::components.docs.{$component}", "lbdocs-{$component}");
        } else {
            $bootstrap_version = config('laraboots5.bs_version') ?? '5';
            Blade::component("laraboots5::components.bs{$bootstrap_version}.{$component}", "bs-{$component}");
            Blade::component("laraboots5::components.bs5.{$component}", "lb5-{$component}");
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
