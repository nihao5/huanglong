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
        $goods = new Goods();
        $goods->setAttributes([
            ''
        ]);
    }
}