<?php
namespace backend\service;
use backend\models\Style;

class StyleService
{
    public static function command()
    {
        $connection = \Yii::$app->db;
        $command = $connection->createCommand('SELECT *,concat(path,",",id) as paths FROM m_style ORDER BY paths');
        return $command->queryAll();
    }
    // 按给的id查询父级的数据
    public static function show($id)
    {
        return Style::find()->where(['id'=>$id])->asArray()->one();
    }
    // 插入数据到数据库
    public static function insertStyle($pid,$name,$path,$isshow=1)
    {
        $path = trim($path.','.$pid,",");
        $model = new Style();
        $model->pid = $pid;
        $model->name = "$name";
        $model->path = "$path";
        $model->isshow = $isshow;
        $model->modtime = "".time()."";
        return $model->save();
    }

    /**
     * @param $id
     * @return null|objcet
     */
    public static function showAll($id)
    {
        return Style::findOne(['id'=>$id]);
    }

    /**
     * 修改当前分类的名称，路径，pid
     * @param $id,$pid,$name,$path,$isshow
     * @return bool
     */
    public static function edit($id,$pid,$name,$path,$isshow)
    {
        $connection = \Yii::$app->db;
        $command = $connection->createCommand("UPDATE m_style SET `pid`=$pid,`path`='{$path}',`name`='$name',`isshow`=$isshow where `id`=$id");
        return $command->execute();
    }

    /**
     * @param $pid
     * $return bool
     */
    public static function showDel($id)
    {
        return Style::find()->where(['pid'=>$id])->one();
    }

    public static function del($id)
    {
        return Style::findOne($id)->delete();
    }
}