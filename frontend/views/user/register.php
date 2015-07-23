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
			<a class="reg_logo" href="/"></a>
			<a class="welcome_txt" href="/"></a>
		</div>
		<div class="main">
			<div class="ad_wrap">
				<img width="370" height="353" src="/img/register/ad_img.jpg">
			</div>
			<div id="mob_reg" class="reg_form">
				<form id="registerForm" action="" onsubmit="return false" method="post">
					<h3>
						<a href="#">登录</a>
						注册美丽说
					</h3>
					<div class="reg_list">
						<p class="reg_box">
							<input id="mobile" class="reg_txt" type="text" autocomplete="off" placeholder="手机号" name="mobile">
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
<script id="loginNav" type="text/html">
</script>
<script id="loginTpl" type="text/html">
</script>
<script id="loginSina" type="text/html">
<div class="pop_login"> <div class="l_ico"> <a class="big_sina" href="/connect/auth/weibo?frm=tk_sina1"></a> </div> <h4>登录后，继续逛！</h4> <div class="mt30_f c_f">已有帐号，直接<a class="red_f" href="/user/login?frm=tk_denglu2">登录</a></div></div>
</script>
<script id="loginQQ" type="text/html">
<div class="pop_login"> <div class="l_ico"> <a class="big_qq" href="/connect/auth/qzone?frm=tk_qq1"></a> </div> <h4>登录后，继续逛！</h4> <div class="mt30_f c_f">已有帐号，直接<a class="red_f" href="/user/login?frm=tk_denglu1">登录</a></div></div>
</script>
<script id="loginRenren" type="text/html">
<div class="pop_login"> <div class="l_ico"> <a class="big_ren" href="/connect/auth/renren?frm=tk_rr"></a> </div> <h4>登录后，继续逛！</h4> <div class="mt30_f c_f">已有帐号，直接<a class="red_f" href="/user/login?frm=tk_dengl3">登录</a></div></div>
</script>
<script id="pop_loading" type="text/html">
<div class="pop_loading"><div></div></div>
</script>
<script id="shop_pop_loading" type="text/html">
<div class="shop_pop_loading"> <div></div> </div>
</script>
<script id="floatingWindow" type="text/html">
<div class="rec_layout floatingWindow"><div class="top_ico none_f"></div><div class="left_ico none_f"></div><div class="right_ico none_f"></div><div class="bot_ico none_f"></div><div class="group_rec"></div></div>
</script>
<script id="loginSmile" type="text/html">
// <div class="smileysbox clearfix_f"> <div class="line"></div> <ul>  <li class="smiley" id="" title=""> <img emotion="" title="" src="/images/face/.gif" /> </li>  </ul></div>
</script>
<script id="mailSub" type="text/html">
<div class="mail_sub"> <fieldset> <form id="substribe" method="post" target="_blank" action="/edm/subscribe"> <legend>美丽说邮件订阅</legend> <p><span>您的邮箱：</span><input id="sub_email" class="l_ipt" type="text" name="email" placeholder="建议您使用qq邮箱" /></p> <p><span>您的姓名：</span><input id="sub_opt" class="l_ipt" type="text" name=username placeholder="选填" /></p> <p> <input id="sub_now" class="btn sure" type="submit" value="现在订阅"/> <span class="hint_sub none_f red_f">您的邮箱填写有误，请重新填写。</span> </p> </form> </fieldset> </div>
</script>
<div class="atDiv" style="word-wrap: break-word; outline: medium none; position: absolute;overflow:auto;filter:alpha(opacity=0);moz-opacity:0;opacity:0;">
<span class="before"></span>
<span class="flag"></span>
<span class="after"></span>
</div>
<script id="atSearchKey" type="text/html">
<ul class="atSearch pa_f" style="border:1px solid #CCCCCC;border-radius:2px;color:#333;padding:1px;background:#fff;z-index:1000;"> <li class="atTitle" style="padding:5px 10px;white-space:nowrap;">选择最近@的人或直接输入</li></ul>
</script>
<script src="/js/reg.js"></script>
</body>
</html>