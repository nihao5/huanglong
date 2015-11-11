<?php
namespace backend\service;
use backend\models\Goods;

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
                   $good[$k] = "$v"; 
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

    /**
     * 修改数据库
     */
    public static function editGoods($id,$goods)
    {
        $model = Goods::findOne($id);
        if(!$model){
            return false;
        }
        $model->setAttributes(
            $goods
        );
        return $model->save();
    }

    public static function del($id)
    {
        return Goods::findOne($id)->delete();
    }
}