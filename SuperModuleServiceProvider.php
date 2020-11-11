<?php

namespace Khusainov\SuperModule;

use Illuminate\Support\ServiceProvider;

class SuperModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'SuperModule');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Khusainov\SuperModule\Controllers\SuperModuleController');
    }
}
