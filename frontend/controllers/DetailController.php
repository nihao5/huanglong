<?php
namespace frontend\controllers;

use Yii;
use backend\models\Goods;
use frontend\models\Discuss;
use frontend\models\Collect;
use backend\models\GoodsColor;
use backend\models\GoodsInventory;

class DetailController extends BaseController
{
	public function actionIndex()
	{
        $request = Yii::$app->getRequest();
        $id = current($request->get());
        
        //查询商品数据
        $goods = Goods::findOne($id);

        //查询收藏数量
        $collectNum = Collect::find()->where(['gid' => $id])->count('id');

        //颜色
        $goodsColor = GoodsColor::findAll(['gid' => $id]);

        $waresDir = 'static/uploaded/wares/i'.$id;

        //读取放大镜图片        
        $files = scandir($waresDir);

        foreach ($files as $file) {
            if ($file == '.' || $file == '..' || $file == 'thumbnail') {
                continue;
            }
            $waresFilePath[] = $waresDir.'/'.$file;
        }

        $imgextraDir = 'static/uploaded/imgextra/i'.$id;

        //读取介绍图片        
        $files = scandir($imgextraDir);

        foreach ($files as $file) {
            if ($file == '.' || $file == '..' || $file == 'thumbnail') {
                continue;
            }
            $imgextraFilePath[] = $imgextraDir.'/'.$file;
        }

        //查询商品评论
        $discuss = Discuss::findAll(['gid' => $id]);

        // 查询出商品库存总数和尺码
        $inventory = GoodsInventory::findAll(['gid' => $id]);

        $num = 0;
        foreach ($inventory as $key => $value) {
            $num += $value['inventory'];

            $size[$value['size']] = $value['size'];
        }

        $data = [
            'goods' => $goods,
            'size' => $size,
            'inventory' => $num,
            'discuss' => $discuss,
            'color' => $goodsColor,
            'collectNum' => $collectNum,
            'waresFile' => $waresFilePath,
            'imgextraFile' => $imgextraFilePath,
        ];

        // print_r($goods);exit;
		return $this->render('index', $data);
	}

    /**
     * 根据颜色和尺寸获取不同库存
     */
    public function actionInventory()
    {
        $inventoryNum = 0;
        $request = Yii::$app->getRequest();
        $goodsId = $request->post('id');
        $size = $request->post('size');
        $colorId = $request->post('dataId');
        
        if ($request->getIsPost() && $request->getIsAjax()) {
            if ($goodsId) {
                //组装查询条件
                $conditionsInventory = ['gid' => $goodsId];

                //如果颜色id是否为空,或尺寸为空，组装查询条件
                if (!$colorId) {
                    $conditionsInventory['size'] = $size;
                } else if (!$size) {
                    $conditionsInventory['colorid'] = $colorId;
                } else {
                    $conditionsInventory['size'] = $size;
                    $conditionsInventory['colorid'] = $colorId;
                }

                //查询库存
                $inventorys = GoodsInventory::findAll($conditionsInventory);

                if (empty($inventorys)) {
                    $this->ajaxReturn(false, [], '库存不足，请刷新重试');
                }

                foreach ($inventorys as $key => $inventory) {
                    $inventoryNum += $inventory['inventory'];
                }

                $this->ajaxReturn(true, $inventoryNum, '成功');
            }
            $this->ajaxReturn(false, [], '请刷新重试');
        }
        $this->ajaxReturn(false, [], '非法请求，请刷新重试');
    }
}