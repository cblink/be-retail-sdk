<?php

namespace Cblink\BeRetail\Shop;

use Cblink\BeRetail\Client;

/**
 * Class Shop
 * @package Cblink\BeRetail\Shop
 *
 * @see https://open-be.ele.me/dev/api/apidoc#/%E5%95%86%E6%88%B7
 */
class Shop extends Client
{
    /**
     * 创建商户
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.create
     */
    public function shopCreate(array $data)
    {
        return $this->post('shop.create', $data);
    }

    /**
     * 更新商户
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.update
     */
    public function shopUpdate(array $data)
    {
        return $this->post('shop.update', $data);
    }

    /**
     * 商户列表
     *
     * @param int $sys_status
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.list
     */
    public function shopList(int $sys_status)
    {
        $data['sys_status'] = $sys_status;

        return $this->post('shop.list', $data);
    }

    /**
     * 下线商户
     *
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.offline
     */
    public function shopOffline($baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;

        return $this->post('shop.offline', $data);
    }

    /**
     * 商户开业
     *
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.open
     */
    public function shopOpen($baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;

        return $this->post('shop.open', $data);
    }

    /**
     * 商户歇业
     *
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.close
     */
    public function shopClose($baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;

        return $this->post('shop.close', $data);
    }

    /**
     * 查看商户
     *
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.get
     */
    public function shopGet($baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;

        return $this->post('shop.get', $data);
    }

    /**
     * 设置商户公告
     *
     * @param string $content
     * @param string $description
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.announcement.set
     */
    public function shopAnnouncementSet(string $content, string $description, $baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;
        $data['content'] = $content;
        $data['description'] = $description;

        return $this->post('shop.announcement.set', $data);
    }

    /**
     * 上传资质
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.aptitude.upload
     */
    public function shopAptitudeUpload(array $data)
    {
        return $this->post('shop.aptitude.upload', $data);
    }

    /**
     * 查看商户状态
     *
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.status.get
     */
    public function shopStatusGet($baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;

        return $this->post('shop.status.get', $data);
    }

    /**
     * 获取商户公告
     *
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.announcement.get
     */
    public function shopAnnouncementGet($baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;

        return $this->post('shop.announcement.get', $data);
    }

    /**
     * 获取商户资质
     *
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.aptitude.get
     */
    public function shopAptitudeGet($baidu_shop_id = '', $shop_id = '')
    {
        $data['shop_id'] = $shop_id;
        $data['baidu_shop_id'] = $baidu_shop_id;

        return $this->post('shop.aptitude.get', $data);
    }

    /**
     * 商户三方门店ID映射
     *
     * @param array $baidu_shop_ids
     * @param array $shop_ids
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.id.batchupdate
     */
    public function shopIdBatchupdate(array $baidu_shop_ids, array $shop_ids)
    {
        $data['baidu_shop_ids'] = $baidu_shop_ids;
        $data['shop_ids'] = $shop_ids;

        return $this->post('shop.id.batchupdate', $data);
    }

    /**
     * 获取资质类型
     *
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.aptitude.gettypes
     */
    public function shopAptitudeGettypes()
    {
        return $this->post('shop.aptitude.gettypes');
    }

    /**
     * 查看商户的营业状态
     *
     * @param int $platformFlag 来源平台,'1' 表示饿了么,'2' 表示饿了么星选;
     * @param string $shop_id
     * @param string $baidu_shop_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.busstatus.get
     */
    public function shopBusstatusGet(int $platformFlag, $baidu_shop_id = '', $shop_id = '')
    {
        return $this->post('shop.busstatus.get', compact('platformFlag', 'shop_id', 'baidu_shop_id'));
    }

    /**
     * 商户状态推送（下行）
     *
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.msg.push
     */
    public function rspShopMsgPush()
    {
        return $this->beRsp('shop.msg.push');
    }


    /**
     * 门店绑定消息通知
     *
     * @param int $bindResult
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.bind.msg
     */
    public function rspShopBindMsg(int $bindResult)
    {
        return $this->beRsp('shop.bind.msg', $bindResult);
    }


    /**
     * 门店解绑消息通知
     *
     * @param int $unbindResult
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/shop.unbind.msg
     */
    public function rspShopUnbindMsg(int $unbindResult)
    {
        return $this->beRsp('shop.unbind.msg', $unbindResult);
    }
}