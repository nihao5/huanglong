<?php
namespace backend\controllers;
use backend\controllers\BaseController;
use backend\service\AddressService;

class AddressController extends BaseController
{
    public $enableCsrfValidation = false;
    
    public function actionIndex()
    {
        $list = AddressService::show();
        return $this->render('index',['list'=>$list]);
    }
}