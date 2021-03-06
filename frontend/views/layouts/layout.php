<?php
use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
// use frontend\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8">
<meta charset="utf-8">
    <title>美丽说，开启全新时尚发现之旅</title>
    <meta name="description" content="来美丽说开启属于你的发现之旅，感受全新的购买体验吧！这里有百万粉丝的时尚大咖、热爱发现美物的生活家、一边旅行一边挖掘好货的旅行达人...而他们都将成为你的专属挑款师！还等什么？加入我们，发现流行，占有世界！">
    <meta name="keywords" content="美丽说,淘宝网,衣服,鞋子,包包,配饰,家居,美容,搭配,达人,团购,淘宝店">
    <script src="/js/jquery.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="/css/base.css"> -->
    <link rel="apple-touch-icon-precomposed" href="/img/custom_icon_precomposed.png">
    <?php $this->head() ?>
    <!-- <link rel="stylesheet" type="text/css" href="/css/welcome_new.css"> -->
        <style type="text/css">
        #promo_nav{
            overflow:hidden;
            margin-bottom:5px;
            background-color:#fff;
            background-image:url(/img/0a728ca3fb07e8f00a5243640358_2000_57.ch.png);
            background-repeat: no-repeat;
            background-position:center top;background-size:auto 100%;}
        #promo_nav .itemswrap{width:1200px;margin-left:auto;margin-right:auto;}
        #promo_nav li{font-size:14px;padding-left:10px;padding-right:10px;line-height:57px;height:57px;}
        #promo_nav .nav-items-main:hover,#promo_nav .nav-items-branch:hover{background-color:rgba(255,255,255,0.22);}
        #promo_nav .nav-items-main{font-size:18px;padding-right:8px;}
        #promo_nav .main-a{padding-left:77px;background:url(/img/e307fffa4b592245a859022448d3_75_47.cg.png) left center no-repeat;}
        #promo_nav a{display:block;}
        #promo_nav span{padding-right:10px;background:url(/img/58ed12205d780b8261e1f952e8eb_5_9.cf.png) right center no-repeat;background-size:auto 64%;color:#ffffff;}
        #promo_nav .nav-items-main,#promo_nav .nav-items-branch{float:left;}#promo_nav .nav-items-itemright{float:right;padding-right:0;}
        #promo_nav .nav-items:after{content:".";clear:both;display:block;height:0;visibility:hidden;}
        #promo_nav .nav-items-itemright a{padding-top:6px;height:45px;}
        #promo_nav .nav-items-itemright img{height:100%;}
        </style>

        </head>
        <body>
            <div class="uinfo_bar">
                <div class="header_top">
                    <ul class="menu_leo">
                          <li><a class="first" href="#"><em style="background:url(&quot;/img/i_wx_single.png&quot;) no-repeat; padding:1px 8px;">&nbsp;</em>微信登录</a></li>
                        <li><a href="#"><em class="i_QQ">&nbsp;</em> QQ登录</a></li>
                        <li><a href="../user/login">登录</a></li>
                        <li><a href="../user/register">注册</a></li>
                        <li><a href="../cart/index" target="_blank" class="mycart"><em class="i_cart">&nbsp;</em>我的购物车<span class="num_bgc num_bgc_none">0</span></a></li>
                        <li><a href="../order/index" target="_blank"><em class="i_order">&nbsp;</em>我的订单</a></li>
                        <li><a href="#" target="_blank"><em class="i_mob">&nbsp;</em>下载App</a></li>
                        <li><a class="last" href="#">帮助中心</a></li>
                     </ul>
                 </div>
                 <div class="clear_f"></div>
             </div>
             <div style="margin-bottom: 0px;" class="header_bg ">
                 
                 <!-- <div id="promo_nav">
                     <div class="itemswrap">
                         <ul class="nav-items">
                             <li class="nav-items-main"><a class="main-a" target="_blank" href="#"><span class="main-icon">主会场</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">上衣馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">美裙馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">女裤馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">潮鞋馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">包包馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">配饰馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">家居馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">美妆馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">男装馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">食品馆</span></a></li>
                             <li class="nav-items-branch"><a target="_blank" href="#"><span class="branch-icon">童装馆</span></a></li>
                             <li class="nav-items-itemright"><a target="_blank" href="#"><img src="/img/245041fceb4c632290b5f224885a_183_45.png"></a></li>
                         </ul>
                     </div>
                 </div> -->
                 <div class="clear_f"></div>
                 <div class="header_top logo_wrap">
                     <a class="logo_new" href="#"></a>
                     <a class="promologo" href="#"><img src="/img/0241cca3c928097582113de082e5_98_36.gif"></a>
                     <div class="ser_n">
                         <form class="searchBox" action="/search" method="get">
                             <div class="search-table">
                                 <span class="cur" data-type="1">宝贝</span>
                                 <div class="list">
                                     <ul>
                                         <li><a data-type="1">宝贝</a></li>
                                         <li><a data-type="4">商家</a></li>
                                         <li><a data-type="3">杂志</a></li>
                                         <li><a data-type="2">用户</a></li>
                                     </ul>
                                 </div>
                                 <em class="arrow"></em>
                             </div>
                             <span class="ipt1"><em class="i_search"></em>
                             <input class="searchKey" name="searchKey" autocomplete="off" placeholder="616傲娇节超值优惠来袭，抢先加车!" data-placeholder="616傲娇节超值优惠来袭，抢先加车!" type="text"></span>
                             <input class="search_type" value="1" name="searchType" type="hidden">
                             <input class="filter" value="goods" name="filter" type="hidden">
                             <input class="search_frm" value="searchsuggestion" name="frm" type="hidden">
                             <input class="suggest_frm" value="" name="suggest_frm" type="hidden">
                             <span class="ipt2"><input class="fm_hd_btm_shbx_bttn" value="搜 索" type="submit"></span>
                         </form>
                         <div class="clear_f"></div>
                             <ul class="searchType none_f"></ul>
                             
                         </div>
                         <!-- <ul class="cart_info">
                         <li><a href="/cart" target="_blank"><span class="carts_num none_f"><span>undefined</span></span><em class="i_cart">&nbsp;</em> 查看购物车</a></li><li><a href="/order" target="_blank"><em class="i_order">&nbsp;</em>我的订单</a></li></ul> -->
                     </div>
                 </div>
                 <div style="position: relative; top: 0px; height: auto;" id="navbar">
                     <div class="wheader">
                         <div class="header_b">
                             <ul class="nav_new">
                                <li class="home"><a class="r_d" href="#">首页<span class="shining none_f"></span></a></li>
                                <li class="guang"><a class="" href="#">今日最热</a></li>
                                <li class="dress"><a class="" href="#">衣服<em class="white_arrow"></em></a>
                                    <div style="display: none;" class="header_list">
                                        <div class="header_lcon">
                                            <a class="" href="#">上衣</a>
                                            <a class="" href="#">裙子</a>
                                            <a class="" href="#">裤子</a>
                                            <a class="" href="#">内衣</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="" href="#">鞋子</a></li>
                                <li><a class="" href="#">包包</a></li>
                                <li><a class="" href="#">配饰</a></li>
                                <li><a class="" href="#">家居</a></li>
                                <li><a class="r_r " href="#">美妆</a></li>
                                <li class="sale"><a class="" href="#">特卖</a></li>
                                <li><a class="" href="#">团购</a></li>
                                <li><a class="" href="#">好店</a></li>
                                <li class="group"><a class="" href="#">杂志</a></li>
                                <li class="report"><a class=" fclub" href="#">福利社<em class="white_arrow"></em></a>
                                    <div style="display: none;" class="header_list">
                                        <div class="header_lcon">
                                            <a href="#">达人</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php $this->beginBody() ?>
 <?= $content ?>

        
        <div class="footer">
            <div class="foot_con">
                <div class="f_list service_info">
                    <div class="kefu">
                        <span class="tel_ico"></span>
                        <p class="f20_f">4000-800-577</p>
                        <p class="f14_f mt4_f">美丽说客服热线</p>
                    </div>
                        <ol class="business">
                            <li>周一至周日：08:00-24:00</li>
                        </ol>
                    </div>
                    <div class="f_list">
                        <h4>买家帮助</h4>
                        <ul>
                            <li><a href="#" target="_blank">新手指南</a></li>
                            <li><a href="#" target="_blank">服务保障</a></li>
                            <li><a href="#" target="_blank">帮助中心</a></li>
                        </ul>
                    </div>
                    <div class="f_list">
                        <h4>商家帮助</h4>
                        <ul>
                            <li><a href="#" target="_blank">商家入驻</a></li>
                            <li><a href="#" target="_blank">商家推广</a></li>
                            <li><a href="#" target="_blank">帮助中心</a></li>
                        </ul>
                    </div>
                    <div class="f_list">
                        <h4>关于我们</h4>
                        <ul>
                            <li><a href="#" target="_blank">关于美丽说</a></li>
                            <li><a href="#" target="_blank">联系我们</a></li>
                            <li><a href="#" target="_blank">加入美丽说</a></li>
                        </ul>
                    </div>
                    <div class="f_list">
                        <h4>关注我们</h4>
                        <ul>
                            <li class="sina_attention">
                                <a href="#" target="_blank"><span class="i_sina">&nbsp;</span>新浪微博</a>
                                <div class="sina_attention_area">
                                    一键关注新浪微博                        
                                    <wb:follow-button uid="1718455577" type="red_1" width="67" height="24">
                                        <!-- <iframe marginheight="0" scrolling="no" src="./followbutton.htm" frameborder="0" height="24" width="67"></iframe> -->
                                    </wb:follow-button>
                                </div>
                            </li>
                            <li>
                                <a href="#" target="_blank"><span class="i_qzone">&nbsp;</span>QQ空间</a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><span class="i_tx">&nbsp;</span>腾讯微博</a>
                            </li>
                        </ul>
                    </div>
                    <div class="f_list qr-code">
                        <h4>美丽说微信服务号</h4>
                        <img src="/img/qrcode-new.jpg" alt="美丽说服务号二维码">
                    </div>
                    <div class="f_list weixin_code">
                        <h4>美丽说客户端下载</h4>
                        <a class="client_pic" href="#" target="_blank"></a>
                    </div>
                    <div class="clear_f"></div>
                    <div class="rolling">
                        <h4 class="f_links">友情链接：</h4>
                        <ul id="link_slide">
                            <li>
                                <a href="#l" target="_blank">腾讯女性</a>
                                <a href="#" target="_blank">列表网 </a>
                                <a href="#" target="_blank">太平洋女性网</a>
                                <a href="#" target="_blank">多宝汇</a>
                                <a href="#" target="_blank">七丽女性网</a>
                                <a href="#" target="_blank">酷我音乐</a>
                                <a href="#" target="_blank">LADYMAX时尚网 </a>
                                <a href="#" target="_blank">保葫芦</a>
                                <a href="#" target="_blank">中国品牌服装网</a>
                                <a href="#" target="_blank">优美网</a>
                                <a href="#" target="_blank">男士时尚 </a>
                                <a href="#" target="_blank">哈秀时尚网</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">365音乐网</a>
                                <a href="#" target="_blank">婚纱摄影</a>
                                <a href="#" target="_blank">珂兰钻石</a>
                                <a href="#" target="_blank">商业资讯</a>
                                <a href="#" target="_blank">阿里巴巴生意经</a>
                                <a href="#" target="_blank">家居就</a>
                                <a href="#" target="_blank">家具网</a>
                                <a href="#" target="_blank">亿邦动力</a>
                                <a href="#" target="_blank">爱帮网</a>
                                <a href="#" target="_blank">商人论坛</a>
                                <a href="#" target="_blank">和家网</a>
                                <a href="#" target="_blank">猪八戒网</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">乐淘网</a>
                                <a href="#" target="_blank">优惠券</a>
                                <a href="#" target="_blank">应用汇</a>
                                <a href="#" target="_blank">名鞋库</a>
                                <a href="#" target="_blank">爱美赏</a>
                                <a href="#" target="_blank">马可波罗</a>
                                <a href="#" target="_blank">悠哉旅游网</a>
                                <a href="#" target="_blank">POCO女性</a>
                                <a href="#" target="_blank">天气预报</a>
                                <a href="#" target="_blank">爱乐活</a>
                                <a href="#" target="_blank">蜜芽宝贝</a>
                                <a href="#" target="_blank">趣分期大学生分期购物</a>
                            </li>    
                            <li>
                                <a href="#" target="_blank">腾讯女性</a>
                                <a href="#" target="_blank">列表网 </a>
                                <a href="#" target="_blank">太平洋女性网</a>
                                <a href="#" target="_blank">多宝汇</a>
                                <a href="w" target="_blank">七丽女性网</a>
                                <a href="#" target="_blank">酷我音乐</a>
                                <a href="#" target="_blank">LADYMAX时尚网 </a>
                                <a href="#" target="_blank">保葫芦</a>
                                <a href="#" target="_blank">中国品牌服装网</a>
                                <a href="#" target="_blank">优美网</a>
                                <a href="#" target="_blank">男士时尚 </a>
                                <a href="#" target="_blank">哈秀时尚网</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">365音乐网</a>
                                <a href="#" target="_blank">婚纱摄影</a>
                                <a href="#" target="_blank">珂兰钻石</a>
                                <a href="#" target="_blank">商业资讯</a>
                                <a href="#" target="_blank">阿里巴巴生意经</a>
                                <a href="#" target="_blank">家居就</a>
                                <a href="#" target="_blank">家具网</a>
                                <a href="#" target="_blank">亿邦动力</a>
                                <a href="#" target="_blank">爱帮网</a>
                                <a href="#" target="_blank">商人论坛</a>
                                <a href="#" target="_blank">和家网</a>
                                <a href="#" target="_blank">猪八戒网</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">乐淘网</a>
                                <a href="#" target="_blank">优惠券</a>
                                <a href="#" target="_blank">应用汇</a>
                                <a href="#" target="_blank">名鞋库</a>
                                <a href="#" target="_blank">爱美赏</a>
                                <a href="#" target="_blank">马可波罗</a>
                                <a href="#" target="_blank">悠哉旅游网</a>
                                <a href="#" target="_blank">POCO女性</a>
                                <a href="#" target="_blank">天气预报</a>
                                <a href="#" target="_blank">爱乐活</a>
                                <a href="#" target="_blank">蜜芽宝贝</a>
                                <a href="#" target="_blank">趣分期大学生分期购物</a>
                            </li>
                        </ul>
                        <p class="link_more">
                        <a href="#" target="_blank">更多&gt;&gt;</a></p>
                    </div>
                    <div class="record">Copyright ©2015 Mei&nbsp;<a href="i.meilishuo.net/css/images/about/licenseIPC.jpg" target="_blank">电信与信息服务业务经营许可证100798号</a>&nbsp; <a href="i.meilishuo.net/css/images/about/licenseGS.jpg" target="_blank">企业法人营业执照</a>&nbsp; 京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;<br>客服邮箱：kf@meinbsp;&nbsp;客服电话：4000-800-577&nbsp; 文明办网文明上网举报电话：010-82615762 &nbsp;<a href="#" target="_blank">违法不良信息举报中心</a>&nbsp;<a href="#" target="_blank">我最喜爱的人民警察评选&gt;&gt;</a>
                    </div>
                </div>
            </div>
            <?php $this->endBody() ?>

