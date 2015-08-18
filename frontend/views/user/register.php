<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>注册 － 美丽说</title>
<meta content="美丽说是百万MM一起修炼变美的购物分享社区。各路扮美达人与你分享美人心计、购物经验、搭配秘笈、当红好店，记录你的美丽成长。快来美丽说分享你的美丽点滴吧" name="description">
<meta content="美丽说,美丽,网购,购物分享,淘宝网购物,淘宝网女装,衣服搭配,美丽说团购" name="keywords">
<link href="/img/custom_icon_precomposed.png" rel="apple-touch-icon-precomposed">
<link href="/css/base.css" rel="stylesheet">
<link href="/css/welcome_new.css" rel="stylesheet">
<link href="/css/register_new.css" type="text/css" rel="stylesheet">
<script src="/js/jquery.js"></script>
</head>
<body>
<div class="wrap">
    <div class="reg_wrap">
        <div class="head">
            <a class="reg_logo" href="/index/index"></a>
            <a class="welcome_txt" href="/index/index"></a>
        </div>
        <div class="main">
            <div class="ad_wrap">
                <img width="370" height="353" src="/img/register/ad_img.jpg">
            </div>
            <div id="mob_reg" class="reg_form">
                <form id="registerForm" action="../user/register" method="post">
                    <h3>
                        <a href="../user/login">登录</a>
                        注册美丽说
                    </h3>
                    <div class="reg_list">
                        <p class="reg_box">
                            <input id="mobile" class="reg_txt" type="text" autocomplete="off" placeholder="手机号" name="phone">
                            <!-- <span></span> -->
                            <span class="tel_icon"></span>
                        </p>
                    </div>
                    <div class="reg_list">
                        <p class="reg_box">
                            <input id="nickname" class="reg_txt" type="text" autocomplete="off" placeholder="昵称" name="nickname">
                            <!-- <span></span> -->
                            <span class="user_icon"></span>
                        </p>
                    </div>
                    <div class="reg_list">
                        <p class="reg_box">
                            <input id="password" class="reg_txt" type="password" autocomplete="off" placeholder="密码" name="password">
                            <!-- <span></span> -->
                            <span class="pwd_icon"></span>
                        </p>
                        <!-- <div class="pw_safe none_f">
                            <span class="txt">安全程度</span>
                            <div class="pw_strength pw_weak pw_medium pw_strong">
                                <div class="pw_bar"></div>
                                <div class="pw_letter">
                            </div>
                        </div> -->
                    </div>
                    <div class="reg_list confpass">
                        <p class="reg_box">
                            <input id="conf_password" class="reg_txt" type="password" autocomplete="off" placeholder="确认密码" name="conf_password">
                            <span></span>
                            <span class="pwd_icon"></span>
                        </p>
                    </div>
                    <div class="reg_list verifcode">
                        <p class="reg_box">
                            <input id="code" class="enter_code reg_txt" type="text" maxlength="6" placeholder="短信验证码" name="code">
                            <input id="get_code" class="get_code" value="获取短信验证码">
                            <span></span>
                        </p>
                    </div>
                    <div class="regErrorMessage none_f"></div>
                    <div class="reg_btn_wrap">
                    <input type="hidden" id="_csrf" name="_csrf" value="<?php echo yii::$app->request->csrfToken;?>">
                        <input class="reg_btn" type="submit" value="立即注册">
                    </div>
                    <div class="agree_reg">
                        <input id="agreement" type="checkbox" name="agreement" checked="checked">
                        同意
                        <a target="_blank" href="/agree">美丽说注册条款</a>
                    </div>
                </form>
                <div class="fast_login">
                    <h3>无需注册，即可登录</h3>
                    <div class="fast_way">
                        <a class="qq_way" href="/connect/auth/qzone"></a>
                        <a class="sina_way" href="/connect/auth/weibo"></a>
                        <a class="weixin_way" href="/connect/auth/weixin"></a>
                    </div>
                </div>
                <div class="more_way_wrap">
                    <h4 onselectstart="return false;">更多登录方式>></h4>
                    <div class="more_way none_f">
                        <a class="txweibo" href="/connect/auth/txweibo"></a>
                        <a class="douban" href="/connect/auth/douban"></a>
                        <a class="renren" href="/connect/auth/renren"></a>
                        <a class="baidu" href="/connect/auth/baidu"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/reg.js"></script>
</body>
</html>