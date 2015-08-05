<?php
namespace backend\controllers;
use yii\web\Controller;
use backend\service\UserService;

class UserController extends Controller
{
    public function actionIndex()
    {
        $list = UserService::show();
        return $this->render('index',['list'=>$list]);
    }

    // 添加商品
    public function actionAdd()
    {
        return $this->render('add');
    }
}