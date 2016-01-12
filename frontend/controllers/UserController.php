<?php
namespace frontend\controllers;
use yii\web\Controller;
use frontend\service\UserService;
use Yii;

class UserController extends Controller
{
	public $layout = false;

    /**
     * 注册
     */ 
	public function actionRegister()
	{
        //判断请求类型
        if (Yii::$app->request->isPost) {
            $phone = Yii::$app->request->Post('phone');
            $username = Yii::$app->request->Post('nickname');
            $password = Yii::$app->request->Post('password');

            //插入数据库
            $data = UserService::insertUser($phone,$username,$password);

            //如果成功，记录session
            if ($data) {
                Yii::$app->session->set('phone',$phone);
                Yii::$app->session->set('username',$username);
                Yii::$app->session->set('password',$password);
                
                echo "<script>alert('注册成功');location.href='../index/index';</script>";
                // return $this->redirect(['index/index']);
            } else {
                echo "<script>alert('注册失败');</script>";
            }
        }
		return $this->render('register');
	}

    /**
     *检测电话号码是否注册
     */
    public function actionCheckPhone()
    {
        //判断请求类型
        if (Yii::$app->request->isPost && Yii::$app->request->isAjax) {
            $phone = Yii::$app->request->Post('phone');

            //查询号码是否存在
            $data = UserService::selectPhone($phone);

            if ($data) {
                echo json_encode(['status'=>'-1','msg'=>'号码已注册']);exit;
            }
            echo json_encode(['status'=>'1','msg'=>'号码合格']);exit;
        }
    }

    /**
     *检测昵称是否注册
     */
    public function actionCheckName() 
    {
        //判断请求类型
        if (Yii::$app->request->isPost && Yii::$app->request->isAjax) {
            $username = Yii::$app->request->Post('username');

            //查询用户名
            $data = UserService::selectName($username);

            if ($data) {
                echo json_encode(['status'=>'-1','msg'=>'号码已注册']);exit;
            }
            echo json_encode(['status'=>'1','msg'=>'号码合格']);exit;
        }
    }
 
    /**
     *登录
     */
	public function actionLogin()
	{
        //判断请求类型
        if (Yii::$app->request->isPost && Yii::$app->request->isAjax) {
            $username = Yii::$app->request->Post('username');
            $password = Yii::$app->request->Post('password');

            //查询用户是否存在
            $data = UserService::checkUser($username,$password);

            //如果存在记入session
            if ($data) {
                Yii::$app->session->set('phone',$data['phone']);
                Yii::$app->session->set('username',$data['name']);
                Yii::$app->session->set('password',$password);

                echo json_encode(['status'=>'1','msg'=>'登录成功']);exit;
            } else {
                echo json_encode(['status'=>'-1','msg'=>'用户名或密码错误,请重新登录']);exit;
            }
        }
		return $this->render('login');
	}

    /**
     *退出
     */
    public function actionLogout()
    {
        //清除session
        Yii::$app->session->remove('phone');
        Yii::$app->session->remove('username');
        Yii::$app->session->remove('password');

        return $this->redirect(['index/index']);
    }
}