<script type="text/html" id="loginNav"> 
    <li id="setting">
        <a style="border-left:none" href="#" title="<?php echo Yii::$app->session->get('username');?>">
            <span class="s_face"><img src="/img/19e804632c91d96c684320171e31_256_256.cc.jpg"></span>
            <?php echo Yii::$app->session->get('username');?>            
            <em class="redarrow"></em>
        </a>
        <ul style="display:none" class="add_menu_leo hw76 none_f">
                <li>
                    <a href="#" target="_blank"> 我的杂志</a>
                </li>
                <li>
                    <a href="#" target="_blank"> 我的分享</a>
                </li>
                <li>
                    <a href="#" target="_blank" class="msg"> 积分兑换</a>
                </li>
                <li class="b_line">
                    <a href="/settings/setPersonal" target="_blank">账号与安全</a>
                </li>
                <li><a id="headLogoutBtn" href="../user/logout"> 退出</a></li>
        </ul>
    </li>
    <li id="message">
        <a class="msg">             消息            <span class="num_bgc none_f"></span><em class="redarrow"></em></a>
        <ul style="display:none" class="add_menu_leo hw120 none_f" id="moreMessageBox">
            <li>
                <a href="" target="_msg"> 查看关注</a>
            </li>
            <li>
                <a href="/atme/" target="_msg"> 查看@我的</a>
            </li>
            <li>
                <a href="/msg/main/user" target="_msg"> 查看私信</a>
            </li>
            <li>
                <a href="/msg/main/syser" target="_msg"> 查看系统消息</a>
            </li>
            <li>
                <a href="" target="_msg"> 查看喜欢我的</a>
            </li>
            <li>
                <a href="" target="_msg">查看回复我的</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="i_like" href="" target="_blank"><i></i>我的喜欢</a>
    </li>
    <li>
        <a href="/cart/index" target="_blank" class="mycart">
            <em class="i_cart">&nbsp;</em> 我的购物车<span id="num_bgc2" class="num_bgc num_bgc_none">1</span>
        </a>
    </li>
    <li>
        <a href="../order/index" target="_blank"><em class="i_order">&nbsp;</em>我的订单</a>
    </li>
    <li>
        <a href="../client/?frm=daeh" target="_blank"><em class="i_mob"> &nbsp;</em>下载App</a>
    </li>
    <li>
        <a class="last" href="/helpcenter/?frm=top_to_help" target="_blank">帮助中心</a>
    </li>
