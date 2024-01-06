<?php

namespace Jonecoder\PaypalRestApi\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static \Jonecoder\PaypalRestApi\Billing\Plan all(int $page = 1, int $pageSize = 20, string $totalRequired = 'true', ?string $productId = null)
 * @method static \Jonecoder\PaypalRestApi\Billing\Plan create(array $data)
 * @method static \Jonecoder\PaypalRestApi\Billing\Plan retrieve($id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Plan update(array $data, $id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Plan activate($id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Plan deactivate($id)
 *
 * @see \Illuminate\Support\Facades\Facade
 *
 * @mixin \Jonecoder\PaypalRestApi\Billing\Plan
 */

class Plan extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Plan';
    }
}
