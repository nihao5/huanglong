<?php
namespace backend\service;
use backend\models\Link;

class LinkService
{
    // 查询所有地址
    public function show($id='')
    {
        if ($id == null) {
            return Link::find()->all();
        }
        return Link::findOne($id);       
    }

    //插入数据库
    public static function insertLink($request,$id='')
    {
        $Link = Link::findOne($id);
        if (!$Link) {
            $Link = new Link();
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
        return Link::findOne($id)->delete();
    }
}