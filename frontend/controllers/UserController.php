<?php
namespace frontend\controllers;
use yii\web\Controller;

class UserController extends Controller
{
	public $layout = false;
	public function actionRegister()
	{
		return $this->render('register');
	}

	public function actionLogin()
	{
		return $this->render('login');
	}
}