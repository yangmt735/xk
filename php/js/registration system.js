$(document).ready(function(){
	//注册或报名
	$("#register").click(function(){
		$("#zhuc").show();
		$("#bm").hide();
		$("#register").attr("class","hd");
		$("#enroll").attr("class","hdw");
	})
	$("#enroll").click(function(){
		$("#bm").show();
		$("#zhuc").hide();
		$("#register").attr("class","hdw");
		$("#enroll").attr("class","hd");
	})
	//添加*
	$("#zhuc input").each(function(){
		var $required = $("<strong class='x'>*</strong>");
		$(this).parent().append($required);
	});
	$("#bm input.xy").each(function(){
		var $required = $("<strong class='x'>*</strong>");
		$(this).parent().append($required);
	});
	//注册表单验证
	$("#zhuc input").blur(function(){
		if ($(this).is('#username')){
			if (this.value==""||this.value.length>6){
				$("#username").next().attr("class","y");
			}else{
				$("#username").next().attr("class","x");
			}
		}
		if($(this).is("#passWord")){
			if(this.value==""||(this.value!=""&&!/^(?![^a-zA-Z]+$)(?!\D+$){6,16}/.test(this.value))){
				$("#passWord").next().attr("class","y");
			}else{
				$("#passWord").next().attr("class","x");
			}
		}
		if($(this).is("#again-passWord")){
			if(this.value!=$("#passWord").val()){
				$("#again-passWord").next().attr("class","y");
			}else{
				$("#again-passWord").next().attr("class","x");
			}
		}
		if($(this).is("#contact")){
			if(this.value==""||!/^1[3|5|7|8|][0-9]{9}$/.test(this.value))
			{
				$("#contact").next().attr("class","y");
			}else{
				$("#contact").next().attr("class","x");
			}
		}
	})
	$("#send").click(function(){
		$("#zhuc input").trigger('blur');
		var numError = $('#zhuc .y').length;
		if(numError){
			return false;
		}
		$("#cg").text("注册成功！");
		$(".success").show();
	});
	//报名表单验证
	$("#bm input.xy").blur(function(){
		var $parent=$(this);
		if(this.value=="")
		{
			$parent.next("strong").attr("class","y");
		}else{
			$parent.next("strong").attr("class","x");
			}
	});
	$("#qt").click(function(){
		if($("#qt").is(":checked")){
			$(".hidden").show();
		}
		else{
			$(".hidden").hide();
		}
	})
	$("#enlist").click(function(){
        var x=$("#xm")[0].value;
        if(x=="")
        {
           	$("#xm").next("strong").attr("class","y");
          	$(document).scrollTop(10);
            return false;
        }
        var val=$('input:radio[name="sex"]:checked').val();
        if(val==null){
            $("input:radio[name='sex']").next("strong").attr("class","y");
            $(document).scrollTop(10);
            return false;
        }
        var n=$("#nl")[0].value;
        if(n=="")
        {
            $("#nl").next("strong").attr("class","y");
            $(document).scrollTop(30);
            return false;
        }
        var y=$("#zy")[0].value;
        if(y=="")
        {
        	$("#zy").next("strong").attr("class","y");
        	$(document).scrollTop(30);
            return false;
        }
        if($("input[type='file']").val()==""){
			$("input[type='file']").next("strong").attr("class","y");
			$(document).scrollTop(30);
		}
        var z=$("#yx")[0].value;
       	if(z==""||(z!=""&&!/.+@.+\.[a-zA-Z]{2,4}$/.test(z)))
        {
            $("#yx").next("strong").attr("class","y");
            $(document).scrollTop(50);
            return false;
        }
        var j=$("#jg")[0].value;
        if(j=="")
        {
           	$("#jg").next("strong").attr("class","y");
           	$(document).scrollTop(70);
            return false;
        }
		$(".fbt input").trigger('blur');
		var numError = $('.fbt .y').length;
		if(numError){
			return false;
		}
		$("#cg").text("报名成功！");
		$(".success").show();
	});
	//上传图片预览
	function getObjectURL(file) {
    	var url = null ;
    	if (window.createObjectURL!=undefined) { 
       		url = window.createObjectURL(file) ;
    	} else if (window.URL!=undefined) { 
        	url = window.URL.createObjectURL(file) ;
    	} else if (window.webkitURL!=undefined) { 
       		url = window.webkitURL.createObjectURL(file) ;
    	}
   		return url ;
		}	
		$("#avatar_file").on("change",function(){
    	var objUrl = getObjectURL(this.files[0]) ; 
    	if (objUrl) {
        	$("#avatar_img").attr("src", objUrl) ; 
    	}
	});
	$("#shouc").click(function(){
		$("#shouc a").text("已收藏");
		$("#shouc a").css("color","orangered");
		$("#shouc img").attr("src","img/xin-full.png");
	})
	//登录验证
	$("#dl input[type='text']").each(function(){
		var $required = $("<strong class='b'>*</strong>");
		$(this).parent().append($required);
	});
	$("#dl input[type='text']").blur(function(){
		if ($(this).is('#user')){
			if (this.value==""||this.value.length>6){
				$("#user").next().attr("class","r");
			}else{
				$("#user").next().attr("class","b");
			}
		}
		if($(this).is("#password")){
			if(this.value==""||(this.value!=""&&!/^(?![^a-zA-Z]+$)(?!\D+$){6,16}/.test(this.value))){
				$("#password").next().attr("class","r");
			}else{
				$("#password").next().attr("class","b");
			}
		}
	})
	$("#dengl").click(function(){
		$("#dl input[type='text']").trigger('blur');
		var numError = $('#dl .r').length;
		if(numError){
			return false;
		}
	});
})