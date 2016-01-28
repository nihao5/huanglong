<?php
namespace backend\controllers;

use Yii;
use backend\models\Goods;
use backend\service\UploadHandler;
use backend\controllers\BaseController;

class GoodsImgController extends BaseController
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $gid = Yii::$app->request->get('id');
        return $this->render('index',['gid'=>$gid]);
    }

    //展示图页 
    public function actionImgextra()
    {
        $gid = Yii::$app->request->get('id');
        return $this->render('imgextra',['gid'=>$gid]);
    }

    //上传请求
    public function actionUploaded()
    {
        $gid = Yii::$app->request->get('gid');
        $zs = Yii::$app->request->get('zs');
        
        if (!$gid) {
            Yii::$app->getSession()->setFlash('error', '查看图片时缺少必要的参数');
            return $this->redirect(['goods/index']);
        }

        //如果为真，上传展示图片，否则上传商品图片
        if ($zs) {
            //上传图片路径
            $path = Goods::UPLOAD_IMAGE_EXTRA.$gid.'/';

            //请求上传图片接口
            $uploadHandler = new UploadHandler($gid,$path);
        } else {
            $path = Goods::UPLOAD_IMAGE_WARES.$gid.'/';
            $uploadHandler = new UploadHandler($gid,$path);
        }
    }
}