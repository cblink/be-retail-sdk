<?php

namespace Cblink\BeRetail;

class LaravelServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Application::class, function(){
            return new Application(config('services.be-retail'));
        });

        $this->app->alias(Application::class, 'be-retail');
    }

    public function provides()
    {
        return [Application::class, 'be-retail'];
    }
}