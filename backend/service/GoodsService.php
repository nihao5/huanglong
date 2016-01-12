<?php
namespace backend\service;

use Yii;
use backend\models\Goods;
use backend\models\GoodsColor;
use backend\models\GoodsInventory;
use backend\models\Style;

class GoodsService
{
    /*
    *关联查询商品表和分类表信息
    */
    public static function showGoods()
    {
        return $goods = Goods::find()->joinWith('style')->asArray()->all();
    }

    /**
    * 把商品插入到数据库
    *
    */
    public static function insertGoods($goods)
    {
        $good = array();
        foreach($goods as $k=>$v){
            if($v != null){
                if($k != '_csrf'){
                    //判断促销日期是否存在
                    if ($k == 'sale_date') {
                        //把日期变成时间戳
                        $good[$k] = strtotime($v);
                    } else {
                        $good[$k] = "$v"; 
                    }
                }
            }
        }

        $good['addtime'] = time();

        $model = new Goods();

        $model->setAttributes($good);

        return $model->save();
    }

    /**
     * 查询出分类id
     */
    public static function show($id)
    {
        return Goods::findOne(['id'=>$id]);
    }

    //查询分类名称
    public static function showStyle($id)
    {
        return Style::findOne(['id'=>$id]);
    }

    /**
     * 修改数据库
     */
    public static function editGoods($showGoods, $goods)
    {
        $showGoods->setAttributes(
            $goods
        );
        return $showGoods->save();
    }

    //删除数据库的数据
    public static function del($id)
    {
        $connection = Yii::$app->db;

        //开启事务
        $transaction = $connection->beginTransaction();

        try {
            Goods::findOne($id)->delete();

            GoodsColor::deleteAll(['gid' => $id]);

            GoodsInventory::deleteAll(['gid' => $id]);

            //提交
            $transaction->commit();

            return true;
        } catch (Exception $e) {
            $transaction->rollBack();
            return false;
        }
    }

    //删除图片
    public static function delImg($path)
    {
        if (is_dir($path)){
            $dh = opendir($path);
            while ($file = readdir($dh)) {
                if ($file != '.' && $file != '..') {
                    $filepath = $path.'/'.$file;
                    if (!is_dir($filepath)) {
                        unlink($filepath);
                    } else {
                        self::delImg($filepath);
                    }
                }
            }
            rmdir($path);
            closedir($dh);
        }
    }
}