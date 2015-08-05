<?php
namespace backend\controllers;
use yii\web\Controller;
use backend\service\AddressService;

class AddressController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex()
    {
        $list = AddressService::show();
        return $this->render('index',['list'=>$list]);
    }
    public function actionAdd()
    {
        return $this->render('add');
    }
}