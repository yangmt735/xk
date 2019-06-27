<?php
session_start();
include_once("../conn.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>管理系统</title>
	<!--<link rel="stylesheet" type="text/css" href="css/admin.css">-->
	<!--<link rel="stylesheet" type="text/css" href="css/common.css">-->
		<style type="text/css">
			<!--
        @import url("../css/admin.css");
        -->
        <!--
			@import url("../css/common.css");
			 -->
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
							<li class="hb"><a href="update.php">用户列表</a></li>
							<li><a href="xiaochu.php">删除用户</a></li>
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
		<div class="container">
			<table width="950" cellpadding="0" cellspacing="0" class="table2" align="center">
				<thead>
				<tr align="center">
					<th width="50" height="33" class="td2">姓名</th>
					<th width="50" height="33" class="td2">性别</th>
					<th width="100" class="td2">出生日期</th>
					<th width="150" class="td2">学校</th>
					<th width="150" class="td2">学院</th>
					<th width="100" class="td2">专业</th>
					<th width="100" class="td2">学号</th>
					<th width="100" class="td2">手机号</th>
					<th width="50" class="td2">邮箱</th>
					<th width="50" class="td2">QQ</th>
					<th width="50" class="td2">微信</th>
					<th width="100" class="td2">爱好</th>
					<th width="100" class="td2">特长</th>
				</tr>
				</thead>
				
				
					<?php
					
@mysql_connect("localhost","root","root")
or die("数据库连接失败！");
@mysql_select_db("software")
or die("选择的数据库不存在或不可用！");
mysql_query('SET NAMES UTF8');
$myquery = @mysql_query("select * from student ")
	or die("SQL 语句执行失败");
	$page_size = 10;
	$num_cnt = mysql_num_rows($myquery);
	$page_cnt = ceil($num_cnt/$page_size);
if(isset($_GET['p'])){
		$page = $_GET['p'];
	}else{
			$page = 1;
			}
$query_start = ($page-1)*$page_size;

$querysql = "select * from student limit $query_start,$page_size ";
$queryset = mysql_query($querysql);

while($row = mysql_fetch_array($queryset,MYSQL_BOTH)){	
	 echo "<tbody><tr><td class='td2'> {$row['username']}</td> ".
          "<td class='td2'>{$row['sex']}</td>".
        "<td class='td2'>{$row['birthday']} </td> ".
        "<td class='td2'>{$row['school']} </td> ".
        "<td class='td2'>{$row['college']} </td> ".
        "<td class='td2'>{$row['major']} </td> ".
        "<td class='td2'>{$row['userid']} </td> ".
        "<td class='td2'>{$row['phone']} </td> ".
        "<td class='td2'>{$row['email']} </td> ".
        "<td class='td2'>{$row['qq']} </td> ".
        "<td class='td2'>{$row['wx']} </td> ".
        "<td class='td2'>{$row['hobby']} </td> ".
        "<td class='td2'>{$row['skill']} </td> ".
         "</tr>";
}
echo"</tbody><br>";
$pager = "共 $page_cnt 页    跳转至第";
if($page_cnt>1){
	for($i = 1;$i <= $page_cnt;$i++){
		if($page ==$i){
		$pager.= "<a href='?p=$i'><b>$i</b></a>";
		}
		else{
			$pager.= "<a href='?p=$i'>$i</a>";
		}
	}
	echo $pager." 页";
}
mysql_close();
?>

				
			</table>
		</div>
		
		<div class="search-lists">
			<ul>
				<li><a href="name.html">姓名查询</a></li>
				<li><a href="sex.html">性别查询</a></li>
				<li><a href="school.html">学校查询</a></li>
				<li><a href="college.html">学院查询</a></li>
				<li><a href="major.html">专业查询</a></li>
			</ul>
		</div>	
		
	</div>
	<div class="ft"></div>
</body>
</html>


















