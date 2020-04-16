<?php

namespace Cblink\BeRetail\Shop;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ShopServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['shop'] = function ($pimple) {
            return new Shop($pimple);
        };
    }
}