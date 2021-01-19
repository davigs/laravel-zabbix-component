<?php

namespace ZabbixComponent\LaravelZabbixComponent;

use Illuminate\Support\ServiceProvider;
use ZabbixComponent\ZabbixGraph;

class ZabbixComponentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/zabbixcomponent.php' => config_path('zabbixcomponent.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/zabbixcomponent.php', 'zabbixcomponent');

        $this->app->bind(ZabbixGraph::class, function () {
            return new ZabbixGraph(
                $this->app['config']['zabbixcomponent.host'],
                $this->app['config']['zabbixcomponent.username'],
                $this->app['config']['zabbixcomponent.password'],
                $this->app['config']['zabbixcomponent.old_version'],
            );
        });
    }
}