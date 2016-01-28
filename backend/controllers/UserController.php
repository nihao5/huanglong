<?php
namespace backend\controllers;

use Yii;
use backend\service\UserService;
use backend\controllers\BaseController;

class UserController extends BaseController
{
    public function actionIndex()
    {
        $list = UserService::show();
        return $this->render('index',['list'=>$list]);
    }

    /**
     * 修改用户页
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->get('id');
        $user = UserService::selId($id);
        return $this->render('update',['user'=>$user]);
    }

    /**
     * 更新到数据库
     */
    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');
        $user = Yii::$app->request->post();
        $result = UserService::editUser($id,$user);
        if($result){
            Yii::$app->getSession()->setFlash('success', '更新成功');
            return $this->redirect(['user/index']);
        }
        Yii::$app->getSession()->setFlash('error', '更新失败');
        return $this->redirect(['user/update','id'=>$id]);
    }

    /**
     * 删除方法
     */
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $result = UserService::delUser($id);
        if($result){
            Yii::$app->getSession()->setFlash('success', '删除成功');
        }else{
            Yii::$app->getSession()->setFlash('error', '删除失败');
        }
        return $this->redirect(['user/index']);
    }

}