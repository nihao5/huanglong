<?php
namespace backend\controllers;

use Yii;
use backend\controllers\BaseController;

class AdminController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    // 添加商品
    public function actionAdd()
    {
        return $this->render('add');
    }
}