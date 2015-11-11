<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%m_link}}".
 *
 * @property string $id
 * @property string $url
 * @property string $img
 * @property integer $create_time
 */
class Link extends ActiveRecord
{
    const TABLE_NAME = '{{%m_link}}';
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
            [['url', 'create_time'], 'required'],
            [['create_time'], 'integer'],
            [['url', 'img'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => '链接地址',
            'img' => '图片地址',
            'create_time' => '添加时间',
        ];
    }
}
