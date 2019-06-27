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
			.form{
				line-height: 30px;
				width: 200px;
                margin: 60px 350px;
			}
			.form input{
				width: 100px;
				height: 20px;
				outline: none;
			}
			.change{
				height: 20px;
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
							<li><a href="addadmin.php">添加管理</a></li>
							<li class="hb"><a href="play.php">添加活动</a></li>
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
		<div class="content">
			<form class="form"   action="insertplay.php" method="post">
			 <label>年份：</label>
				<select name="year">
	    		<option value="2019">2019</option>
	    		<option value="2020">2020</option>
	    		<option value="2021">2021</option>
	    	    </select>
				<br />
	    	<label>月份：</label>
	    	<select name="month">
	    		<option value="1月">1月</option>
	    		<option value="2月">2月</option>
	    		<option value="3月">3月</option>
	    		<option value="4月">4月</option>
	    		<option value="5月">5月</option>
	    		<option value="6月" selected="">6月</option>
	    		<option value="7月">7月</option>
	    		<option value="8月">8月</option>
	    		<option value="9月">9月</option>
	    		<option value="10月">10月</option>
	    		<option value="11月">11月</option>
	    		<option value="12月">12月</option>
	    	</select>
	    	<br />
	    	<label>类型：</label>
	    	<select name="type">
	    		<option value="党团">党团</option>
	    		<option value="文娱">文娱</option>
	    		<option value="讲座">讲座</option>
	    		<option value="专业">专业</option>
	    		<option value="知识">知识</option>
	    		<option value="班级">班级</option>
	    		<option value="其他">其他</option>
	    	</select>
	    	<br />
	    	<label>详细信息：</label>
	    	<input type="text" name="message" placeholder="请填写活动名称"/>
	    	<br />
	    	<label>时间：</label>
	    	<input type="text" name="time" placeholder="请填写活动时间"/>
	    	<br />
	    	<label>地点：</label>
	    	<input type="text" name="address" placeholder="请填写活动地点" />
	    	<br />
				<input style="height: 30px;width: 70px;background-color:lightsteelblue ;margin:10px  40px;"  type="submit" name="change" value="添加"/>
			</form>
		</div>	
	</div>
	<div class="ft"></div>
</body>
</html>











