<?php
namespace backend\service;

use Yii;
use backend\models\GoodsColor;
use backend\models\GoodsInventory;

class InventoryService
{
    //根据商品id查看颜色分类
    public static function showColor($gid)
    {
        return GoodsColor::findAll(['gid' => $gid]);
    }

    //插入到goods_color数据库
    public static function insertColor($color)
    {
        $model = new GoodsColor();

        $model->setAttributes([
            'gid' => $color['gid'],
            'color' => $color['color'],
            'img' => $color['img'],
        ]);

        return $model->save();
    }

    //插入到goods_inventory数据库
    public static function insertInventory($inventory)
    {
        $model = new GoodsInventory();

        $data = [
            'colorid' => $inventory['colorid'], 
            'gid' => $inventory['gid'],
            'inventory' => $inventory['inventory']
        ];

        if (isset($inventory['size'])) {
            $data['size'] = $inventory['size'];
            $model->setAttributes($data);

            return $model->save();
        } else {
            $model->setAttributes($data);

            return $model->save();
        }
    }

    //根据颜色分类表id获取当前图片地址
    public function showImgPath($id)
    {
        return GoodsColor::findOne($id);
    }

    public function del($id)
    {
        $connection = Yii::$app->db;

        //开启事务
        $transaction = $connection->beginTransaction();

        try {
            GoodsInventory::deleteAll(['colorid' => $id]);

            GoodsColor::findOne($id)->delete();

            //提交
            $transaction->commit();

            return true;
        } catch (Exception $e) {
            $transaction->rollBack();
            return false;
        }
    }
}