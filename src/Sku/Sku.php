<?php

namespace Cblink\BeRetail\Sku;

use Cblink\BeRetail\Client;

/**
 * Class Sku
 * @package Cblink\BeRetail\Sku
 * @see https://open-be.ele.me/dev/api/apidoc#/%E8%90%A5%E9%94%80
 */
class Sku extends Client
{
    /**
     * 商品上传
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.create
     */
    public function skuCreate(array $data)
    {
        return $this->post('sku.create', $data);
    }

    /**
     * 商品修改
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.update
     */
    public function skuUpdate(array $data)
    {
        return $this->post('sku.update', $data);
    }

    /**
     * 商品列表
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.list
     */
    public function skuList(array $data)
    {
        return $this->post('sku.list', $data);
    }

    /**
     * 商品上线
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.online
     */
    public function skuOnline(array $data)
    {
        return $this->post('sku.online', $data);
    }

    /**
     * 商品下线
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.offline
     */
    public function skuOffline(array $data)
    {
        return $this->post('sku.offline', $data);
    }

    /**
     * 批量修改商品库存
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.stock.update.batch
     */
    public function skuStockUpdateBatch(array $data)
    {
        return $this->post('sku.stock.update.batch', $data);
    }

    /**
     * 新增自定义分类
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.shop.category.create
     */
    public function skuShopCategoryCreate(array $data)
    {
        return $this->post('sku.shop.category.create', $data);
    }

    /**
     * 修改自定义分类
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.shop.category.update
     */
    public function skuShopCategoryUpdate(array $data)
    {
        return $this->post('sku.shop.category.update', $data);
    }

    /**
     * 删除自定义分类
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.shop.category.delete
     */
    public function skuShopCategoryDelete(array $data)
    {
        return $this->post('sku.shop.category.delete', $data);
    }

    /**
     * 绑定自定义分类
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.shop.category.map
     */
    public function skuShopCategoryMap(array $data)
    {
        return $this->post('sku.shop.category.map', $data);
    }

    /**
     * 批量修改商品价格
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.price.update.batch
     */
    public function skuPriceUpdateBatch(array $data)
    {
        return $this->post('sku.price.update.batch', $data);
    }

    /**
     * 获取品牌列表
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.brand.list
     */
    public function skuBrandList(array $data)
    {
        return $this->post('sku.brand.list', $data);
    }

    /**
     * 获取分类列表
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.category.list
     */
    public function skuCategoryList(array $data)
    {
        return $this->post('sku.category.list', $data);
    }

    /**
     * 商品批量删除
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.delete
     */
    public function skuDelete(array $data)
    {
        return $this->post('sku.delete', $data);
    }

    /**
     * 绑定商品与自定义商品ID
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.shop.customsku.map
     */
    public function skuShopCustomskuMap(array $data)
    {
        return $this->post('sku.shop.customsku.map', $data);
    }

    /**
     * 处方药推方
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/prescription.push
     */
    public function prescriptionPush(array $data)
    {
        return $this->post('prescription.push', $data);
    }

    /**
     * 单个商品下线
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.offline.one
     */
    public function skuOfflineOne(array $data)
    {
        return $this->post('sku.offline.one', $data);
    }

    /**
     * 单个商品上线
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.online.one
     */
    public function skuOnlineOne(array $data)
    {
        return $this->post('sku.online.one', $data);
    }

    /**
     * 修改单个商品库存
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.stock.update.one
     */
    public function skuStockUpdateOne(array $data)
    {
        return $this->post('sku.stock.update.one', $data);
    }

    /**
     * 修改单个商品价格
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.price.update.one
     */
    public function skuPriceUpdateOne(array $data)
    {
        return $this->post('sku.price.update.one', $data);
    }

    /**
     * 获取商户自定义分类下商品列表
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.shop.customsku.list
     */
    public function skuShopCustomskuList(array $data)
    {
        return $this->post('sku.shop.customsku.list', $data);
    }

    /**
     * 上传富文本描述信息
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.uploadrtf
     */
    public function skuUploadrtf(array $data)
    {
        return $this->post('sku.uploadrtf', $data);
    }

    /**
     * 根据upc码查询是否平台药品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/sku.stdupc.exist
     */
    public function skuStdupcExist(array $data)
    {
        return $this->post('sku.stdupc.exist', $data);
    }
}