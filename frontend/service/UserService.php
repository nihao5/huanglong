<?php
namespace frontend\service;
use backend\models\User;

class UserService
{
    // 查询用户注册时的手机是否存在
    public static function selectPhone($phone)
    {
        return User::find()->where("phone=".$phone)->one();
    }
    // 查询用户注册时的手机是否存在
    public static function selectName($username)
    {
        return User::find()->where("name='".$username."'")->one();
    }
    // 用户注册的数据，插入到数据库
    public static function insertUser($phone,$username,$password)
    {
        $model = new User;
        $model->phone = $phone;
        $model->name = $username;
        $model->password = $password;
        return $model->insert();
    }

    // 用户登录时，验证
    public static function checkUser($username,$password)
    {
        return User::find()->andWhere(['and','password='.$password,['or','phone='.$username,'name='.$username]])->one();//->createCommand()->getRawSql();
    }
}