<?php

namespace Cblink\BeRetail;

use Mouyong\Foundation\Foundation;
use Cblink\BeRetail\Sku\SkuServiceProvider;
use Cblink\BeRetail\Shop\ShopServiceProvider;
use Cblink\BeRetail\Order\OrderServiceProvider;
use Cblink\BeRetail\Common\CommonServiceProvider;
use Cblink\BeRetail\Activity\ActivityServiceProvider;

/**
 * Class Application
 * @package Cblink\BeRetail
 *
 * @property-read \Cblink\BeRetail\Common\Common $common
 * @property-read \Cblink\BeRetail\Sku\Sku $sku
 * @property-read \Cblink\BeRetail\Shop\Shop $shop
 * @property-read \Cblink\BeRetail\Activity\Activity $activity
 * @property-read \Cblink\BeRetail\Order\Order $order
 */
class Application extends Foundation
{
    protected $config = [
        // @see https://open-be.ele.me/dev/app/listpage 点击应用查看
        'source' => 'your-be-retail-source', // 合作方账号
        'secret' => 'your-be-retail-secret', // 秘钥

        'bindapply_type' => 1, // 1 门店绑定 2 门店取消绑定

        // 绑定类型，1 门店百度ID 2 供应商百度ID

        // 找商户索要权限，2 商品类接口 3 商户类接口 4 菜品类接口 5 订单类接口 6 营销类接口
        'wid'               => '', // 商户 id
        'auth_cmd_category' => '2,3,4,5,6',

        'log' => [
            'name' => 'be-retail',
        ],
        'http' => [
            'timeout' => 3,
           'base_uri' => 'https://api-be.ele.me/',
            'http_errors' => false,
            'headers' => [
                'content-type' => 'application/x-www-form-urlencode',
                'accept' => 'application/json',
            ],
        ],
        'cache' => [
            'namespace' => 'be-retail',
        ],
    ];

    protected $providers = [
        CommonServiceProvider::class,
        SkuServiceProvider::class,
        ShopServiceProvider::class,
        ActivityServiceProvider::class,
        OrderServiceProvider::class,
    ];
}