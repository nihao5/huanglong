<?php
use yii\helpers\Url;
use yii\bootstrap\Alert;
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
                            <form action="<?= Url::toRoute(['goods-inventory/save-inven']);?>" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" data-parsley-validate="true" name="demo-form">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">库存 * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" name="inventory" data-parsley-type="number" data-parsley-required="true"/>
                                        <input type="hidden" id="_csrf" name="_csrf" value="<?php echo yii::$app->request->csrfToken;?>">
                                        <input type="hidden" name="id" value="<?php echo $id;?>">
                                        <input type="hidden" name="gid" value="<?php echo $gid;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">衣服尺寸属性 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input type="radio" value="165/S" name="size">165/S<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="170/M" name="size">170/M<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="175/L" name="size">175/L<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="180/XL" name="size">180/XL<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="185/XXL" name="size">185/XXL<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="190/XXXL" name="size">190/XXXL<br>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">鞋子尺寸属性 :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="35" name="size">35<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="36" name="size">36<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="37" name="size">37<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="38" name="size">38<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="39" name="size">39<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="40" name="size">40<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="41" name="size">41<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="42" name="size">42<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="43" name="size">43<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="44" name="size">44<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="45" name="size">45<br>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>&nbsp&nbsp
                                                <input id="mincheck" type="radio" value="46" name="size">46<br>
                                            </label>
                                        </div>
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
    <!-- end page container-->
