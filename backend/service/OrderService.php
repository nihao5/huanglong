<?php
namespace backend\service;

use Yii;
use backend\models\Order;

class OrderService
{
    //根据状态查询订单
    public static function show($state=0)
    {
        return Order::find()->where(['state'=>$state])->all();
    }

    /**
     * 根据id查询
     */
    public static function showId($id)
    {
        return Order::findOne($id);
    }

    /**
     * 修改订单状态
     */
    public static function editState($state)
    {
        $model = Order::findOne($state['id']);
        if(!$model){
            return false;
        }
        $model->setAttributes([
            'state' => $state['state'],
            'edittime' => time()
        ]);
        return $model->save();
    }
}