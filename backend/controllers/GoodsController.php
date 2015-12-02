<?php
namespace backend\controllers;
use Yii;
use backend\controllers\BaseController;
use backend\service\GoodsService;
use backend\models\GoodsImg;

class GoodsController extends BaseController
{
    public function actionIndex()
    {
        $goods = GoodsService::showGoods();
        return $this->render('index',['goods'=>$goods]);
    }

    // 添加商品
    public function actionAdd()
    {
        $path = $this->Classify();
        return $this->render('add',['path'=>$path]);
    }

    //查看商品详情
    public function actionDetails()
    {
        $id = Yii::$app->request->get('id');
        //查询出当前商品信息
        $goods = GoodsService::show($id);
        $style = GoodsService::showStyle($goods['sid']);
        $goods['sid'] = $style['name'];
        // print_r($list);exit;
        return $this->render('details',['goods'=>$goods]);
    }

    /**
    * 添加商品到数据库
    * 
    */
    public function actionInsert()
    {
        $goods = Yii::$app->request->Post();
        if($goods['sid'] != 0){
           $goods = GoodsService::insertGoods($goods);
            if($goods){
                Yii::$app->getSession()->setFlash('success', '添加成功');
                return $this->redirect(['goods/index']);
            }else{
                Yii::$app->getSession()->setFlash('error', '添加失败');
            }
        }else{
            Yii::$app->getSession()->setFlash('error', '添加失败，请选择商品分类');
        }
        return $this->redirect(['goods/add']);
    }


    /**
     * 修改商品页
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->get('id');
        //查询出当前商品信息
        $goods = GoodsService::show($id);
        $path = $this->Classify($goods['sid']);
        return $this->render('update',['path'=>$path,'goods'=>$goods]);
    }

    /**
     * 修改数据库
     */
    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');
        $goods = Yii::$app->request->post();
        $data = GoodsService::editGoods($id,$goods);
        if ($data) {
            Yii::$app->getSession()->setFlash('success', '更新成功');
            return $this->redirect(['goods/index']);
        }
        Yii::$app->getSession()->setFlash('error', '更新失败');
        return $this->redirect(['goods/update','id'=>$id]);
    }

    /**
     * 删除商品信息，同时删除上传的图片
     */
    public function actionDel()
    {
        $id = (int)Yii::$app->request->get('id');
        $del = GoodsService::del($id);
        $imgWaresPath = dirname($_SERVER['SCRIPT_FILENAME']).GoodsImg::UPLOAD_IMAGE_WARES.$id;
        $imgExtraPath = dirname($_SERVER['SCRIPT_FILENAME']).GoodsImg::UPLOAD_IMAGE_EXTRA.$id;
        if ($del) {
            //删除商品图片
            GoodsService::delImg($imgWaresPath);
            //删除展示图片
            GoodsService::delImg($imgExtraPath);
            Yii::$app->getSession()->setFlash('success', '删除成功');
        } else {
           Yii::$app->getSession()->setFlash('error', '删除失败');
        }
        return $this->redirect(['goods/index']);
    }
}