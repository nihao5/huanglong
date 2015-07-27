<?php
namespace backend\controllers;
use yii\web\Controller;
use backend\models\Address;

class AddressController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}