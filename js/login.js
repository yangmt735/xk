//设置登录页面弹出效果
$(document).ready(function($) {
	var flag1 = 0;
	var flag2 = 0;
	var flag3 = 0;
	$('.nav-login').click(function() {
		$('.login-form-mask').fadeIn(100);
		$('.login-form').slideDown(200);
	})
	$('.nav-regist').click(function() {
		$('.regist-form-mask').fadeIn(100);
		$('.regist-form').slideDown(200);
	})
	$('.register-btn').click(function() {

		$('.login-form-mask').fadeOut(100);
		$('.login-form').slideUp(200);
		$('.regist-form-mask').fadeIn(100);
		$('.regist-form').slideDown(200);
	})

	$('.login-close').click(function() {
		$('.login-form-mask').fadeOut(100);
		$('.login-form').slideUp(200);
		$('.regist-form-mask').fadeOut(100);
		$('.regist-form').slideUp(200);
	})
	/*表单验证*/
	$("form :input .required").each(function() {
		var $required = $("<strong class='high'>*</strong>");
		$(this).parent().append($required);
	})
	var $x, $y;
	// 为表单元素添加失去焦点事件
	$('form :input').blur(function() {
		var $parent = $(this).parent();

		$parent.find(".formtips").remove();

		if($(this).is('form :input')) {
			if(this.value == "") {
				flag1 = 0;
				flag2 = 0;
				flag3 = 0;
				var errorMsg = '输入不能为空  ';
				$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
			} else {
				// 验证用户名
				if($(this).is('#username')) {
					if(this.value.length < 2) {
						flag1 = 0;
						var errorMsg = '请输入至少2位的用户名';
						$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
					} else {
						flag1 = 1;
						var okMsg = '格式正确';
						$x = this.value;
						$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
					}
				}

				// 验证密码
				if($(this).is('#password')) {
					if(this.value.length < 6 || this.value.length > 20 || (this.value != "" && !/[a-zA-Z0-9]+$/g.test(this.value))) {
						flag2 = 0;
						var errorMsg = '只能输入字母或数字,请输入6-20位的正确的密码';
						$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
					} else {
						flag2 = 1;
						var okMsg = '格式正确';
						$y = this.value;
						$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
					}
				}
				//确认密码
				if($(this).is('#truepw')) {
					if(this.value == "" || this.value != $(this).parent().prev().children('#password').val()) {
						flag2 = 0;
						var errorMsg = '两次密码输入不一致';
						$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
					} else {
						flag2 = 1;
						var okMsg = '格式正确';
						$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
					}
				}
				//邮箱
				if($(this).is('#email')) {
					if((this.value != "" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value))) {
						flag3 = 0;
						var errorMsg = '请输入正确的E-Mail地址';
						$parent.append('<span class="formtips onError">' + errorMsg + '</span>');
					} else {
						flag3 = 1;
						var okMsg = '格式正确';
						$parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
					}
				}
			}
		}
		if(flag1 == 1 && flag2 == 1) {
			$("button").removeAttr("disabled");
		}
		if($(this).is('.submit') && flag1 == 1 && flag2 == 1 && flag3 == 1) {
			$("button").removeAttr("disabled");
		}
	});
	$('.qx').click(function() {
		alert('系统监测到您还未登录，请先登录再进行下面操作');
		$('.nav-login').click();
	})
	var host = document.URL;
	host = host.split("#");
	if(host[1] != "") {
		if(host[1] == 'a') {
			$('.dlzc').fadeOut();
			$('.yh').css('display', 'inline-block');
			$('.qx').css('display', 'none');
		}
	}

	function getCookie(name) {
		var strcookie = document.cookie; //获取cookie字符串
		var arrcookie = strcookie.split("; "); //分割
		//遍历匹配
		for(var i = 0; i < arrcookie.length; i++) {
			var arr = arrcookie[i].split("=");
			if(arr[0] == name) {
				return arr[1];
			}
		}
		return "";
	}
})