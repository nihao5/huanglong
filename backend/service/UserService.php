<?php
namespace backend\service;
use backend\models\User;

class UserService
{
    public static function show()
    {
        return User::find()->asArray()->all();
    }

    /**
     * 按id查询用户
     */
    public static function selId($id)
    {
        return User::findOne($id);
    }

    /**
     * 更新到数据库
     */
    public static function editUser($id,$user)
    {
        $model = User::findOne($id);
        if(!$model){
            return false;
        }
        $model->setAttributes($user);
        return $model->save();
    }

    /**
     * 删除用户
     */
    public static function delUser($id)
    {
        return User::findOne($id)->delete();
    }
}