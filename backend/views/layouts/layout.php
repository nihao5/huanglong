<?php
// use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
// use yii\bootstrap\Alert;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

// AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Inbox (10)</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
    <link href="/wnmp/yii2test/backend/web/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/css/animate.min.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/css/style.min.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/css/theme/default.css" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    <link href="/wnmp/yii2test/backend/web/assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="/wnmp/yii2test/backend/web/assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet" />
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/wnmp/yii2test/backend/web/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/plugins/pace/pace.min.js"></script>
    <style>
        .alert.alert-error {
            background: #F1C1C0 none repeat scroll 0 0;
        }
        .alert-error{
            color:#AF5250;
        }
    </style>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin mobile sidebar expand / collapse button -->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end mobile sidebar expand / collapse button -->
                
                <!-- begin header navigation right -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form full-width">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter keyword" />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                            <i class="fa fa-bell-o"></i>
                            <span class="label">5</span>
                        </a>
                        <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="../assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="../assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../assets/img/user-13.jpg" alt="" /> 
                            <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="javascript:;">Edit Profile</a></li>
                            <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li><a href="javascript:;">Calendar</a></li>
                            <li><a href="javascript:;">Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:;">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end header navigation right -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <div class="image">
                            <a href="javascript:;"><img src="../assets/img/user-13.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            Sean Ngu
                            <small>Front end developer</small>
                        </div>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <!-- <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-laptop"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Dashboard v1</a></li>
                            <li><a href="index_v2.html">Dashboard v2</a></li>
                        </ul>
                    </li> -->
                    <li class="has-sub active">
                        <a href="javascript:;">
                            <span class="badge pull-right">10</span>
                            <i class="fa fa-inbox"></i> 
                            <span>网站管理</span>
                        </a>
                        <!-- <ul class="sub-menu">
                            <li class="active"><a href="index.html">Inbox v1</a></li>
                        </ul> -->
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'goods'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-suitcase"></i>
                            <span>商品管理 <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'goods/index'): ?>class="active"<?php endif; ?> ><a href="<?php echo Url::toRoute('goods/index') ?>">商品列表</a></li>
                        </ul>
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'style'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-code-fork"></i>
                            <span>商品分类 <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'style/index'): ?>class="active"<?php endif; ?>><a href="<?php echo Url::toRoute('style/index') ?>">分类列表</a></li>
                        </ul>
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'user'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-users"></i>
                            <span>用户管理 <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'user/index'): ?>class="active"<?php endif; ?>><a href="<?php echo Url::toRoute('user/index') ?>">用户列表</a></li>
                        </ul>
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'order'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-file-o"></i>
                            <span>订单管理 <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'order/index'): ?>class="active"<?php endif; ?>><a href="<?php echo Url::toRoute('order/index') ?>">订单列表</a></li>
                        </ul>
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'address'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-truck"></i>
                            <span>收货地址管理 <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'address/index'): ?>class="active"<?php endif; ?>><a href="<?php echo Url::toRoute('address/index') ?>">收货地址列表</a></li>
                        </ul>
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'admin'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-user"></i>
                            <span>管理员 <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'admin/index'): ?>class="active"<?php endif; ?>><a href="<?php echo Url::toRoute('admin/index') ?>">管理员列表</a></li>
                        </ul>
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'link'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-link"></i>
                            <span>友情链接 <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'link/index'): ?>class="active"<?php endif; ?>><a href="<?php echo Url::toRoute('link/index') ?>">友链列表</a></li>
                        </ul>
                    </li>
                    <li class="has-sub <?php if (Yii::$app->requestedAction->controller->id == 'banner'): ?>active <?php endif; ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-picture-o"></i>
                            <span>banner <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li <?php if (Yii::$app->request->pathInfo == 'banner/index'): ?>class="active"<?php endif; ?>><a href="<?php echo Url::toRoute('banner/index') ?>">首页banner</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-suitcase"></i>
                            <span>UI Elements <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li><a href="ui_general.html">General</a></li>
                            <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                            <li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
                            <li><a href="ui_modal_notification.html">Modal & Notification</a></li>
                            <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
                            <li><a href="ui_buttons.html">Buttons</a></li>
                            <li><a href="ui_icons.html">Icons</a></li>
                            <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="ui_ionicons.html">Ionicons</a></li>
                            <li><a href="ui_tree.html">Tree View <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-file-o"></i>
                            <span>Form Stuff <span class="label label-theme m-l-5">NEW</span></span> 
                        </a>
                        <ul class="sub-menu">
                            <li><a href="form_elements.html">Form Elements</a></li>
                            <li><a href="form_plugins.html">Form Plugins <i class="fa fa-paper-plane text-theme"></i></a></li>
                            <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
                            <li><a href="form_validation.html">Form Validation</a></li>
                            <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
                            <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
                            <li><a href="form_editable.html">X-Editable</a></li>
                            <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-th"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                                <ul class="sub-menu">
                                    <li><a href="table_manage.html">Default</a></li>
                                    <li><a href="table_manage_autofill.html">Autofill</a></li>
                                    <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                                    <li><a href="table_manage_colvis.html">ColVis</a></li>
                                    <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                                    <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                                    <li><a href="table_manage_keytable.html">KeyTable</a></li>
                                    <li><a href="table_manage_responsive.html">Responsive</a></li>
                                    <li><a href="table_manage_scroller.html">Scroller</a></li>
                                    <li><a href="table_manage_tabletools.html">TableTools</a></li>
                                    <li><a href="table_manage_combine.html">Extension Combination</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-star"></i> 
                            <span>Front End</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="http://seantheme.com/color-admin-v1.7/frontend/one-page-parallax/index.html" target="_blank">One Page Parallax</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-camera"></i>
                            <span>Gallery</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="gallery.html">Gallery v1</a></li>
                            <li><a href="gallery_v2.html">Gallery v2</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-cogs"></i>
                            <span>Page Options <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="page_with_light_sidebar.html">Page with Light Sidebar <i class="fa fa-paper-plane text-theme"></i></a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-gift"></i>
                            <span>Extra <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="extra_timeline.html">Timeline</a></li>
                            <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                            <li><a href="extra_search_results.html">Search Results</a></li>
                            <li><a href="extra_404_error.html">404 Error Page</a></li>
                            <li><a href="extra_profile.html">Profile Page <i class="fa fa-paper-plane text-theme"></i></a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-key"></i>
                            <span>Login & Register <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_v2.html">Login v2</a></li>
                            <li><a href="login_v3.html">Login v3 <i class="fa fa-paper-plane text-theme"></i></a></li>
                            <li><a href="register_v3.html">Register v3 <i class="fa fa-paper-plane text-theme"></i></a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-cubes"></i>
                            <span>Version</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">HTML</a></li>
                            <li><a href="http://seantheme.com/color-admin-v1.7/admin/ajax/index.html">AJAX</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-medkit"></i>
                            <span>Helper</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-align-left"></i> 
                            <span>Menu Level</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret pull-right"></b>
                                    Menu 1.1
                                </a>
                                <ul class="sub-menu">
                                    <li class="has-sub">
                                        <a href="javascript:;">
                                            <b class="caret pull-right"></b>
                                            Menu 2.1
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:;">Menu 3.1</a></li>
                                            <li><a href="javascript:;">Menu 3.2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Menu 2.2</a></li>
                                    <li><a href="javascript:;">Menu 2.3</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 1.2</a></li>
                            <li><a href="javascript:;">Menu 1.3</a></li>
                        </ul>
                    </li>
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

    <?php $this->beginBody() ?>
        <?= $content ?>
    <?php $this->endBody() ?>
