<?php

namespace Cblink\BeRetail\Common;

use Cblink\BeRetail\Client;

/**
 * Class Common
 * @package Cblink\BeRetail\Common
 *
 * @see https://open-be.ele.me/dev/api/apidoc#/%E5%85%AC%E5%85%B1
 */
class Common extends Client
{
    /**
     * 上传图片
     *
     * @param string $url
     * @param string $data
     * @param int $type
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/picture.upload
     */
    public function pictureUpload(string $url, $data = '', $type = 1)
    {
        return $this->post('picture.upload', compact('url', 'data', 'type'));
    }

    /**
     * 城市信息
     *
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/common.shopcities
     */
    public function commonShopcities($pid)
    {
        return $this->post('common.shopcities', compact('pid'));
    }

    /**
     * 商户分类
     *
     * @param string $level
     * @param string $category_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/common.shopcategories
     */
    public function commonShopcategories($level = '', $category_id = '')
    {
        return $this->post('common.shopcategories', compact('level', 'category_id'));
    }

    /**
     * 业态分类
     *
     * @param string $category_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/common.businesscategories
     */
    public function commonBusinesscategories($category_id = '')
    {
        return $this->post('common.businesscategories', compact('category_id'));
    }
}