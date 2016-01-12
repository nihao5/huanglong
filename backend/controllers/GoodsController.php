<?php
namespace backend\controllers;
use Yii;
use backend\controllers\BaseController;
use backend\service\GoodsService;
use backend\models\Goods;

class GoodsController extends BaseController
{
    //上传文件大小限制5M
    const MAX_FILE_SIZE = 5242880;

    public function actionIndex()
    {
        $goods = GoodsService::showGoods();
        return $this->render('index',['goods'=>$goods]);
    }

    // 添加商品
    public function actionAdd()
    {
        $path = $this->Classify();
        return $this->render('add',['path'=>$path]);
    }

    //查看商品详情
    public function actionDetails()
    {
        $id = Yii::$app->request->get('id');
        //查询出当前商品信息
        $goods = GoodsService::show($id);
        $style = GoodsService::showStyle($goods['sid']);
        $goods['sid'] = $style['name'];
        return $this->render('details',['goods'=>$goods]);
    }

    /**
    * 添加商品到数据库
    * 
    */
    public function actionInsert()
    {
        $rand = rand(1, 9);

        $imgType = ['image/jpeg', 'image/png', 'image/jpg', 'image/bmp', 'image/gif'];
        //判断是否有上传文件
        if (!is_uploaded_file($_FILES['img']['tmp_name'])) {
            Yii::$app->getSession()->setFlash('error', '请通过post方式上传文件');
            return $this->redirect(['goods/add']);
        }

        $file = $_FILES['img'];

        //判断上传文件大小
        if ($file['size'] >= self::MAX_FILE_SIZE) {
            Yii::$app->getSession()->setFlash('error', '上传文件太大');
            return $this->redirect(['goods/add']);
        }

        //判断上传文件类型
        if (!in_array($file['type'], $imgType)) {
            Yii::$app->getSession()->setFlash('error', '上传文件类型不符');
            return $this->redirect(['goods/add']);
        }

        //判断是否上传的是否是图片
        if (!getimagesize($file['tmp_name'])) {
            Yii::$app->getSession()->setFlash('error', '上传图片错误');
            return $this->redirect(['goods/add']);
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
            return $this->redirect(['goods/add']);
        }

        //上传地址
        $dir = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).'/static/uploaded/_o/f'.$rand;

        //如果目录不存在就创建
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
            chmod($dir, 0777);
        }

        //获取值
        $goods = Yii::$app->request->Post();

        $file['name'] = md5(substr($file['name'], 0, strrpos($file['name'], '.')).microtime().rand()).substr($file['name'], strrpos($file['name'], '.'));

        $goods['img'] = '/static/uploaded/_o/f'.$rand.'/'.$file['name'];

        if ($goods['sid'] == 0) {
            Yii::$app->getSession()->setFlash('error', '添加失败，请选择商品分类');
            return $this->redirect(['goods/add']);
        }

        //插入数据库
        $goods = GoodsService::insertGoods($goods);

        //如果失败，则返回
        if (!$goods) {
            Yii::$app->getSession()->setFlash('error', '添加失败');
            return $this->redirect(['goods/add']);
        }
        
        //移动文件到指定目录
        move_uploaded_file($file['tmp_name'], $dir.'/'.$file['name']);

        Yii::$app->getSession()->setFlash('success', '添加成功');

        return $this->redirect(['goods/index']);
    }


    /**
     * 修改商品页
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->get('id');

        //查询出当前商品信息
        $goods = GoodsService::show($id);

        $goods['img'] = 'http://'.$_SERVER['SERVER_NAME'].str_replace('backend', 'frontend', dirname($_SERVER['DOCUMENT_URI'])).$goods['img'];
 
        //查询分类名称
        $path = $this->Classify($goods['sid']);
        return $this->render('update', ['path'=>$path, 'goods'=>$goods]);
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
        $goods = GoodsService::show($id);

        $imgPath = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).$goods['img'];

        //删除数据库数据
        $del = GoodsService::del($id);

        //上传图片路径
        $imgWaresPath = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).Goods::UPLOAD_IMAGE_WARES.$id;
        $imgExtraPath = str_replace('backend', 'frontend', dirname($_SERVER['SCRIPT_FILENAME'])).Goods::UPLOAD_IMAGE_EXTRA.$id;

        if ($id) {
            //删除数据库存储图片
            if (is_file($imgPath)) {
                unlink($imgPath);
            }
            
            //删除商品图片
            GoodsService::delImg($imgWaresPath);
            //删除展示图片
            GoodsService::delImg($imgExtraPath);
            Yii::$app->getSession()->setFlash('success', '删除成功');
        } else {
           Yii::$app->getSession()->setFlash('error', '删除失败');
        }
        return $this->redirect(['goods/index']);
    }
}