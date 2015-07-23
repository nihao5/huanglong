<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class CartController extends Controller
{
	public $layout = "cart";
	public function actionIndex()
	{
		return $this->render('index');
	}
}