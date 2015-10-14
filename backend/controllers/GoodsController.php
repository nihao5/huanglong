<?php
namespace backend\controllers;
use Yii;
use backend\controllers\BaseController;
use backend\service\GoodsService;

class GoodsController extends BaseController
{
    public function actionIndex()
    {
        $goods = GoodsService::showGoods();
        // echo '<pre>';
        // print_r($goods);exit;
        return $this->render('index',['goods'=>$goods]);
    }

    // 添加商品
    public function actionAdd()
    {
        $path = $this->Classify();
        return $this->render('add',['path'=>$path]);
    }

    /**
    * 添加商品到数据库
    * 
    */
    public function actionInsert()
    {
        $goods = Yii::$app->request->Post();
        // GoodsService::insertGoods($goods);
        echo '<pre>';
        print_r($goods);exit;
    }
}