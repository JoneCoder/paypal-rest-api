<?php

namespace Jonecoder\PaypalRestApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Jonecoder\PaypalRestApi\Reporting\Transaction all($startDate = null, $endDate = null, int $page = 1, int $pageSize = 20)
 *
 * @see \Illuminate\Support\Facades\Facade
 *
 * @mixin \Jonecoder\PaypalRestApi\Reporting\Transaction
 */

class Transaction extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Transaction';
    }
}
