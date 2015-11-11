<?php
use yii\helpers\Url;
use backend\models\Order;
use backend\models\User;
?>   
<!-- begin #content -->
        <div id="content" class="content">
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
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">id :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['id']?></label>
                                        <!-- <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" /> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="email">用户 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getUser()['name']?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="email">收货人 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getAddress()['consignee']?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="email">手机/电话 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getAddress()['phone']?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">地址 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname">
                                            <?= $list->getAddress()['province'].'省 '.$list->getAddress()['cite'].'市 '.
                                            $list->getAddress()['county'].'县/区 '.$list->getAddress()['address'];?>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">邮编 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getAddress()['zipcode'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">商品名称 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getGoods()['sname'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">商品品牌 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getGoods()['brand'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">订单号 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['sn']?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">单价 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getGoods()['price'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">购买数量 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['num'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">折扣 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list->getGoods()['sale'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">支付金额 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['money'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">快递费 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['express_money'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">订单留言 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['message'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">下单时间 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['addtime'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="message">最近处理时间 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label" for="fullname"><?= $list['edittime'];?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"></label>
                                    <div class="col-md-6 col-sm-6">
                                        <a href="<?= Url::toRoute(['order/index']);?>" class="btn btn-default m-r-5">返回</a>
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
    <!-- end page container -->