$(function(){

	var phoneMessage = [ "请填写您经常使用的手机号码，示例：13911110000", "手机号码不能为空", "请填写有效的11位手机号码", "该手机号码已经注册过" ],
		usernameMessage = [ "长度为4-15位的中英文字符(每个汉字为2个字符)、数字和下划线", "用户名不能为空", "用户名格式错误", "该用户名已存在", "用户名不能少于4个字符", "用户名不可以为纯数字", "用户名不能超过15个字符" ],
		passwordMessage = [ "密码长度为6-23位英文字符、数字和下划线", "密码不能为空", "密码格式不正确", "两次输入的密码不一致", "密码不能少于6位", "密码过于简单！", "请再次填写密码", "确认密码必须填写！" ],
		captchaMessage = [ "请填写图片中的字符，不区分大小写", "验证码不能为空", "验证码错误" ];

	var phonelock = false;
	var nicknamelock = false;
	var passwordlock = false;
	var confpasslock = false;
	var codelock = false;
	var _csrf = $('#_csrf').val();

	//注册手机
	$('#mobile').focus(function(){			 			 
		 $('#mobile').nextAll().not('.tel_icon').remove();
		 $('<div id="msgmlsUser" class="msg_error"><span></span>'+phoneMessage[0]+'</div>').insertAfter('#mobile');
	});

	$('#mobile').blur(function(){
		$('#mobile').nextAll().not('.tel_icon').remove();
		var val = $(this).val();
		checkPhone(val,_csrf);
	});	

	//注册用户名

	$('#nickname').focus(function(){
		 $('#nickname').nextAll().not('.user_icon').remove();
		 $('<div id="msgmlsUser" class="msg_error"><span></span>'+usernameMessage[0]+'</div>').insertAfter('#nickname');
	});

	$('#nickname').blur(function(){
		$('#nickname').nextAll().not('.user_icon').remove();
		var val = $(this).val();
		checkUsername(val,_csrf);
	});	

	//注册密码验证

	$('#password').focus(function(){
		 $('.confpass').fadeIn(0);
		 $('#password').nextAll().not('.pwd_icon').remove();
		 $('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[0]+'</div>').insertAfter('#password');
	});

	$('#password').blur(function(){
		
		var val = $(this).val();
		var res = checkPassword(val);
		$('#password').nextAll().not('.pwd_icon').remove();	
		if (res == 1) {		 	
			$('<span class="msg_err"></span>').insertAfter('#password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[1]+'</div>').insertAfter('#password');
		}else if(res == 2) {
			$('<span class="msg_err"></span>').insertAfter('#password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[2]+'</div>').insertAfter('#password');		
		}else if(res == 4){
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[4]+'</div>').insertAfter('#password');		
		}else if(res == 5){
			$('<span class="msg_err"></span>').insertAfter('#password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[5]+'</div>').insertAfter('#password');		
		}else{
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[6]+'</div>').insertAfter('#password');		
			// $('.none_f').fadeIn(0);
			passwordlock = true;
		}
	});	

	//密码确认

	$('#conf_password').focus(function(){
	 	$('#conf_password').nextAll().not('.pwd_icon').remove();
	 	$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[0]+'</div>').insertAfter('#conf_password');
	});

	$('#conf_password').blur(function(){
		
		var val = $(this).val();
		var res = checkPassword(val);

		$('#conf_password').nextAll().not('.pwd_icon').remove();
		
		if (res == 1) {		 	
			$('<span class="msg_err"></span>').insertAfter('#conf_password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[7]+'</div>').insertAfter('#conf_password');
		}else if(res == 2){
			$('<span class="msg_err"></span>').insertAfter('#conf_password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[2]+'</div>').insertAfter('#conf_password');		
		}else if(res == 3){
			$('<span class="msg_err"></span>').insertAfter('#conf_password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[3]+'</div>').insertAfter('#conf_password');		
		}else if(res == 4){
			$('<span class="msg_err"></span>').insertAfter('#conf_password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[4]+'</div>').insertAfter('#conf_password');		
		}else if(res == 5){
			$('<span class="msg_err"></span>').insertAfter('#conf_password');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+passwordMessage[5]+'</div>').insertAfter('#conf_password');		
		}else{
			$('#password').nextAll().not('.pwd_icon').remove();		
			confpasslock = true;	
		}
	});

	//验证码验证
	$('#checkcode').focus(function(){
		 			 
		 $('#checkcode').nextAll().not('.code_icon').not('.checkImage').remove();
		 $('<div id="msgmlsUser" class="msg_error"><span></span>'+captchaMessage[0]+'</div>').insertAfter('#checkcode');
	});

	$('#checkcode').blur(function(){
		 $('#checkcode').nextAll().not('.code_icon').not('.checkImage').remove();	
		 var val = $(this).val();
		 checkCode(val);
		 
	});

	//Ajax发送表单
	$('.reg_btn_wrap').click(function(){

			if (phonelock == true && nicknamelock == true && passwordlock == true && confpasslock == true) {
				$('#registerForm').submit(function(){return true;});
			}else{
				$('#registerForm').submit(function(){return false;});
				alert('请正确输入相关信息！');
				return false;
			}
		// reFleshCode();
	});

//验证手机函数
	
	function checkPhone(phone,_csrf) {
		if (!phone) {
			$('<span class="msg_err"></span>').insertAfter('#mobile');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+phoneMessage[1]+'</div>').insertAfter('#mobile');
		}else if(!/^1[3|4|5|8]\d{9}$/.test(phone)){
			$('<span class="msg_err"></span>').insertAfter('#mobile');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+phoneMessage[2]+'</div>').insertAfter('#mobile');
		}else{
			$.ajax({
				url:"../user/check-phone",
				type:"post",
				dataType:"json",
				cache:false,
				data:{phone:phone,_csrf:_csrf},
				success:function(data){
					// 如果在数据库中查询到了，就返回已注册
					if(data.status == -1){
						$('<span class="msg_err"></span>').insertAfter('#mobile');
						$('<div id="msgmlsUser" class="msg_error"><span></span>'+phoneMessage[3]+'</div>').insertAfter('#mobile');
					}else{
						phonelock = true;
					}
					
				}
			});
		}
	}

//验证用户名函数
	function checkUsername(username,_csrf) {
		if (!username) {
			$('<span class="msg_err"></span>').insertAfter('#nickname');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+usernameMessage[1]+'</div>').insertAfter('#nickname');
		} else if (getStrlen(username) < 4) {
			$('<span class="msg_err"></span>').insertAfter('#nickname');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+usernameMessage[4]+'</div>').insertAfter('#nickname');		
		} else if (getStrlen(username) > 15) {
			$('<span class="msg_err"></span>').insertAfter('#nickname');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+usernameMessage[6]+'</div>').insertAfter('#nickname');	
		}else if (/^[0-9]{4,23}$/.test(username)) {
			$('<span class="msg_err"></span>').insertAfter('#nickname');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+usernameMessage[5]+'</div>').insertAfter('#nickname');		
		}else if (!/^[a-zA-Z0-9_\u4E00-\uFA29]*$/.test(username)) {
			$('<span class="msg_err"></span>').insertAfter('#nickname');
			$('<div id="msgmlsUser" class="msg_error"><span></span>'+usernameMessage[2]+'</div>').insertAfter('#nickname');
		} else {
			$.post('../user/check-name',{'username':username,_csrf:_csrf},function(msg){
				if(msg.status == -1){
					$('<span class="msg_err"></span>').insertAfter('#nickname');
					$('<div id="msgmlsUser" class="msg_error"><span></span>'+usernameMessage[3]+'</div>').insertAfter('#nickname');
				}else{
					nicknamelock = true;
				}
			},"json");	
		}
	}

