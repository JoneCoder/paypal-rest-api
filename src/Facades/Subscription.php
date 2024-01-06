<?php

namespace Jonecoder\PaypalRestApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Jonecoder\PaypalRestApi\Billing\Subscription create(array $data)
 * @method static \Jonecoder\PaypalRestApi\Billing\Subscription retrieve($id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Subscription transactions($id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Subscription update(array $data, $id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Subscription activate($id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Subscription cancel($id)
 * @method static \Jonecoder\PaypalRestApi\Billing\Subscription getApprovalLink($subscription)
 *
 * @see \Illuminate\Support\Facades\Facade
 *
 * @mixin \Jonecoder\PaypalRestApi\Billing\Subscription
 */
class Subscription extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Subscription';
    }
}
