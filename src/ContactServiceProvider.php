<?php

namespace Mrbhola\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');
        $this->publishes([__DIR__.'/config/contact.php'=> config_path('contact.php')],'config');
        $this->publishes([__DIR__ . '/database/migrations/' => database_path('migrations')],'migrations');
        $this->publishes([__DIR__ . '/Http/Controllers/' => app_path('Http/Controllers')],'controllesr');
        $this->publishes([__DIR__ . '/views' => resource_path('views/contact')],'views');
        $this->publishes([__DIR__ . '/Models' => app_path('Models/contact')],'views');
    }

    public function register()
    {
        // 
    }

}