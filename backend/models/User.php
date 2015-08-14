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
            [['name', 'password', 'phone'], 'required'],
            [['sex'], 'integer'],
            [['name', 'email'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 11],
            [['password'], 'string', 'max' => 32],
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
            'phone' => 'Phone',
            'name' => 'Name',
            'password' => 'Passward',
            'email' => 'Email',
            'sex' => 'Sex',
            'img' => '头像',
        ];
    }
}
