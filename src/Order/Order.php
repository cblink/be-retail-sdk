<?php

namespace Cblink\BeRetail\Order;

use Cblink\BeRetail\Client;

/**
 * Class Order
 * @package Cblink\BeRetail\Order
 *
 * @see https://open-be.ele.me/dev/api/apidoc#/%E8%AE%A2%E5%8D%95
 */
class Order extends Client
{
    /**
     * 确认订单
     *
     * @return mixed
     *
     * https://open-be.ele.me/dev/api/apidoc#/detail/order.create
     */
    public function rspOrderCreate($source_order_id)
    {
        return $this->beRsp('order.create', compact('source_order_id'));
    }

    /**
     * 确认订单
     *
     * @return mixed
     *
     * https://open-be.ele.me/dev/api/apidoc#/detail/order.confirm
     */
    public function orderConfirm($order_id)
    {
        return $this->post('order.confirm', compact('order_id'));
    }

    /**
     * 取消订单
     *
     * @param string $order_id
     * @param string $type
     * @param string $reason
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.cancel
     */
    public function orderCancel(string $order_id, string $type, string $reason)
    {
        return $this->post('order.cancel', compact('order_id', 'type', 'reason'));
    }

    /**
     * 订单送达
     *
     * @param string $order_id
     * @param string $phone
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.complete
     */
    public function orderComplete(string $order_id, string $phone = '')
    {
        return $this->post('order.complete', compact('order_id', 'phone'));
    }

    /**
     * 查看订单状态
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.status.get
     */
    public function orderStatusGet(string $order_id)
    {
        return $this->post('order.status.get', compact('order_id'));
    }

    /**
     * 查看订单详情
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.get
     */
    public function orderGet(string $order_id)
    {
        return $this->post('order.get', compact('order_id'));
    }

    /**
     * 查看订单列表
     *
     * @param array $data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.list
     */
    public function orderList(array $data)
    {
        return $this->post('order.list', $data);
    }

    /**
     * 创建订单
     *
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.status.push
     */
    public function rspOrderStatusPush()
    {
        return $this->beRsp('order.status.push');
    }

    /**
     * 商户发起部分退款申请
     *
     * @param string $order_id
     * @param array $products
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.partrefund
     */
    public function orderPartrefund(string $order_id, array $products)
    {
        return $this->post('order.partrefund', compact('order_id', 'products'));
    }

    /**
     * 部分退款订单信息推送
     *
     * @param string $order_id
     * @param string $eleme_order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.partrefund.push
     */
    public function orderPartrefundPush(string $order_id, string $eleme_order_id)
    {
        return $this->post('order.id.convert', compact('order_id', 'eleme_order_id'));
    }

    /**
     * 拒绝用户取消单/退单
     *
     * @param string $order_id
     * @param string $refund_order_id
     * @param string $refuse_reason
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.disagreerefund
     */
    public function orderDisagreerefund(string $order_id, string $refund_order_id, string $refuse_reason)
    {
        return $this->post('order.disagreerefund', compact('order_id', 'refund_order_id', 'refuse_reason'));
    }

    /**
     * 同意用户取消单/退单
     *
     * @param string $order_id
     * @param string $refund_order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.agreerefund
     */
    public function orderAgreerefund(string $order_id, string $refund_order_id)
    {
        return $this->post('order.agreerefund', compact('order_id', 'refund_order_id'));
    }

    /**
     * 获取订单隐私信息
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.privateinfo
     */
    public function orderPrivateinfo(string $order_id)
    {
        return $this->post('order.privateinfo', compact('order_id'));
    }

    /**
     * 查看部分退款订单详情
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.partrefund.get
     */
    public function orderPartrefundGet(string $order_id)
    {
        return $this->post('order.partrefund.get', compact('order_id'));
    }

    /**
     * 获取未处理取消单/退单
     *
     * @param string $baidu_shop_id
     * @param string $shop_id
     * @param int $page
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.cancellist
     */
    public function orderCancellist(string $baidu_shop_id, string $shop_id = '', $page = 1)
    {
        return $this->post('order.cancellist', compact('baidu_shop_id', 'shop_id', 'page'));
    }

