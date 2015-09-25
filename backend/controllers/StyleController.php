<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\service\StyleService;

class StyleController extends Controller
{
    // 遍历分类
    public function actionIndex()
    {
        $connection = \Yii::$app->db;
        $command = $connection->createCommand('SELECT *,concat(path,",",id) as paths FROM m_style order by paths');
        $posts = $command->queryAll();
        // print_r($posts);exit;
        return $this->render('index',['posts'=>$posts]);
    }

    // 添加商品
    public function actionAdd()
    {
        $connection = \Yii::$app->db;
        $command = $connection->createCommand('SELECT id,pid,name,path,concat(path,",",id) as paths FROM m_style order by paths');
        $posts = $command->queryAll();
        $path = '';
        $path .= '<option value="0" selected>--根分类--</option>';
        foreach($posts as $k=>$v){
            $deep = count(explode(',',$v['path']))-1;
            $path .='<option value="'.$v['id'].'">'.str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp',$deep).'|-'.$v['name'].'</option>';
        }
        return $this->render('add',['path'=>$path]);
    }
    // 添加分类到数据库
    public function actionInsert()
    {
        if(Yii::$app->request->isPost){
            $pid = Yii::$app->request->Post('selectBox');
            $name = Yii::$app->request->Post('fullname');
            $isshow = Yii::$app->request->Post('isshow');
            $data = StyleService::show($pid);
            $path = $data['path'];
            $datas = StyleService::insertStyle($pid,$name,$path,$isshow);
            if($datas){
                Yii::$app->getSession()->setFlash('success', '添加成功');
            }else{
                Yii::$app->getSession()->setFlash('error', '添加失败');
            }
            return $this->redirect(['style/index']);
        }
        Yii::$app->getSession()->setFlash('error', '非法操作，请重新添加');
        return $this->render('insert');
    }

    public function actionUpdate()
    {
        $id = Yii::$app->request->get('id');
        echo $id;
    }
}