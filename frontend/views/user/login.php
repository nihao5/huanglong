<!DOCTYPE html>
<!--[if IE 7]><html class="ie7 lt-ie10"><![endif]-->
<!--[if IE 8]><html class="ie8 lt-ie10"><![endif]-->
<!--[if IE 9]><html class="ie9 lt-ie10"><![endif]-->
<!--[if gt IE 9]><!-->
<html><!--<![endif]--><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">	
	<meta charset="utf-8">
	<title>登录 － 美丽说</title>	 
	 <link rel="stylesheet" type="text/css" href="/css/base.css"> <!--[if IE 6]><link rel="stylesheet" type="text/css" href="/css/ie6.css?1506171736.8832.0008" /><![endif]-->	 
	 <link rel="apple-touch-icon-precomposed" href="/img/custom_icon_precomposed.png"> 		
	 <link rel="stylesheet" type="text/css" href="/css/login/login.css">	
</head>
<body>
	<div class="wrap">
		<div class="reg_wrap">
			<div class="head">	
				<a href="https://account.meilishuo.com/" class="reg_logo"></a>
				<a href="https://account.meilishuo.com/" class="welcome_txt"></a>		
			</div>		
			<div class="main">		
				<div class="ad_wrap">			
					<img src="/img/register/ad_img.jpg" height="353" width="370">			
				</div>			
				<div class="login_form">			
					<form id="loginForm" method="post" onsubmit="return false" action="">			
						<h3><a href="https://account.meilishuo.com/user/register">注册</a>登录美丽说</h3>					
						<div class="login_list">						
							<p class="login_box">		
								<input class="login_txt" id="mlsUser" name="mlsUser" placeholder="邮箱/手机号/昵称" type="text">					
								<span></span>							
								<span class="user_icon"></span>						
							</p>					
						</div>					
						<div class="login_list">						
							<p class="login_box">				
								<input class="login_txt" id="password" name="password" placeholder="密码" type="password">			
								<span></span>							
								<span class="pwd_icon"></span>						
							</p>					
						</div>					
						<div class="login_list authcode none_f">			
							<div class="login_box">							
								<input class="login_txt" id="checkcode" name="checkcode" placeholder="请输入验证码" maxlength="4" type="text">
								<span></span>							
								<span class="code_icon"></span>							
								<div class="checkImage" onselectstart="return false;">					
									<img src="/img/register/blank.jpg" height="36" width="90">
									<span class="refresh"></span>							
								</div>						
							</div>					
						</div>					
						<div class="loginErrorMessage none_f"></div>					
						<div class="login_btn_wrap">						
							<input class="login_btn" value="立即登录" type="submit">					
						</div>					
						<div class="remember">						
							<input name="savestate" id="savestate" checked="checked" type="checkbox">						
							<label for="savestate">记住我</label>					
						</div>					
						<div class="forget_pwd">						
							<a href="https://account.meilishuo.com/user/findPwd" target="_blank">忘记密码？</a>					
						</div>				
					</form>				
					<div class="fast_login">			
						<h3>无需注册，即可登录</h3>					
						<div class="fast_way">					
							<a href="https://account.meilishuo.com/connect/auth/qzone" class="qq_way"></a>						
							<a href="https://account.meilishuo.com/connect/auth/weibo" class="sina_way"></a>						
							<a href="https://account.meilishuo.com/connect/auth/weixin" class="weixin_way"></a>					
						</div>				
					</div>				
					<div class="more_way_wrap">			
						<h4 onselectstart="return false">更多登录方式&gt;&gt;</h4>			
						<div class="more_way none_f">				
							<a href="https://account.meilishuo.com/connect/auth/txweibo" class="txweibo"></a>						
							<a href="https://account.meilishuo.com/connect/auth/douban" class="douban"></a>						
							<a href="https://account.meilishuo.com/connect/auth/renren" class="renren"></a>						
							<a href="https://account.meilishuo.com/connect/auth/baidu" class="baidu"></a>					
						</div>				
					</div>				
					<div class="notice">公告：淘宝互联已失效，点此进行<a href="https://account.meilishuo.com/user/appeal_tb/">账号申诉</a>				
					</div>			
				</div>		
			</div>	
		</div>
	</div>	
	<script src="/js/jquery.js"></script>
<script src="/js/login.js"></script>
</body>
</html>