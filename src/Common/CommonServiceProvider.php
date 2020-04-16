<?php

namespace Cblink\BeRetail\Common;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class CommonServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['common'] = function ($pimple) {
            return new Common($pimple);
        };
    }
}