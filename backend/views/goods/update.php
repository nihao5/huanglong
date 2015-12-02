<?php
use yii\bootstrap\Alert;
use yii\helpers\Url;
?>
<!-- begin #content --> 
        <div id="content" class="content">
        <?php
            if( Yii::$app->getSession()->hasFlash('success') ) {
                echo Alert::widget([
                    'options' => [
                        'class' => 'alert-success', //这里是提示框的class
                    ],
                    'body' => Yii::$app->getSession()->getFlash('success'), //消息体
                ]);
            }
            if( Yii::$app->getSession()->hasFlash('error') ) {
                echo Alert::widget([
                    'options' => [
                        'class' => 'alert-error',
                    ],
                    'body' => Yii::$app->getSession()->getFlash('error'),
                ]);
            }
        ?>
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Form Stuff</a></li>
                <li class="active">Form Validation</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Form Validation <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Basic Form Validation</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form action="<?= Url::toRoute(['goods/edit','id'=>$goods['id']])?>" method="post" class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">商品分类 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="sid" data-parsley-required="true">
                                            <?= $path;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="email">商品货号 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['number'];?>" type="text" name="number" placeholder="number" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">商品名 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['sname'];?>" type="text" name="sname" placeholder="sname" data-parsley-required="true"/>
                                        <input type="hidden" id="_csrf" name="_csrf" value="<?php echo yii::$app->request->csrfToken;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">品牌 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['brand'];?>" type="text" name="brand" placeholder="brand" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">搜索关键字 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['key'];?>" type="text" name="key" placeholder="key" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">商品描述 (20 chars min, 200 max) *:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea class="form-control" name="details" rows="4" data-parsley-range="[20,200]" placeholder="Range from 20 - 200" data-parsley-required="true"><?= $goods['details'];?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">价格 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['price'];?>" type="text" name="price" placeholder="price" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">促销价 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['sale'];?>" type="text" name="sale" placeholder="sale" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">促销日期 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['sale_date'];?>" type="text" name="sale_date" placeholder="sale_date" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">库存 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $goods['inventory'];?>" type="text" name="inventory" placeholder="inventory" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">热销 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="is_hot" data-parsley-required="true">
                                            <option value="1" <?php if($goods['is_hot'] == 1){echo 'selected';}?>>是</option>
                                            <option value="0" <?php if($goods['is_hot'] == 0){echo 'selected';}?>>否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">新品 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="is_new" data-parsley-required="true">
                                            <option value="1" <?php if($goods['is_new'] == 1){echo 'selected';}?>>是</option>
                                            <option value="0" <?php if($goods['is_new'] == 0){echo 'selected';}?>>否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">推荐 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="is_suggest" data-parsley-required="true">
                                            <option value="1" <?php if($goods['is_suggest'] == 1){echo 'selected';}?>>是</option>
                                            <option value="0" <?php if($goods['is_suggest'] == 0){echo 'selected';}?>>否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">是否审核 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="is_check" data-parsley-required="true">
                                            <option value="1" <?php if($goods['is_check'] == 1){echo 'selected';}?>>是</option>
                                            <option value="0" <?php if($goods['is_check'] == 0){echo 'selected';}?>>否</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"></label>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="btn btn-primary">确认</button>
                                        <button type="reset" class="btn btn-default">取消</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
               
        <!-- end #content -->
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="table_manage.html#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container