<!-- ================== BEGIN BASE JS ================== -->
    
    <script src="/wnmp/yii2test/backend/web/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/wnmp/yii2test/backend/web/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
     <!-- // <script src="/wnmp/yii2test/backend/web/assets/plugins/DataTables/js/jquery.dataTables.js"></script> -->
     <!-- // <script src="/wnmp/yii2test/backend/web/assets/plugins/DataTables/js/dataTables.colVis.js"></script> -->
     <!-- // <script src="/wnmp/yii2test/backend/web/assets/js/table-manage-colvis.demo.min.js"></script> -->
    <script src="/wnmp/yii2test/backend/web/assets/js/inbox.demo.min.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/js/table-manage-default.demo.min.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/plugins/DataTables/js/dataTables.colVis.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/js/table-manage-colvis.demo.min.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/plugins/parsley/dist/parsley.js"></script>
    <script src="/wnmp/yii2test/backend/web/assets/js/apps.min.js"></script>
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
     <!-- <script src="/wnmp/yii2test/backend/web/assets/js/inbox.demo.min.js"></script>
    // <script src="/wnmp/yii2test/backend/web/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
    // <script src="/wnmp/yii2test/backend/web/assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    // <script src="/wnmp/yii2test/backend/web/assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    // <script src="/wnmp/yii2test/backend/web/assets/js/email-compose.demo.min.js"></script>
    // <script src="/wnmp/yii2test/backend/web/assets/js/apps.min.js"></script> -->
    <!-- ================== END PAGE LEVEL JS ================== -->

    
    
    <script>
        $(document).ready(function() {
            App.init();
            TableManageColVis.init();
        });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>
<?php $this->endPage() ?>
