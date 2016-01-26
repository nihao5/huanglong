<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "m_collect".
 *
 * @property string $id
 * @property integer $gid
 * @property integer $uid
 */
class Collect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_collect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'uid'], 'required'],
            [['gid', 'uid'], 'integer']
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
            'uid' => 'Uid',
        ];
    }
}
