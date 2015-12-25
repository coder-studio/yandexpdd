<?php

namespace CoderStudio\YandexPdd\Facades;

use Illuminate\Support\Facades\Facade;

class YandexPdd extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yandexpdd';
    }
}