    /**
     * 获取未处理部分退单
     *
     * @param string $baidu_shop_id
     * @param string $shop_id
     * @param int $page
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.partrefund.untrelist
     */
    public function orderPartrefundUntrelist(string $baidu_shop_id, string $shop_id, $page = 1)
    {
        return $this->post('order.partrefund.untrelist', compact('baidu_shop_id', 'shop_id', 'page'));
    }

    /**
     * 获取众包订单配送费
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.getDeliveryFeeForCrowd
     */
    public function orderGetDeliveryFeeForCrowd(string $order_id)
    {
        return $this->post('order.getDeliveryFeeForCrowd', compact('order_id'));
    }

    /**
     * 呼叫配送
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.callDelivery
     */
    public function orderCallDelivery(string $order_id)
    {
        return $this->post('order.callDelivery', compact('order_id'));
    }

    /**
     * 取消呼叫配送
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.cancelDelivery
     */
    public function orderCancelDelivery(string $order_id)
    {
        return $this->post('order.cancelDelivery', compact('order_id'));
    }

    /**
     * 获取订单配送信息
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.delivery.get
     */
    public function orderDeliveryGet(string $order_id)
    {
        return $this->post('order.delivery.get', compact('order_id'));
    }

    /**
     * 配送异常不再配送
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.stopdelivery
     */
    public function orderStopdelivery(string $order_id)
    {
        return $this->post('order.stopdelivery', compact('order_id'));
    }

    /**
     * 配送异常切自配送
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.switchselfdelivery
     */
    public function orderSwitchselfdelivery(string $order_id)
    {
        return $this->post('order.switchselfdelivery', compact('order_id'));
    }

    /**
     * 订单送出
     *
     * @param string $order_id
     * @param string $phone
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.sendout
     */
    public function orderSendout(string $order_id, $phone = '')
    {
        return $this->post('order.sendout', compact('order_id', 'phone'));
    }

    /**
     * 获取商户未处理催单
     *
     * @param string $baidu_shop_id
     * @param string $shop_id
     * @param int $page
     * @param int $quantity
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.remind.get
     */
    public function orderRemindGet(string $baidu_shop_id, string $shop_id = '', $page = 1, $quantity = 20)
    {
        return $this->post('order.remind.get', compact('baidu_shop_id', 'shop_id', 'page', 'quantity'));
    }

    /**
     * 商户回复催单
     *
     * @param string $order_id
     * @param string $reply_type
     * @param string $reply_msg
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.remind.reply
     */
    public function orderRemindReply(string $order_id, string $reply_type, $reply_msg = '')
    {
        return $this->post('order.remind.reply', compact('order_id', 'reply_type', 'reply_msg'));
    }

    /**
     * 设置门店限单值
     *
     * @param string $baidu_shop_id
     * @param string $shop_id
     * @param array $limit_data
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.limited.taking
     */
    public function orderLimitedTaking(string $baidu_shop_id, string $shop_id = '', $limit_data = [])
    {
        return $this->post('order.limited.taking', compact('baidu_shop_id', 'shop_id', 'limit_data'));
    }

    /**
     * 设置门店限单值
     *
     * @param string $order_id
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.pickcomplete
     */
    public function orderPickcomplete(string $order_id)
    {
        return $this->post('order.pickcomplete', compact('order_id'));
    }

    /**
     * 用户申请订单取消/退款
     *
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.user.cancel
     */
    public function rspOrderUserCancel()
    {
        return $this->beRsp('order.user.cancel');
    }

    /**
     * 订单核销
     *
     * @param string $order_id
     * @param string $pick_up_code
     * @param string $qr_code
     * @return mixed
     *
     * @see https://open-be.ele.me/dev/api/apidoc#/detail/order.checkout
     */
    public function orderCheckout(string $order_id, string $pick_up_code = '', string $qr_code = '')
    {
        return $this->post('order.checkout', compact('order_id', 'pick_up_code', 'qr_code'));
    }
}