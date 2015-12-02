<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%m_banner}}".
 *
 * @property string $id
 * @property string $url
 * @property string $img
 * @property integer $create_time
 * @property integer $update_time
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%m_banner}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
            [['create_time', 'update_time'], 'integer'],
            [['url', 'img'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '轮播图id',
            'url' => '跳转地址',
            'img' => '图片地址',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
        ];
    }
}
