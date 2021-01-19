<?php


namespace ZabbixComponent\LaravelZabbixComponent;


use Illuminate\Support\Facades\Facade;
use ZabbixComponent\ZabbixGraph;

class ZabbixGraphFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ZabbixGraph::class;
    }
}