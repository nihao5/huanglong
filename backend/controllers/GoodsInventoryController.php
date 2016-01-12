<?php
namespace backend\controllers;

use Yii;
use backend\controllers\BaseController;
use backend\service\InventoryService;

class GoodsInventoryController extends BaseController
{
    //上传文件大小限制5M
    const MAX_FILE_SIZE = 5242880;

    public function actionIndex()
    {
        //商品id
        $gid = (int)Yii::$app->request->get('id');

        //查询商品颜色分类
        $color = InventoryService::showColor($gid);

        if (empty($color)) {
            return $this->redirect(['goods-inventory/add', 'id'=>$gid]);
        }

        foreach ($color as $k=>$v) {
            $color[$k]['img'] = 'http://'.$_SERVER['SERVER_NAME'].str_replace('backend', 'frontend', dirname($_SERVER['DOCUMENT_URI'])).$v['img'];
        }

        return $this->render('index',['color'=>$color, 'id' => $gid]);
    }

    // 添加商品
    public function actionAdd()
    {
        //商品id
        $id = (int)Yii::$app->request->get('id');

        return $this->render('add',['id'=>$id]);
    }

    /**
    * 添加商品到数据库
    * 
    */
    public function actionInsert()
    {
        //获取值
        $color = Yii::$app->request->Post();

        $rand = rand(1, 9);

        $imgType = ['image/jpeg', 'image/png', 'image/jpg', 'image/bmp', 'image/gif'];
        //判断是否有上传文件
        if (!is_uploaded_file($_FILES['img']['tmp_name'])) {
            Yii::$app->getSession()->setFlash('error', '请通过post方式上传文件');
            return $this->redirect(['goods/index']);
        }

        $file = $_FILES['img'];

        //判断上传文件大小
        if ($file['size'] >= self::MAX_FILE_SIZE) {
            Yii::$app->getSession()->setFlash('error', '上传文件太大');
            return $this->redirect(['goods/index']);
        }

        //判断上传文件类型
        if (!in_array($file['type'], $imgType)) {
            Yii::$app->getSession()->setFlash('error', '上传文件类型不符');
            return $this->redirect(['goods/index']);
        }

        //判断是否上传的是否是图片
        if (!getimagesize($file['tmp_name'])) {
            Yii::$app->getSession()->setFlash('error', '上传图片错误');
            return $this->redirect(['goods/index']);
        }

        //获取上传时错误
        if ($file['error'] !== 0) {
            switch ($file['error']) {
                case 1:
                    Yii::$app->getSession()->setFlash('error', '上传文件超过配置选项限制的值');
                    break;
                case 2:
                    Yii::$app->getSession()->setFlash('error', '上传文件大小超过指定值');
                    break;
                case 3:
                    Yii::$app->getSession()->setFlash('error', '文件只有部分被上传');
                    break;
                case 4:
                    Yii::$app->getSession()->setFlash('error', '没有文件被上传');
                    break;
                case 6:
                    Yii::$app->getSession()->setFlash('error', '找不到临时文件夹');
                    break;
                default:
                    Yii::$app->getSession()->setFlash('error', '文件写入失败');
                    break;
            }
            return $this->redirect(['goods/index']);
        }

        //上传地址
        $dir = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).'/static/uploaded/_o/f'.$rand;

