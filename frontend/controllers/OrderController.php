<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;

class OrderController extends Controller
{
	public $layout = false;
	// 我的订单
	public function actionList()
	{
		return $this->render('list');
	}

	// 订单确认页
	public function actionVerify()
	{
		return $this->render('verify');
	}
}