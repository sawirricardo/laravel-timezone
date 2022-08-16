<?php

namespace Sawirricardo\LaravelTimezone\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\LaravelTimezone\LaravelTimezone
 */
class LaravelTimezone extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sawirricardo\LaravelTimezone\LaravelTimezone::class;
    }
}
