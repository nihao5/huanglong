<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%m_admin}}".
 *
 * @property string $id
 * @property string $name
 * @property string $passward
 * @property string $email
 * @property integer $check
 * @property integer $count
 * @property integer $addtime
 * @property integer $lastlogin
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%m_admin}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'passward', 'email', 'check', 'count', 'addtime', 'lastlogin'], 'required'],
            [['check', 'count', 'addtime', 'lastlogin'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['passward'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 50]
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
            'check' => 'Check',
            'count' => 'Count',
            'addtime' => 'Addtime',
            'lastlogin' => 'Lastlogin',
        ];
    }
}
