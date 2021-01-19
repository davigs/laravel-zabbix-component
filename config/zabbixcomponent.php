<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Zabbix Host
    |--------------------------------------------------------------------------
    |
    | The host is the full URL (including http(s)://) to your Zabbix
    | installation. Make sure that the Zabbix server is reachable
    | from your production server to prevent possible failures.
    |
    */
    'host' => env('ZABBIXCOMPONENT_HOST'),

    /*
    |--------------------------------------------------------------------------
    | Zabbix Username
    |--------------------------------------------------------------------------
    |
    | The Zabbix username you use while logging in to the Zabbix UI.
    |
    */
    'username' => env('ZABBIXCOMPONENT_USERNAME'),

    /*
    |--------------------------------------------------------------------------
    | Zabbix Password
    |--------------------------------------------------------------------------
    |
    | The Zabbix password you use while logging in to the Zabbix UI.
    |
    */
    'password' => env('ZABBIXCOMPONENT_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Old Zabbix (<=1.8) version
    |--------------------------------------------------------------------------
    |
    | If you are using Zabbix 1.8 or older, this must be set to true.
    |
    */
    'old_version' => env('ZABBIXCOMPONENT_OLD_VERSION', false),
];