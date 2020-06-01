<?php

namespace App\Modules\Feed\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('feed', 'Resources/Lang', 'app'), 'feed');
        $this->loadViewsFrom(module_path('feed', 'Resources/Views', 'app'), 'feed');
        $this->loadMigrationsFrom(module_path('feed', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('feed', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('feed', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
