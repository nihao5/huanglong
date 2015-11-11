<?php
namespace backend\controllers;
use Yii;
use backend\controllers\BaseController;
use backend\service\GoodsService;

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
        if($data){
            Yii::$app->getSession()->setFlash('success', '更新成功');
            return $this->redirect(['goods/index']);
        }
        Yii::$app->getSession()->setFlash('error', '更新失败');
        return $this->redirect(['goods/update','id'=>$id]);
    }

    /**
     * 删除
     */
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $del = GoodsService::del($id);
        if($del){
            Yii::$app->getSession()->setFlash('success', '删除成功');
        }else{
           Yii::$app->getSession()->setFlash('error', '删除失败'); 
        }
        return $this->redirect(['goods/index']);
    }
}