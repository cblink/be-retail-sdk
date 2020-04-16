<?php

namespace Cblink\BeRetail\Sku;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class SkuServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['sku'] = function ($pimple) {
            return new Sku($pimple);
        };
    }
}