        //如果目录不存在就创建
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
            chmod($dir, 0777);
        }

        $file['name'] = md5(substr($file['name'], 0, strrpos($file['name'], '.')).microtime().rand()).substr($file['name'], strrpos($file['name'], '.'));

        $color['img'] = '/static/uploaded/_o/f'.$rand.'/'.$file['name'];

        //插入数据库
        $color = InventoryService::insertColor($color);

        //如果失败，则返回
        if (!$color) {
            Yii::$app->getSession()->setFlash('error', '添加失败');
            return $this->redirect(['goods/index']);
        }
        
        //移动文件到指定目录
        move_uploaded_file($file['tmp_name'], $dir.'/'.$file['name']);

        Yii::$app->getSession()->setFlash('success', '添加成功');

        return $this->redirect(['goods/index']);
    }

    /**
     * 修改商品页
     */
    public function actionInventory()
    {
        $id = Yii::$app->request->get('id');
        $gid = Yii::$app->request->get('gid');

        return $this->render('inventory', ['id'=>$id, 'gid'=>$gid]);
    }

    /**
     * 添加商品属性和库存到数据库
     */
    public function actionSaveInven()
    {
        $inventory = Yii::$app->request->Post();

        $inventory['colorid'] = $inventory['id'];

        //添加到数据库
        $inven = InventoryService::insertInventory($inventory);

        if (!$inven) {
            Yii::$app->getSession()->setFlash('error', '添加失败');
        } else {
            Yii::$app->getSession()->setFlash('success', '添加成功');
        }

        return $this->redirect(['goods-inventory/index', 'id'=>$inventory['gid']]);
    }

    /**
     * 修改数据库
     */
    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');

        $goods = Yii::$app->request->post();

        $imgType = ['image/jpeg', 'image/png', 'image/jpg', 'image/bmp', 'image/gif'];

        $showGoods = GoodsService::show($id);
        
        if (null === $showGoods) {
            Yii::$app->getSession()->setFlash('error', '传入的ID有误，请重新请求');
            return $this->redirect(['goods/index']);
        }

        //判断是否有上传文件，如果有，把新图片和数据更新到数据库，否则只更新数据
        if (is_uploaded_file($_FILES['img']['tmp_name'])) {
            $file = $_FILES['img'];

            //判断上传文件大小
            if ($file['size'] >= self::MAX_FILE_SIZE) {
                Yii::$app->getSession()->setFlash('error', '上传文件太大');
                return $this->redirect(['goods/update', 'id'=>$id]);
            }

            //判断上传文件类型
            if (!in_array($file['type'], $imgType)) {
                Yii::$app->getSession()->setFlash('error', '上传文件类型不符');
                return $this->redirect(['goods/update', 'id'=>$id]);
            }

            //获取上传时错误
            if ($file['error'] !== 0) {
                switch ($file['error']) {
                    case 1:
                        Yii::$app->getSession()->setFlash('error', '上传文件超过配置选项限制的值');
                        break;
                    case 2:
                        Yii::$app->getSession()->setFlash('error', '上传文件大小超过指定值');
                        break;
                    case 3:
                        Yii::$app->getSession()->setFlash('error', '文件只有部分被上传');
                        break;
                    case 4:
                        Yii::$app->getSession()->setFlash('error', '没有文件被上传');
                        break;
                    case 6:
                        Yii::$app->getSession()->setFlash('error', '找不到临时文件夹');
                        break;
                    default:
                        Yii::$app->getSession()->setFlash('error', '文件写入失败');
                        break;
                }
                return $this->redirect(['goods/update', 'id'=>$id]);
            }

            //原来的图片地址
            $imgPath = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).$showGoods['img'];

            //图片入库地址
            $goods['img'] = dirname($showGoods['img']).'/'.$file['name'];

            //新图片地址
            $dir = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).$goods['img'];
        }

        //更新到数据库
        $data = GoodsService::editGoods($showGoods, $goods);

        if (!$data) {
            Yii::$app->getSession()->setFlash('error', '更新失败');
            return $this->redirect(['goods/update', 'id'=>$id]);
        }
        
        //如果是有上传新文件
        if (isset($dir)) {
            if (is_file($imgPath)) {
                unlink($imgPath);
            }
            
            //移动文件到指定目录
            move_uploaded_file($file['tmp_name'], $dir);
        }

        Yii::$app->getSession()->setFlash('success', '更新成功');
        return $this->redirect(['goods/index']);
    }

    /**
     * 删除商品信息，同时删除上传的图片
     */
    public function actionDel()
    {
        $id = (int)Yii::$app->request->get('id');

        //获取图片地址
        $colorImg = InventoryService::showImgPath($id);

        $imgPath = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).$colorImg['img'];

        //删除goods_color,goods_inventory数据库数据
        $del = InventoryService::del($id);

        if ($del) {
            //删除数据库存储图片
            if (is_file($imgPath)) {
                unlink($imgPath);
            }
            
            Yii::$app->getSession()->setFlash('success', '删除成功');
        } else {
           Yii::$app->getSession()->setFlash('error', '删除失败');
        }
        return $this->redirect(['goods/index']);
    }
}