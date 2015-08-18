<?php
namespace frontend\controllers;
use yii\web\Controller;
use frontend\service\UserService;
use Yii;

class UserController extends Controller
{
	public $layout = false;
    // 注册
	public function actionRegister()
	{
        if(Yii::$app->request->isPost){
            $phone = Yii::$app->request->Post('phone');
            $username = Yii::$app->request->Post('nickname');
            $password = Yii::$app->request->Post('password');
            $data = UserService::insertUser($phone,$username,$password);
            if($data){
                Yii::$app->session->set('phone',$phone);
                Yii::$app->session->set('username',$username);
                Yii::$app->session->set('password',$password);
                echo "<script>alert('注册成功');location.href='../index/index';</script>";
                // return $this->redirect(['index/index']);
            }else{
                echo "<script>alert('注册失败');</script>";
            }
        }
		return $this->render('register');
	}
    // 注册时检测电话号码是否注册
    public function actionCheckPhone()
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax){
            $phone = Yii::$app->request->Post('phone');
            $data = UserService::selectPhone($phone);
            if($data){
                echo json_encode(['status'=>'-1','msg'=>'号码已注册']);exit;
            }
            echo json_encode(['status'=>'1','msg'=>'号码合格']);exit;
        }
    }
    // 注册时检测昵称是否注册
    public function actionCheckName() 
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax){
            $username = Yii::$app->request->Post('username');
            $data = UserService::selectName($username);
            if($data){
                echo json_encode(['status'=>'-1','msg'=>'号码已注册']);exit;
            }
            echo json_encode(['status'=>'1','msg'=>'号码合格']);exit;
        }
    }
 
    // 登陆
	public function actionLogin()
	{
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax){
            $username = Yii::$app->request->Post('username');
            $password = Yii::$app->request->Post('password');
            $data = UserService::checkUser($username,$password);
            if($data){
                Yii::$app->session->set('phone',$data['phone']);
                Yii::$app->session->set('username',$data['name']);
                Yii::$app->session->set('password',$password);
                echo json_encode(['status'=>'1','msg'=>'登录成功']);exit;
            }else{
                echo json_encode(['status'=>'-1','msg'=>'用户名或密码错误,请重新登录']);exit;
            }
        }
		return $this->render('login');
	}
}