</script>


<div class="atDiv" style="word-wrap: break-word; outline: medium none; position: absolute;overflow:auto;filter:alpha(opacity=0);moz-opacity:0;opacity:0;"></div>
<?php if(Yii::$app->session->get('username') && Yii::$app->session->get('password')){?>
    <script>
        var htmls = $("#loginNav").html();
        $(".menu_leo").empty().append(htmls);
        $("#setting").hover(function(){
            $(".hw76").css('display','block');
        },function(){
            $(".hw76").css('display','none');
        });
        $("#message").hover(function(){
            $("#moreMessageBox").css('display','block');
        },function(){
            $("#moreMessageBox").css('display','none');
        });
        var num_bgc = $("#num_bgc2").html();
        if(num_bgc >= 1){
            $("#num_bgc2").attr('class','num_bgc');
        }

    </script>
<?php }?>

<!-- 轮播图 -->
<script src="/js/main-banner.js"></script>
<script src="/js/left-nav.js"></script>
<script src="/js/top-nav.js"></script>
<script>
    // 根据购物车数量来显示样式
    var num_bgc = $(".num_bgc").html();
    if(num_bgc >= 1){
        $(".num_bgc").attr('class','num_bgc');
    }
</script>
</body>
</html>
<?php $this->endPage() ?>