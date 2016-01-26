<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%m_goods}}".
 *
 * @property string $id
 * @property integer $sid
 * @property integer $shopid
 * @property integer $number
 * @property string $sname
 * @property string $brand
 * @property string $key
 * @property string $details
 * @property integer $price
 * @property integer $sale
 * @property integer $sale_date
 * @property integer $inventory
 * @property integer $sale_num
 * @property integer $click_num
 * @property integer $favorite_num
 * @property integer $evaluate_num
 * @property integer $is_hot
 * @property integer $is_nuw
 * @property integer $is_suggest
 * @property integer $is_check
 * @property integer $recycle
 * @property integer $addtime
 */
class Goods extends \yii\db\ActiveRecord
{
    const TABLE_NAME = '{{%m_goods}}';

    //展示图片地址
    const UPLOAD_IMAGE_WARES = '/static/uploaded/wares/i';

    //商品放大图片地址
    const UPLOAD_IMAGE_EXTRA = '/static/uploaded/imgextra/i';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return self::TABLE_NAME;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'number', 'sname', 'img', 'brand', 'key', 'details', 'price', 'sale', 'addtime'], 'required'],
            [['sid', 'shopid', 'sale_date', 'sale_num', 'click_num', 'favorite_num', 'evaluate_num', 'is_show', 'is_hot', 'is_new', 'is_suggest', 'is_check', 'recycle', 'addtime'], 'integer'],
            [['sname', 'number', 'price', 'sale', 'brand', 'key'], 'string', 'max' => 30],
            [['img', 'details'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sid' => '分类id',
            'shopid' => '店铺id',
            'number' => '商品货号',
            'sname' => '商品名',
            'img' => '商品展示图',
            'brand' => '商品品牌',
            'key' => '商品关键字',
            'details' => '商品描述',
            'price' => '商品价格',
            'sale' => '商品折扣价格',
            'sale_date' => '促销日期',
            'sale_num' => '销量',
            'click_num' => '点击量',
            'favorite_num' => '收藏量',
            'evaluate_num' => '评论量',
            'is_show' => '是否显示在首页',
            'is_hot' => '热销',
            'is_new' => '新品',
            'is_suggest' => '推荐',
            'is_check' => '是否审核',
            'recycle' => '商品是否回收',
            'addtime' => '上架时间',
        ];
    }

    public function getStyle()
    {
        return $this->hasMany(Style::className(), ['id' => 'sid']);
    }
}
