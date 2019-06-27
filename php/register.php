<?php
include "conn.php";
	session_start();
	header("Content-type:text/html;charset=utf-8");
	//获取传值
	if(($_POST['uname'] !=NULL)&&($_POST['upwd'] != NULL)){
	$name=$_POST['uname'];
	$pwd=$_POST['upwd'];
	$email=$_POST['email'];
	//操作数据库
	//$db_selected = mysql_select_db("software",$conn);
	$sql_select="INSERT INTO user (username, password,email)
	VALUES ('$name', '$pwd','$email')";
	$result=mysqli_query($conn,$sql_select);
	if(!$result){
		echo '数据查询失败！';
	}
	else{
		echo "<script>alert('注册成功！');location='../pages/index.html';</script>";
	}
	mysqli_close($conn);
	}
?>