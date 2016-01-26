<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Json;
use yii\web\Controller;

class BaseController extends Controller
{
    public function ajaxReturn($status, $data, $note)
    {
        $response = Yii::$app->getResponse();
        $response->content = Json::encode(['status'=>(int)$status, 'data'=>$data, 'note'=>$note]);
        $response->send();
        die();
    }
}