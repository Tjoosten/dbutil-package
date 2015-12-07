<?php

namespace Hopp\DbUtil;

use Illuminate\Support\ServiceProvider;
use Hopp\DbUtil\Controllers\DbUtilFunctions;

class DbUtilServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void.
     */
    public function boot()
    {
        // Write your magic here.
    }

    /**
     * Register any application services.
     *
     * @return void.
     */
    public function register()
    {
        // Artisan commands 
        $this->app['db.util'] = $this->app->share(
            function ($app) {
                return new \Hopp\DbUtil\Console\UtilCommand();
            }
        );

        $this->commands('db.util');
        
        // Register 'permissions' instance container to out Permissions object.
        $this->app['DbUtil'] = $this->app->share(function()
        {
            return new DbUtilFunctions();
        });
    }
}
