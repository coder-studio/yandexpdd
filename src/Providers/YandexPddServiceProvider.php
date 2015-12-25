<?php

namespace CoderStudio\YandexPdd\Providers;

use CoderStudio\YandexPdd\YandexPdd;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class YandexPddServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/yandexpdd.php' => config_path('yandexpdd.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::mergeConfigFrom(__DIR__ . '/../config/yandexpdd.php', 'pdd');

        App::bind('yandexpdd', function () {
            return new YandexPdd;
        });
    }
}
