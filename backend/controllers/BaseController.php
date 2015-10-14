<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Style;

class BaseController extends Controller
{
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
}