<?php

namespace MyCrud;

use Illuminate\Support\ServiceProvider;

class MyCrudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'views');
    }

    public function register()
    {
        // Hech qanday narsa hozircha registratsiya qilinmaydi
    }
}
