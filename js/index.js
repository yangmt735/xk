$("#bianji").click(function(){
	$('#zhaiyao').attr('disabled',false);
})
$("#shanchu").click(function(){
	var qingkong = document.getElementById('#zhaiyao');
	var shanchu = document.getElementById('#shanchu');
	if(this.checked){
		qingkong.value='';
	}
	$("#zhaiyao").attr('value','')
})
