<?php
namespace backend\controllers;
use yii\web\Controller;

class StyleController extends Controller
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