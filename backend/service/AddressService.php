<?php
namespace backend\service;
use backend\models\Address;

class AddressService
{
    // 查询所有地址
    public function show()
    {
        return Address::find()->asArray()->all();
    }
}