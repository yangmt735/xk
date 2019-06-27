<?php
session_start();
include_once("../conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div style="float: right;">
		<a>欢迎管理员</a>：
			<?php
echo $_SESSION['account'];


	
?>

		</div>
		
	<div style="text-align: center;top: 100px;position: relative;">
		<a href="update.php">查询系统</a>
        <a href="delete.html">删除用户</a>
        <a href="denglu.html">添加管理员</a>
        <a href="xiugai.html">信息修改</a> 
	</div>
		
		
	
	</body>
</html>

