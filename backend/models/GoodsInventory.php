<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "m_goods_inventory".
 *
 * @property string $id
 * @property string $gid
 * @property integer $colorid
 * @property string $size
 * @property integer $inventory
 */
class GoodsInventory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_goods_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'colorid'], 'required'],
            [['gid', 'colorid', 'inventory'], 'integer'],
            [['size'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gid' => 'Gid',
            'colorid' => 'Colorid',
            'size' => 'Size',
            'inventory' => 'Inventory',
        ];
    }
}
