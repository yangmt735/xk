<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/index.css" />
		<title>近期活动</title>
		<link type="text/css" rel="stylesheet" href="../css/style.css">
	    <!--<script type="text/javascript" src="../js/script.js"></script>-->
	</head>
	<body>
<?php
include_once("conn.php");
error_reporting(0);

$year=$_POST["year"];
$month=$_POST["month"];
$type = $_POST["type"];
$result = mysqli_query($conn,"SELECT * FROM play
WHERE year='{$year}' AND month='{$month}' AND type='{$type}'");

while ($row = mysqli_fetch_assoc($result)){
	$goods[$i]['message'] = $row['message'];
	$goods[$i]['time'] = $row['time'];
	$goods[$i]['address'] = $row['address'];
	$i++;
}

//echo '<table border="1"><tr><td>详细信息</td><td>时间</td><td>地点 </td>';
//while($row = mysqli_fetch_array($result))
//{
//
//  echo "<tr><td> {$row['message']}</td> ".
//       "<td>{$row['time']} </td> ".
//      "<td>{$row['address']} </td> ".
//       "</tr>";
//
//}

?>

<!--导航栏-->
		<div class="head">
			<div class="xkpic">
				<img src="../img/dongshixinke.jpg"/ >
			    <p class="title">信科学院公告牌</p>
				    <div><a href="../pages/index.html">首页</a></div>
				    <div><a href="../xszz.html">学生组织</a></div>
				    <div><a href="../gzs.html">工作室</a></div>
				    <div style="border: none;"><a href="../information.html">近期活动</a></div>
			</div>
		
		</div>	
		
		<!--近期活动选项卡-->
<div id="notice" class="notice">
	    <div class="notice-content">
	   <form action="select.php" method="post">
		<div id="notice-tit" class="notice-tit">
		  <ul>
		  	<li class="notice-select">
		  		<div id="notice-select" class="notice-select">
	    	<label>年</label>
	    	<select name="year">
	    		<!--<option>2017秋</option>
	    		<option>2018春</option>
	    		<option>2018秋</option>-->
	    		<option value="2019">2019</option>
	    		<option value="2019">2020</option>
	    		<option value="2019">2021</option>
	    	</select>
	    	<br />
	    	<label>月</label>
	    	<select name="month">
	    		<!--<option>第一周</option>
	    		<option>第二周</option>
	    		<option>第三周</option>-->
	    		<option value="5月">5月</option>
	    		<option value="6月" selected="">6月</option>
	    		<option value="7月">7月</option>
	    		<option value="8月">8月</option>
	    		<option value="9月">9月</option>
	    	</select>
	    </div>
		  		
		  	</li>
		  	<li >
		  		<input type="submit" value="党团" name="type" /><!--<a href="#">党团</a>-->
		  	</li>
		  	<li>
		  		<input type="submit" value="文娱" name="type" /><!--<a href="#">文娱</a>-->
		  	</li>
		  	<li>
		  		<input type="submit" value="讲座" name="type" /><!--<a href="#">讲座</a>-->
		  	</li>
		  	<li>
		  		<input type="submit" value="专业" name="type" /><!--<a href="#">专业</a>-->
		  	</li>
		  	<li>
		  		<input type="submit" value="知识" name="type" /><!--<a href="#">知识</a>-->
		  	</li>
		  	<li >
		  		<input type="submit" value="班级" name="type" /><!--<a href="#">班级</a>-->
		  	</li>
		  	<li >
		  		<input type="submit" value="其他" name="type" /><!--<a href="#">其他</a>-->
		  	</li>
		  </ul>
		</div>
		</form>
		<div id="notice-con" class="notice-con">
			<div class="mod" style="display:block">
				<?php
				//if(($row = mysqli_fetch_array($result))){
					echo '<table class="table"><tr><td>详细信息</td><td>时间</td><td>地点 </td></tr>';
					
//					while($row = mysqli_fetch_array($result))
//					{
//					    echo "<tr><td> {$row['message']}</td> ".
//					         "<td>{$row['time']} </td> ".
//					         "<td>{$row['address']} </td> ".
//					         "</tr>";
//					}
					foreach ($goods as $value) {
						if($value['message']==''){
							echo "<script>alert('暂无详细信息，请等候更新~');location='../play.html';</script>";
						}
//						echo '商品名'. $value['name'] . '商品价格'.$value['price'];
//						echo "<a href=buy.php?name=" . $value['name'] . '&price=' . $value['price'] .">购买</a>";
//					    echo "<br>";
	                    echo "<tr><td> {$value['message']}</td> ".
					         "<td>{$value['time']} </td> ".
					         "<td>{$value['address']} </td> ".
					         "</tr>";
					}
					echo '</table>';
				//}
//				else{
//					echo "<script>alert('暂无详细信息，请等候更新~');location='../play.html';</script>";
//				}
				?>
		</div>
            
            
			 
			 
		</div>
		</div>
	</div>

        
       <!--footer-->
		<footer class="foot">
			<div>
			<p>联系我们：</p>
			<p>地址：吉林省长春市净月开发区2555号 信息科学与技术学院</p>
			<p>电话：123456666</p>
			<p>邮箱：12345@nenu.edu.cn</p>
			<p>微博：@东北师范大学信息科学与技术学院</p>
			</div>
		</footer>
		
	</body>
</html>
