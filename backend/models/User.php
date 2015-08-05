<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%m_user}}".
 *
 * @property string $id
 * @property string $name
 * @property string $passward
 * @property string $email
 * @property integer $sex
 * @property string $img
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%m_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'passward', 'email', 'img'], 'required'],
            [['sex'], 'integer'],
            [['name', 'email'], 'string', 'max' => 30],
            [['passward'], 'string', 'max' => 32],
            [['img'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'passward' => 'Passward',
            'email' => 'Email',
            'sex' => 'Sex',
            'img' => '头像',
        ];
    }
}
