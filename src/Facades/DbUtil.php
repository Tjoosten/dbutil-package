<?php

namespace Hopp\DbUtil\Facades;

use Illuminate\Support\Facades\Facade;

class DbUtil extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DbUtil';
    }
}