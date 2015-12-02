<?php
namespace backend\service;
use backend\models\Banner;

class BannerService
{
    // 查询所有地址
    public function show($id='')
    {
        if ($id == null) {
            return Banner::find()->all();
        }
        return Banner::findOne($id);       
    }

    //插入数据库
    public static function insertLink($request,$id='')
    {
        $Link = Banner::findOne($id);
        if (!$Link) {
            $Link = new Banner();
        }
        $Link->setAttributes([
            'url' => $request['url'],
            'img' => $request['img'],
            'create_time' => time()
        ]);
        return $Link->save();
    }

    //删除
    public static function delLink($id)
    {
        return Banner::findOne($id)->delete();
    }
}