//密码验证
	function checkPassword(value) {
		if (!value) {
			return 1;
		} else if (!/^[\w]{6,23}$/.test(value)) {
			return 2;
		}
		var password1 = $("#password").val(),
			password2 = $("#conf_password").val();
		if (password1 && password2) {
			if (/^[\w]{6,}$/.test(password1) && /^[\w]{6,23}$/.test(password2)) {
				if (password1 == password2) {
					return 0;
				} else {
					return 3;
				}
			} else if (value == password1 && /^[\w]{6,23}$/.test(password1)) {
				return 0;
			} else if (value == password2 && /^[\w]{6,23}$/.test(password2)) {
				return 0;
			}
		} else if (password1) {
			if (/^[\w]{6,23}$/.test(password1)) {
				return 0;
			}
		} else {
			if (/^[\w]{6,23}$/.test(password2)) {
				return 0;
			}
		}
	}
//验证码验证
	function checkCode(code){
		
		if (!code) {
			$('<span class="msg_err"></span>').insertAfter('#checkcode');
	 		$('<div id="msgmlsUser" class="msg_error"><span>'+captchaMessage[1]+'</span></div>').insertAfter('#checkcode');
		}else{
			$.post(url3,{code:code},function(msg){
				if(msg){
					codelock = true;	
				}else{
					$('<span class="msg_err"></span>').insertAfter('#checkcode');
 					$('<div id="msgmlsUser" class="msg_error"><span>'+captchaMessage[2]+'</span></div>').insertAfter('#checkcode');
 					reFleshCode();
				}	
			});
		}
	}

//获取字串长度
	function getStrlen(str) {
	    //<summary>获得字符串实际长度，中文2，英文1</summary>
	    //<param name="str">要获得长度的字符串</param>
	    var realLength = 0, len = str.length, charCode = -1;
	    for (var i = 0; i < len; i++) {
	        charCode = str.charCodeAt(i);
	        if (charCode >= 0 && charCode <= 128) realLength += 1;
	        else realLength += 2;
	    }
	    return realLength;
	}
});


//验证码重载函数
	function reFleshCode(){
		var timeStamp = new Date().getTime();
		var src = $('#codeImg').attr('src');
		$('#codeImg').attr('src',src+'/'+timeStamp);
	}