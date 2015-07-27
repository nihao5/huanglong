<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "m_address".
 *
 * @property string $id
 * @property integer $uid
 * @property string $province
 * @property string $cite
 * @property string $county
 * @property string $address
 * @property integer $zipcode
 * @property integer $default
 * @property integer $modtime
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'province', 'cite', 'county', 'address', 'zipcode', 'modtime'], 'required'],
            [['uid', 'zipcode', 'default', 'modtime'], 'integer'],
            [['province', 'cite', 'county'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'province' => 'Province',
            'cite' => 'Cite',
            'county' => 'County',
            'address' => 'Address',
            'zipcode' => 'Zipcode',
            'default' => 'Default',
            'modtime' => 'Modtime',
        ];
    }
}
