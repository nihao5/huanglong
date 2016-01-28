<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Json;
use yii\web\Controller;
use backend\models\Admin;

class LoginController extends Controller
{
    //管理员登录
    public function actionIndex()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->redirect(['goods/index']);
        }
        //判断请求类型
        if (Yii::$app->request->isPost && Yii::$app->request->isAjax) {
            $name = Yii::$app->request->Post('username');
            $password = (string)Yii::$app->request->Post('password');

            //查询管理员是否存在
            $admin = Admin::findOne(['name' => $name]);

            if (null === $admin) {
                $this->ajaxReturn(false, [], '用户不存在，请先注册');
            }

            //获取密码
            $passwordServer = $admin->getAttribute('password');

            if ($password !== $passwordServer) {
                $this->ajaxReturn(false, [], '密码错误，请重新输入');
            }

            //获取管理员id
            $adminId = $admin->getPrimaryKey();

            //如果存在记入session
            $session = Yii::$app->getSession();
            $session->open();

            //组装SESSION
            $sessionBody = [
                'adminId' => $adminId,
                'name' => $name,
            ];

            $sessionData = $session->set('username', $sessionBody);

            $this->ajaxReturn(true, [], '登录成功');
        }
        return $this->renderPartial('index');
    }

    public function ajaxReturn($status, $data, $note)
    {
        $response = Yii::$app->getResponse();
        $response->content = Json::encode(['status'=>(int)$status, 'data'=>$data, 'note'=>$note]);
        $response->send();
        die();
    }
}