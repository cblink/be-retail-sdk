<?php

namespace Cblink\BeRetail\Activity;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ActivityServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['activity'] = function ($pimple) {
            return new Activity($pimple);
        };
    }
}