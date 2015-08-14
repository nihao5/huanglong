
//验证码重载函数
	function reFleshCode(){

		var timeStamp = new Date().getTime();
		var src = $('#codeImg').attr('src');
		
		//路径不能写成固定的，因为当访问不同的层次是，相对路径位置会改变
		$('#codeImg').attr('src',src+'/'+timeStamp);
	}

$(function(){
	var nicknamelock = false;
	var passwordlock = false;
	var codelock = false;
	//表单效果

	$('#mlsUser').focus(function(){	
		 			 
		 $('#mlsUser').nextAll().not('.user_icon').remove();
	});

	$('#mlsUser').blur(function(){
		
		 if ($(this).val() == "" || $(this).val() == null) {
		 	
		 	$('<span class="msg_err"></span>').insertAfter('#mlsUser');
		 	$('<div id="msgmlsUser" class="msg_error"><span></span>请输入您的用户名</div>').insertAfter('#mlsUser');
		 }else{
		 	nicknamelock = true;
		 }
	});	

	$('#password').focus(function(){		
		 			 
		 $('#password').nextAll().not('.pwd_icon').remove();
	});

	$('#password').blur(function(){
		
		 if ($(this).val() == "" || $(this).val() == null) {
		 	
		 	$('<span class="msg_err"></span>').insertAfter('#password');
		 	$('<div id="msgmlsUser" class="msg_error"><span></span>请输入您的密码</div>').insertAfter('#password');
		 }else if (!/^[\w]{6,23}$/.test($(this).val())) {
		 	
		 	$('<span class="msg_err"></span>').insertAfter('#password');
		 	$('<div id="msgmlsUser" class="msg_error"><span></span>输入密码需在6位到32位间</div>').insertAfter('#password');
		 }else{

		 	passwordlock = true; 
		 }
	});	

	$('#checkcode').focus(function(){
		 			 
		 $('#checkcode').nextAll().not('.code_icon').not('.checkImage').remove();
	});

	$('#checkcode').blur(function(){
		
		 if ($(this).val() == "" || $(this).val() == null) {
		 	
		 	$('<span class="msg_err"></span>').insertAfter('#checkcode');
		 	$('<div id="msgmlsUser" class="msg_error"><span></span>请输入右侧验证码</div>').insertAfter('#checkcode');
		 }else{
		 	var code = $(this).val();
		 	$.post(url3,{code:code},function(msg){
				if(msg){
					codelock = true;	
				}else{
					$('<span class="msg_err"></span>').insertAfter('#checkcode');
 					$('<div id="msgmlsUser" class="msg_error"><span>验证码错误！</span></div>').insertAfter('#checkcode');
 					reFleshCode();
				}	
			});
		 }
	});

	//Ajax发送表单
	$('.login_btn').click(function(){
		if (nicknamelock == true && passwordlock == true) {
			var _csrf = $('#_csrf').val();
			var username = $("#mlsUser").val();
			var password = $("#password").val();
			$.ajax({
				url:'../user/login',
				type:'post',
				dataType:'json',
				data:{username:username,password:password,_csrf:_csrf},
				success:function(data){
					if(data.status == -1){
						$('<span class="msg_err"></span>').insertAfter('#password');
		 				$('<div id="msgmlsUser" class="msg_error"><span></span>'+data.msg+'</div>').insertAfter('#password');
						// alert(data.msg);
						return false;
					}else{
						window.location.href="../index/index";
					}
				}
			});
		}else{
			// $('#registerForm').submit(function(){return false;});
			alert('请正确输入相关信息！');
			return false;
		}
		// reFleshCode();
	});   
});