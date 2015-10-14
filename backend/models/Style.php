<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%m_style}}".
 *
 * @property string $id
 * @property string $pid
 * @property string $name
 * @property string $path
 * @property string $modtime
 */
class Style extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%m_style}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'name', 'path', 'modtime'], 'required'],
            [['pid'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['path'], 'string', 'max' => 50],
            [['modtime'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '商品分类',
            'pid' => '父id',
            'name' => '分类名称',
            'path' => '路径',
            'modtime' => '添加时间',
        ];
    }
}
