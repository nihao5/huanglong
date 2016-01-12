<?php
namespace frontend\service;
use backend\models\Goods;
use backend\models\Banner;

class BaseService
{
    /**
     * 获取商品对象
     * @return $object array
     */
    public static function getGoods()
    {
        return Goods::findAll(['is_show' => 0]);
    }

    /**
     * 获取banner对象
     * @return $object array
     */
    public static function getBanner()
    {
        return Banner::find()->all();
    }
}