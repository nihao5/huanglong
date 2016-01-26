<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "m_discuss".
 *
 * @property string $id
 * @property integer $uid
 * @property integer $gid
 * @property integer $level
 * @property integer $anony
 * @property string $content
 * @property integer $addtime
 * @property string $repay
 * @property integer $repay_time
 */
class Discuss extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_discuss';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'gid', 'level', 'anony', 'content', 'addtime'], 'required'],
            [['uid', 'gid', 'level', 'anony', 'addtime', 'repay_time'], 'integer'],
            [['content', 'repay'], 'string']
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
            'gid' => 'Gid',
            'level' => 'Level',
            'anony' => 'Anony',
            'content' => 'Content',
            'addtime' => 'Addtime',
            'repay' => 'Repay',
            'repay_time' => 'Repay Time',
        ];
    }
}
