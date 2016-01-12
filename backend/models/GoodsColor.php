<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "m_goods_color".
 *
 * @property string $id
 * @property integer $gid
 * @property string $color
 * @property string $image
 */
class GoodsColor extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_goods_color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'color', 'img'], 'required'],
            [['gid'], 'integer'],
            [['color'], 'string', 'max' => 30],
            [['img'], 'string', 'max' => 200]
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
            'color' => 'Color',
            'img' => 'Img',
        ];
    }
}
