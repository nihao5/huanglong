<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "{{%m_goodsimg}}".
 *
 * @property string $id
 * @property integer $gid
 * @property string $image
 * @property string $xqimage
 */
class GoodsImg extends ActiveRecord
{
    const TABLE_NAME = '{{%m_goodsimg}}';
    const UPLOAD_IMAGE_WARES = '/static/uploaded/wares/i';
    const UPLOAD_IMAGE_EXTRA = '/static/uploaded/imgextra/i';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return self::TABLE_NAME;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'image'], 'required'],
            [['gid'], 'integer'],
            [['image'], 'string', 'max' => 200]
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
        ];
    }
}
