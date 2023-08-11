<?php

namespace Puikepixels\PuikCrmCore;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Puikepixels\PuikCrmCore\View\Components\btn\delete;
use Puikepixels\PuikCrmCore\View\Components\btn\edit;
use Puikepixels\PuikCrmCore\View\Components\form\input;
use Puikepixels\PuikCrmCore\View\Components\form\select;
use Puikepixels\PuikCrmCore\View\Components\PuikCrmAppLayout;

class PuikCrmCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */

        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'puik-crm-core');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'puik-crm-core');

        Blade::component('crm-layout', PuikCrmAppLayout::class);
        
        Blade::component('form.input', input::class);
        Blade::component('form.select', select::class);

        Blade::component('btn.edit', edit::class);
        Blade::component('btn.delete', delete::class);


        // Blade::component('puikepage::layouts.guest', 'guest-backend-layout');


        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('puik-crm-core.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/puik-crm-core'),
            ], 'views');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/puik-crm-core'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/puik-crm-core'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'puik-crm-core');

        // Register the main class to use with the facade
        $this->app->singleton('puik-crm-core', function () {
            return new PuikCrmCore;
        });
    }
}
