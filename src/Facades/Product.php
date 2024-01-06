<?php

namespace Jonecoder\PaypalRestApi\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static \Jonecoder\PaypalRestApi\Catalogs\Product all(int $page = 1, int $pageSize = 20, string $totalRequired = 'true')
 * @method static \Jonecoder\PaypalRestApi\Catalogs\Product create(array $data)
 * @method static \Jonecoder\PaypalRestApi\Catalogs\Product retrieve($id)
 * @method static \Jonecoder\PaypalRestApi\Catalogs\Product update(array $data, $id)
 *
 * @see \Illuminate\Support\Facades\Facade
 *
 * @mixin \Jonecoder\PaypalRestApi\Catalogs\Product
 */

class Product extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Product';
    }
}
