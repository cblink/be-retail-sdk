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
     * 创建商品营销活动
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.create
     */
    public function activityCreate(array $data)
    {
        return $this->post('activity.create', $data);
    }

    /**
     * 添加活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.sku.add
     */
    public function activitySkuAdd(array $data)
    {
        return $this->post('activity.sku.add', $data);
    }

    /**
     * 删除活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.sku.delete
     */
    public function activitySkuDelete(array $data)
    {
        return $this->post('activity.sku.delete', $data);
    }

    /**
     * 活动下线
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.disable
     */
    public function activityDisable(array $data)
    {
        return $this->post('activity.disable', $data);
    }

    /**
     * 查看活动
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.get
     */
    public function activityGet(array $data)
    {
        return $this->post('activity.get', $data);
    }

    /**
     * 查看活动商品列表
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.sku.list
     */
    public function activitySkuList(array $data)
    {
        return $this->post('activity.sku.list', $data);
    }

    /**
     * 批量添加商品活动
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.sku.add.batch
     */
    public function activitySkuAddBatch(array $data)
    {
        return $this->post('activity.sku.add.batch', $data);
    }

    /**
     * 批量删除商品活动
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.sku.delete.batch
     */
    public function activitySkuDeleteBatch(array $data)
    {
        return $this->post('activity.sku.delete.batch', $data);
    }

    /**
     * 更新活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.sku.update
     */
    public function activitySkuUpdate(array $data)
    {
        return $this->post('activity.sku.update', $data);
    }

    /**
     * 批量更新活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.sku.update.batch
     */
    public function activitySkuUpdateBatch(array $data)
    {
        return $this->post('activity.sku.update.batch', $data);
    }

    /**
     * 更新活动
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.update
     */
    public function activityUpdate(array $data)
    {
        return $this->post('activity.update', $data);
    }

    /**
     * N选1添加活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.ns1.sku.add
     */
    public function activityNs1SkuAdd(array $data)
    {
        return $this->post('activity.ns1.sku.add', $data);
    }

    /**
     * N选1批量添加活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.ns1.sku.add.batch
     */
    public function activityNs1SkuAddBatch(array $data)
    {
        return $this->post('activity.ns1.sku.add.batch', $data);
    }

    /**
     * N选1删除活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.ns1.sku.delete
     */
    public function activityNs1SkuDelete(array $data)
    {
        return $this->post('activity.ns1.sku.delete', $data);
    }

    /**
     * N选1批量删除活动商品
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/activity.ns1.sku.delete.batch
     */
    public function activityNs1SkuDeleteBatch(array $data)
    {
        return $this->post('activity.ns1.sku.delete.batch', $data);
    }
}