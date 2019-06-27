<?php
session_start();
include_once("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>管理系统</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../css/common.css">
</head>
<body>
	<div class="hd">
		<div class="hd-inner clearfix">
				<div class="shool-badge fl">
					<a><img src="../img/dongshixinke.jpg" width="106px" height="106px"/></a>
				</div>
				<div class="inner-inner fl width1">
					<div class="shool-name">
						<div class="world fl">
							<a><strong>管理系统</strong></a>
						</div>
					</div>
					<div class="hd-nav">
						<ul>
							<li><a href="update.php">用户列表</a></li>
							<li class="hb"><a href="xiaochu.php">删除用户</a></li>
							<li><a href="addadmin.php">添加管理</a></li>
							<li><a href="play.php">添加活动</a></li>
						</ul>
					</div>
				</div>
			</div>
	</div>
	
	
	<div style="float: right;">
							<!--<?php
echo "管理员：";
echo $_SESSION['account'];
?>-->
						</div>	
						
	<div class="main">
		<div class="cont">
			<form  action="delete.php" method="post" class="form">
				<label>学号：</label><br>
				<input style="height: 20px;width:200px;outline: none;margin:5px 0px;" type="text" name="userid" placeholder="请输入要删除学生的学号">
				<input style="height: 30px;width: 70px;background-color:lightsteelblue ;margin:10px  60px;" type="submit"  value="删除">
			</form>
		</div>	
	</div>
	<div class="ft"></div>
</body>
</html>