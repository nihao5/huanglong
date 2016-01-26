<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\service\BaseService;

class IndexController extends Controller
{
	public function actionIndex()
	{
        $goods = BaseService::getGoods();

        foreach ($goods as $k=>$v) {
            if ($goods[$k] == 'is_suggest') {
                //print_r($v);
            }
            
        }
        // print_r($s);
        // exit;
        // print_r($goods);exit;
		return $this->render('index', ['goods' => $goods]);
	}
}