<?php
namespace backend\controllers;

use Yii;
use backend\service\LinkService;

class LinkController extends BaseController
{
    public function actionIndex()
    {
        $list = LinkService::show();
        return $this->render('index',['list'=>$list]);
    }

    // 添加商品
    public function actionAdd()
    {
        return $this->render('add');
    }

    /**
     * 添加到数据库
     */
    public function actionInsert()
    {
        $request = Yii::$app->request->post();
        if (Yii::$app->request->isPost) {
            $LinkService = LinkService::insertLink($request);
            if ($LinkService) {
                Yii::$app->getSession()->setFlash('success', '添加成功');
            } else {
                Yii::$app->getSession()->setFlash('error', '添加失败');
            }
        } else {
            Yii::$app->getSession()->setFlash('error', '非法操作');
        }
        return $this->redirect(['link/index']);
    }

    /**
     * 更新页面
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->get('id');
        $list = LinkService::show($id);
        return $this->render('update',['list'=>$list]);
    }

    /**
     * 插入到数据库
     */
    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');
        $request = Yii::$app->request->post();
        if (!Yii::$app->request->isPost) {
            Yii::$app->getSession()->setFlash('error', '非法操作');
            return $this->redirect(['link/update','id'=>$id]);
        }
        $LinkService = LinkService::insertLink($request,$id);
        if (!$LinkService) {
            Yii::$app->getSession()->setFlash('error', '更新失败');
            return $this->redirect(['link/update','id'=>$id]);
        }
        Yii::$app->getSession()->setFlash('success', '更新成功');
        return $this->redirect(['link/index']);
    }

    /**
     * 删除数据
     */
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $LinkService = LinkService::delLink($id);
        if (!$LinkService) {
            Yii::$app->getSession()->setFlash('error', '删除失败');
        } else {
            Yii::$app->getSession()->setFlash('success', '删除成功');
        }
        return $this->redirect(['link/index']);
    }
}