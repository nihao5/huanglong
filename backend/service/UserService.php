<?php
namespace backend\service;
use backend\models\User;

class UserService
{
    public static function show()
    {
        return User::find()->asArray()->all();
    }
}