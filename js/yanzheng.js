$(function(){
	/*表单验证*/
//	$("form :input.required").each(function(){
//		var $required = $("<strong class='high'>*</strong>");
//		$(this).parent().append($required);
//	});
	// 为表单元素添加失去焦点事件
	$('form :input').blur(function(){	
		var $parent = $(this).parent();
		$parent.find(".formtips").remove();
		
	if ($(this).is('form :input#in')) {
		if (this.value=="") {
			var errorMsg='输入不能为空  ';
			$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
		}
	}
	// 验证学号
	if ($(this).is('#userid')) {
		if (this.value==""||(this.value!=""&&!/[0-9]+$/g.test(this.value))) {
			var errorMsg='请输入正确的学号';
			$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
		}else{
			var okMsg='输入正确';
			$parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
		}
	}
	// 验证密码
//	if ($(this).is('#password')) {
//		if (this.value==""||this.value.length<6||this.value.length>20||(this.value!=""&&!/[a-zA-Z0-9]+$/g.test(this.value))) {
//			var errorMsg='只能输入字母或数字,请输入6-20位的正确的密码';
//			$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
//		}
//		else{
//			var okMsg='输入正确';
//			$parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
//		}
//	}
	//确认密码
//	if ($(this).is('#truepw')) {
//		if (this.value==""||this.value!=$('#password').val()) {
//			var errorMsg='输入的密码与原密码不符';
//			$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
//		}
//		else{
//			var okMsg='输入正确';
//			$parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
//		}
//	}
	//姓名
	if ($(this).is('#username')) {
		if (this.value==""||(this.value!=""&&!/[a-zA-Z\u4e00-\u9fa5]+$/g.test(this.value))) {
			var errorMsg='只能输入字母或汉字';
			$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
		}
		else{
			var okMsg='输入正确';
			$parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
		}
	}
	//联系方式
	if ($(this).is('#phone')) {
		if (this.value==""||(this.value!=""&&!/1(3[0-9]|5[189]|8[6789])[0-9]{8}$/g.test(this.value))) {
			var errorMsg='请正确输入电话号码';
			$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
		}
		else{
			var okMsg='输入正确';
			$parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
		}
	}
	//年龄
//	if ($(this).is('#age')) {
//		if (this.value==""||this.value.length>4||(this.value!=""&&!/[0-9]+$/g.test(this.value))) {
//			var errorMsg='请输入1-3位的正确的年龄';
//			$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
//		}
//		else{
//			var okMsg='输入正确';
//			$parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
//		}
//	}
	//邮箱
	if ($(this).is('#email')) {
			if (this.value==""||(this.value!=""&&!/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value))) {
				var errorMsg='请输入正确的E-Mail地址';
				$parent.append('<span class="formtips onError">'+errorMsg+'</span>');
			}else{
				var okMsg='输入正确';
				$parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
			}
		}
	});
})
