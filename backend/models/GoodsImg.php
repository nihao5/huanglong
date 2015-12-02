<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%m_goodsimg}}".
 *
 * @property string $id
 * @property integer $gid
 * @property string $image
 * @property string $xqimage
 */
class GoodsImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%m_goodsimg}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'image', 'xqimage'], 'required'],
            [['gid'], 'integer'],
            [['image', 'xqimage'], 'string', 'max' => 200]
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
            'image' => '商品图片地址',
            'xqimage' => '详情图片地址',
        ];
    }
}
