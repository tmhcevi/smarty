<?php


namespace Tmhcevi\Smarty;


use Illuminate\Support\ServiceProvider;

class SmartyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/smarty.php' => config_path('tmhcevi-smarty.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/smarty.php', 'tmhcevi-smarty');

        $this->app['view']->addExtension($this->app['config']->get('tmhcevi-smarty.extension', 'tpl'), 'smarty', function ()
        {
            return new SmartyEngine($this->app['config']);
        });
    }
}
