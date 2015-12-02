<?php
namespace backend\controllers;
use Yii;
use backend\controllers\BaseController;
use backend\service\GoodsImgService;

class GoodsImgController extends BaseController
{
    public function actionIndex()
    {
        $id = Yii::$app->request->get('id');
        $list = GoodsImgService::show($id);
        return $this->render('index',['list'=>$list,'id'=>$id]);
    }

    // 添加页
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        return $this->render('add',['id'=>$id]);
    }

    /**
    * 添加到数据库
    * 
    */
    public function actionInsert()
    {
        $request = Yii::$app->request->Post();
        if (Yii::$app->request->isPost) {
            if (!empty($request['sid'])) {
                $return = GoodsImgService::insertImg($request);
                if ($return) {
                    Yii::$app->getSession()->setFlash('success', '添加成功');
                    return $this->redirect(['goods-img/index','id'=>$request['sid']]);
                } else {
                    Yii::$app->getSession()->setFlash('error', '添加失败');
                }
            } else {
                Yii::$app->getSession()->setFlash('error', '缺少必要的参数');
            }
        } else {
            Yii::$app->getSession()->setFlash('error', '非法操作');
        }
        return $this->redirect(['goods-img/add','id'=>$request['sid']]);
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