<?php
namespace backend\controllers;
use Yii;
use backend\controllers\BaseController;
use backend\service\StyleService;

class StyleController extends BaseController
{
    // 遍历分类
    public function actionIndex()
    {
        $posts = StyleService::command();
        return $this->render('index',['posts'=>$posts]);
    }

    // 添加商品
    public function actionAdd()
    {
        $path = $this->Classify();
        // $posts = StyleService::command();
        // $path = '';
        // $path .= '<option value="0" selected>--根分类--</option>';
        // foreach($posts as $k=>$v){
        //     $deep = count(explode(',',$v['path']))-1;
        //     $path .='<option value="'.$v['id'].'">'.str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp',$deep).'|-'.$v['name'].'</option>';
        // }
        return $this->render('add',['path'=>$path]);
    }
    // 添加分类到数据库
    public function actionInsert()
    {
        if(Yii::$app->request->isPost){
            $pid = Yii::$app->request->Post('selectBox');
            $name = Yii::$app->request->Post('fullname');
            $isshow = Yii::$app->request->Post('isshow');
            $data = StyleService::show($pid);//按父级id查询到父级的数据
            $path = $data['path'];
            $datas = StyleService::insertStyle($pid,$name,$path,$isshow);
            if($datas){
                Yii::$app->getSession()->setFlash('success', '添加成功');
                return $this->redirect(['style/index']);
            }else{
                Yii::$app->getSession()->setFlash('error', '添加失败,请重新添加');
                return $this->redirect(['style/add']);
            }
            
        }
        Yii::$app->getSession()->setFlash('error', '非法操作，请重新添加');
        return $this->redirect(['style/add']);
    }

    //更新分类
    public function actionUpdate()
    {
        $id = Yii::$app->request->get('id');
        //查询出当前分类的名称，以及pid
        $style = StyleService::showAll($id);
        $path = $this->Classify($style['pid']);
        return $this->render('update',['path'=>$path,'style'=>$style]);
    }

    // 更新分类到数据库
    public function actionEdit()
    {
        if(Yii::$app->request->isPost){
            $id = Yii::$app->request->Post('id');//当前分类的id
            $pid = Yii::$app->request->Post('selectBox');//上层分类的id
            $name = Yii::$app->request->Post('fullname');
            $isshow = Yii::$app->request->Post('isshow');
            // 先进行查询，通过传过来的pid，查询到path, 用来限制把父类放到子类中
            $StyleService = StyleService::show($pid);
            if($pid == 0){
                $path = 0;//根分类
            }else{
                $path = $StyleService['path'].','.$pid;//上层分类path形成当前分类的path
            }
            if(in_array($id,explode(',',$path))){
                Yii::$app->getSession()->setFlash('error', '不能将当前分类移动到当前分类或子分类中');
                return $this->redirect(['style/update','id'=>$id]);
            };
            // 查询出当前分类的path,用来修改子类中的path
            $npath = StyleService::show($id);
            $nspath = $npath['path'].','.$id;
            $style = StyleService::edit($id,$pid,$name,$path,$isshow);
            if($style){
                $connection = \Yii::$app->db;
                $commands = $connection->createCommand("UPDATE m_style SET `path`=replace(`path`,'{$nspath}','{$path},$id') where `path` like '{$nspath}%'");
                $commands->execute();
                Yii::$app->getSession()->setFlash('success', '修改成功');
                return $this->redirect(['style/index']);
            }
            Yii::$app->getSession()->setFlash('error', '修改失败，请重新操作');
            return $this->redirect(['style/update','id'=>$id]);
        }
        Yii::$app->getSession()->setFlash('error', '非法操作，请重新修改');
        return $this->redirect(['style/update','id'=>$id]);
    }

    // 删除分类
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        //查询当前id是否是别的分类的pid
        $StyleService = StyleService::showDel($id);
        if($StyleService){
            Yii::$app->getSession()->setFlash('error', '该分类下有子分类，请先删除子分类');
            return $this->redirect(['style/index']);
        }
        $del = StyleService::del($id);
        if($del){
            Yii::$app->getSession()->setFlash('success', '删除成功');
        }else{
            Yii::$app->getSession()->setFlash('error', '删除失败');
        }
        return $this->redirect(['style/index']);
    }
}