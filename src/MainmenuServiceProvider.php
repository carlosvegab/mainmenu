<?php

namespace Cvega\Mainmenu;

use Illuminate\Support\ServiceProvider;
use Cvega\Mainmenu\View\Components\Mainmenu;

class MainmenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole())
        {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('mainmenu.php'),
            ], 'config');

        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            if (! class_exists('CreateMainmenuTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_mainmenu_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_mainmenu_table.php'),
                ], 'migrations');
            }
            $this->publishes([
                __DIR__.'/../src/View/Components/' => app_path('View/Components'),
                __DIR__.'/../resources/views/components/' => resource_path('views/components'),
            ], 'mainmenu_views_components');
        }
    }
}
