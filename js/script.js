function g(id){
	return typeof id==='string'?document.getElementById(id):id;
}

window.onload=function(){
  // 标签的索引
  var index=0;
  var timer=null;

  var lis=g('notice-tit').getElementsByTagName('li'),
      divs=g('notice-con').getElementsByTagName('div');

  if(lis.length!=divs.length+1) return;

  // 遍历所有的页签
  for(var i=0;i<lis.length;i++){
  	if(i==0){
  		continue;
  	}
    lis[i].id=i;
    lis[i].onmousemove=function(){
      // 用that这个变量来引用当前滑过的li
      var that=this;
      // 如果存在准备执行的定时器，立刻清除，只有当前停留时间大于500ms时才开始执行
      if(timer){
        clearTimeout(timer);
        timer=null;
      }
      // 延迟半秒执行
      timer=window.setTimeout(function(){
        for(var j=0;j<lis.length;j++){
        	if(j==0){
  		continue;
  	}
          lis[j].className='';
          divs[j-1].style.display='none';
        }
        lis[that.id	].className='select';
        divs[that.id-1].style.display='block';
      },500);
    }
  }
}