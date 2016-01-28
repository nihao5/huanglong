<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\helpers\Json;
use yii\web\Controller;
use backend\models\Style;
use yii\filters\AccessControl;

class BaseController extends Controller
{
    public function behaviors()
    {
        $session = Yii::$app->getSession();
        $session->open();
        $sessionData = $session->get('username');
        if (!empty($sessionData)) {
            return [];
        }
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                $this->goBack('login/index'),
                // 'denyCallback' => function ($rule, $action) {
                //     // if (Url::toRoute(['login/index']) != Yii::$app->request->url) {
                //     //     return $this->redirect(['login/index']);
                //     // }
                //     Yii::$app->user->returnUrl = Yii::$app->request->url;
                //     return $this->redirect(['login/index']);
                // },
            ],
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    //无限分类
    public function Classify($pid=0)
    {
        $connection = \Yii::$app->db;
        $command = $connection->createCommand('SELECT *,concat(path,",",id) as paths FROM m_style ORDER BY paths');
        $posts = $command->queryAll();
        if($pid == 0){
            $path = '<option value="0" selected>--根分类--</option>';
        }else{
            $path = '<option value="0">--根分类--</option>';
        }
        foreach($posts as $k=>$v){
            $selected = ($pid==$v['id'])?'selected':'';
            $deep = count(explode(',',$v['path']))-1;
            $path .='<option value="'.$v['id'].'" '.$selected.'>'.str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp',$deep).'|-'.$v['name'].'</option>';
        }
        return $path;
    }

    public function ajaxReturn($status, $data, $note)
    {
        $response = Yii::$app->getResponse();
        $response->content = Json::encode(['status'=>(int)$status, 'data'=>$data, 'note'=>$note]);
        $response->send();
        die();
    }
}