<?php


namespace Tmh\Smarty;


use Illuminate\Support\ServiceProvider;

class SmartyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/smarty.php' => config_path('tmh-smarty.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/smarty.php', 'tmh-smarty');

        $this->app['view']->addExtension($this->app['config']->get('tmh-smarty.extension', 'tpl'), 'smarty', function ()
        {
            return new SmartyEngine($this->app['config']);
        });
    }
}
