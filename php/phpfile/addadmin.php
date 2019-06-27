<?php
session_start();
include_once("../conn.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>管理系统</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<style>
		.adm-pro{
			float: right;
			margin-right: 200px;
			text-decoration: underline;
			font-size: large;
			margin-top: 20px;
}
	</style>
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
							<li><a href="xiaochu.php">删除用户</a></li>
							<li class="hb"><a href="addadmin.php">添加管理</a></li>
							<li><a href="play.php">添加活动</a></li>
							<!--<li><a href="xiu.php">信息修改</a></li>-->
						</ul>
					</div>
				</div>
			</div>
	</div>
	<div class="adm-pro" >
							<!--<?php
echo "管理员：";
echo $_SESSION['account'];
?>-->
						</div>	
	<div class="main">
		<div class="cont" >
			<form class="form" action="denglu.php" method="post">
				<label>用户名：</label><br>
				<input style="height: 20px;width:200px;outline: none;margin:5px 0px;" type="text" name="account" placeholder="请输入要添加的管理员用户名">
				<input style="height: 30px;width: 70px;background-color:lightsteelblue ;margin:10px  60px;" type="submit" name="add" value="添加">
			</form>
		</div>	
	</div>
	<div class="ft"></div>
</body>
</html>


