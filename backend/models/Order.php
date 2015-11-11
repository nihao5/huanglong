<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%m_order}}".
 *
 * @property string $id
 * @property integer $uid
 * @property integer $gid
 * @property integer $addid
 * @property integer $sn
 * @property integer $state
 * @property integer $money
 * @property integer $express_money
 * @property integer $num
 * @property string $message
 * @property integer $addtime
 */
class Order extends ActiveRecord
{
    const TABLE_NAME = '{{%m_order}}';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return self::TABLE_NAME;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'gid', 'addid', 'sn', 'money', 'express_money', 'num', 'addtime'], 'required'],
            [['uid', 'gid', 'addid', 'sn', 'state', 'money', 'express_money', 'num', 'addtime', 'edittime'], 'integer'],
            [['message'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '订单',
            'uid' => 'Uid',
            'gid' => 'Gid',
            'addid' => 'Addid',
            'sn' => '订单号',
            'state' => '订单状态  0 未发货，1 已发货，2 已收货，3已付款，4 退货，5 取消订单',
            'money' => '支付金额',
            'express_money' => '快递金额',
            'num' => '购买数量',
            'message' => '留言',
            'addtime' => '下单时间',
            'edittime' => '订单处理时间'
        ];
    }

    /**
     * 获取用户对象
     */
    public function getUser()
    {
        if($this->getIsNewRecord()){
            return [];
        }
        $data = User::findOne($this->getAttribute('uid'));
        return $data;
    }

    /**
     * 获取商品对象
     */
    public function getGoods()
    {
        if($this->getIsNewRecord()){
            return [];
        }
        $data = Goods::findOne($this->getAttribute('gid'));
        return $data;
    }

    /**
     * 获取地址对象
     */
    public function getAddress()
    {
        if($this->getIsNewRecord()){
            return [];
        }
        $data = Address::findOne($this->getAttribute('addid'));
        return $data;
    }
}
