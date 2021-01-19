<?php

namespace ZabbixComponent\LaravelZabbixComponent;

use Illuminate\Support\Facades\Facade;
use ZabbixComponent\ZabbixTopTrigger;

class ZabbixTopTriggerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ZabbixTopTrigger::class;
    }
}