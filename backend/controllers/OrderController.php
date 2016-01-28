<?php
namespace backend\controllers;

use Yii;
use backend\service\OrderService;
use backend\controllers\BaseController;

class OrderController extends BaseController
{
    //未发货订单列表
    public function actionIndex()
    {
        $list = OrderService::show(0);
        return $this->render('index',['list'=>$list]);
    }
    // 已发货订单列表
    public function actionDelivery()
    {
        $list = OrderService::show(1);
        return $this->render('delivery',['list'=>$list]);
    }
    //已收货订单列表
    public function actionReceipt()
    {
        $list = OrderService::show(2);
        return $this->render('receipt',['list'=>$list]);
    }
    // 换货列表
    public function actionBarter(){
        $list = OrderService::show(3);
        return $this->render('barter',['list'=>$list]);
    }
    // 退货订单列表
    public function actionReturnGoods()
    {
        $list = OrderService::show(4);
        return $this->render('return-goods',['list'=>$list]);
    }
    // 回收/取消订单列表
    public function actionRecovery()
    {
        $list = OrderService::show(5);
        return $this->render('recovery',['list'=>$list]);
    }

    // 订单详情页
    public function actionDetails()
    {
        $id = Yii::$app->request->get('id');
        $list = OrderService::showId($id);
        if(!$list){
            Yii::$app->getSession()->setFlash('error', '非法操作');
            return $this->redirect(['order/index']);
        }
        return $this->render('details',['list'=>$list]);
    }

    /**
     * 处理订单，修改订单状态
     */
    public function actionEditDelivery()
    {
        $state = Yii::$app->request->get();
        $order = OrderService::editState($state);
        if($order){
            Yii::$app->getSession()->setFlash('success', '操作成功');
        }else{
            Yii::$app->getSession()->setFlash('error', '操作失败');
        }
        return $this->redirect(Yii::$app->request->getReferrer());
    }
}