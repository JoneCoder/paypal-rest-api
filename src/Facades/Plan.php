<?php

namespace Jonecoder\PaypalRestApi\Facades;

use Illuminate\Support\Facades\Facade;

class Plan extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Plan';
    }
}