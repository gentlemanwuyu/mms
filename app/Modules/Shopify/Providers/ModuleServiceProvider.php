<?php

namespace App\Modules\Shopify\Providers;

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
        $this->loadTranslationsFrom(module_path('shopify', 'Resources/Lang', 'app'), 'shopify');
        $this->loadViewsFrom(module_path('shopify', 'Resources/Views', 'app'), 'shopify');
        $this->loadMigrationsFrom(module_path('shopify', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('shopify', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('shopify', 'Database/Factories', 'app'));
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
