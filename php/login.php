<?php
include "conn.php";
	session_start();
	header("Content-type:text/html;charset=utf-8");
//	mysqli_set_charset($con,'utf8');
	//获取传值
	$name=$_POST['uname'];
	$pwd=$_POST['upwd'];
//	$sql="select account from admin where password='admin123'";
//	$res=mysqli_query($conn,$sql);
//	$inf=mysqli_fetch_array($res);
	if($pwd=='admin123'){
		$_SESSION['account']=$_POST["uname"];
//		echo "<script>location='phpfile/update.php';</script>";
        header("location:phpfile/update.php");
	}
	else{
	//查询数据库
	//$db_selected = mysql_select_db("software",$conn);
	if($name!=''){
	$sql_select="select password from user where username='$name'";
	$result=mysqli_query($conn,$sql_select);
	if(!$result){
//		echo '数据查询失败';
        echo "<script>alert('用户名不存在！请注册。');location='../pages/index.html'</script>";
	}
	$msg=mysqli_fetch_array($result);
	if($msg=="")
	{
		echo "<script>alert('用户名不存在！请注册。');location='../pages/index.html'</script>";
	}else{
		if($msg[0]==$pwd){
			echo "<script>alert('登录成功！');sessionStorage.setItem('name','$name');location='../pages/index.html';</script>";
		}
		else{
			echo "<script>alert('密码错误！');location='../pages/index.html';</script>";
		}
	}
	}
	}
	mysqli_close($conn);

?>