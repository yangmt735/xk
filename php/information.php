<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/index.css" />
		<title>个人信息</title>
		<link rel="stylesheet" href="../css/inf.css" />
	</head>
	<body>
<?php
session_start();
error_reporting(0);
include_once("conn.php");

//接收数据
$username = $_POST["username"];
$sex=$_POST["sex"];
$birthday=$_POST["birthday"];
$school=$_POST["school"];
$college=$_POST["college"];
$major=$_POST["major"];
$userid=$_POST["userid"];
$phone=$_POST["phone"];
$email= $_POST["email"];
$qq=$_POST["qq"];
$wx=$_POST["wx"];
//$hobby=$_POST['hobby'];
$result = "";
foreach( $_POST['hobby'] as $i)
{
	$result .= ' ';
    $result .= $i;
}
$hobby=$result;
$skill=$_POST["skill"];

$_SESSION['username']=$username;
$_SESSION['sex']=$sex;
$_SESSION['birthday']=$birthday;
$_SESSION['school']=$school;
$_SESSION['college']=$college;
$_SESSION['major']=$major;
$_SESSION['userid']=$userid;
$_SESSION['phone']=$phone;
$_SESSION['email']=$email;
$_SESSION['qq']=$qq;
$_SESSION['wx']=$wx;
$_SESSION['hobby']=$hobby;
$_SESSION['skill']=$skill;

if(isset($userid)){
$sql1="select userid from student where userid='$userid'";
$res = mysqli_query($conn,$sql1);
$rows=mysqli_fetch_array($res);
if($rows[0]==$userid){
	$sql2="UPDATE student 
	SET username='$username',sex='$sex',birthday='$birthday',school='$school',college='$college',major='$major',phone='$phone',email='$email',qq='$qq',wx='$wx',hobby='$hobby',skill='$skill'
	WHERE userid='$userid'";
	mysqli_query($conn,$sql2);
//	echo "<script>location='http://localhost/software/php/person.php';</script>";
	
//"已经有此名字了";
} 
else{
	$sql3 = "INSERT INTO student (username,sex,birthday,school,college,major,userid,phone,email,qq,wx,hobby,skill)
VALUES ('$username','$sex','$birthday','$school','$college','$major','$userid','$phone','$email','$qq','$wx','$hobby','$skill')";
    mysqli_query($conn,$sql3);
//  echo "<script>location='http://localhost/software/php/person.php';</script>";
}
}

//insert
//$sql = "INSERT INTO student (username,sex,birthday,school,college,major,userid,phone,email,qq,wx,hobby,skill)
//VALUES ('$username','$sex','$birthday','$school','$college','$major','$userid','$phone','$email','$qq','$wx','$hobby','$skill')";
//mysqli_query($conn,$sql);
//if ($conn->query($sql) === TRUE) {
//  echo "提交成功";

//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}
?>
<!--导航栏-->
		<div class="head">
			<div class="xkpic">
				<img src="../img/dongshixinke.jpg"/ >
			    <div><a href="../pages/index.html">首页</a></div>
				    <div><a href="../xszz.html">学生组织</a></div>
				    <div><a href="../gzs.html">工作室</a></div>
				    <div style="border: none;"><a href="../play.html">近期活动</a></div>
			</div>
			<!--登录注册-->
			<!--<div class="dr">
				<div class="denglu" style="font-size: 16px;"><a>登录</a></div>
				<div class="zhuce" style="border-right: none; font-size: 16px;"><a>注册</a></div>
				<div class="touxiang" ><a><img src="../img/dongshixinke.jpg"/ width="50px" height="50px"></a></div>
		    </div>-->
		</div>	
		
		<!--个人信息-->
		<div class="inf">
			<div class="inf-title">
				<img src="../img/dongshixinke.jpg" />
				<h3>个人设置</h3>
			</div>
			<div class="inf-content">
				<form method="post" action="information.php">
					<h4>修改头像</h4>
					<img src="../img/dongshixinke.jpg" />
					<input type="file" value="选择文件"/>
					<h4>基本资料<sup>*</sup></h4>
					<label>姓名</label>
					<input type="text" placeholder="请输入姓名" name="username"
						value="<?php echo "$username";?>"/>
					<br />
					<label>性别</label>
					<?php
						if($sex=="女"){
							echo '<input type="radio" name="sex" class="sex" value="男" />男';
							echo '<input type="radio" name="sex" class="sex" value="女" checked="checked"/>女';
						}
						else{
							echo '<input type="radio" name="sex" class="sex" value="男" checked="checked"/>男';
							echo '<input type="radio" name="sex" class="sex" value="女"/>女';
						}
					?>
					<!--<input type="radio" name="sex" class="sex" checked="checked"/>男
					<input type="radio" name="sex" class="sex"/>女-->
					<!--<?php 
					   echo "<label>$sex</label>";
					?>-->
					<br />
					<label>出生日期</label>
					<input type="date"  name="birthday" 
						value="<?php echo "$birthday";?>"/>
					<br />
					<label>学校</label>
					<input type="text" placeholder="请输入学校" name="school"
						value="<?php echo "$school";?>"/>
					<br />
					<label>学院</label>
					<input type="text" placeholder="请输入学院" name="college"
						value="<?php echo "$college";?>"/>
					<br />
					<label>专业</label>
					<input type="text" placeholder="请输入专业" name="major"
						value="<?php echo "$major";?>"/>
					<br />
					<label>学号</label>
					<input type="text" placeholder="请输入学号" name="userid"
						value="<?php echo "$userid";?>"/>
					<br />
					<h4>联系方式</h4>
					<label>手机号<sup>*</sup></label>
					<input type="tel" placeholder="请输入手机号" name="phone"
						value="<?php echo "$phone";?>"/>
					<br />
					<label>邮箱<sup>*</sup></label>
					<input type="email"placeholder="请输入邮箱" name="email"
						value="<?php echo "$email";?>"/>
					<br />
					<label>QQ</label>
					<input type="text" name="qq"
						value="<?php echo "$qq";?>"/>
					<br />
					<label>微信</label>
					<input type="text" name="wx"
						value="<?php echo "$wx";?>"/>
					<br />
					<h4>其他</h4>
					<label>爱好</label>
					<input type="checkbox" name="hobby[]" class="hobby" value="唱歌"/>唱歌
					<input type="checkbox" name="hobby[]" class="hobby" value="跳舞"/>跳舞
					<input type="checkbox" name="hobby[]" class="hobby" value="绘画"/>绘画
					<input type="checkbox" name="hobby[]" class="hobby" value="乐器"/>乐器
					<input type="checkbox" name="hobby[]" class="hobby"/>其他<input type="text" class="qt" name="hobby[]"/>
					<br />
					<label>特长</label>
					<input type="text" name="skill"
						value="<?php echo "$skill";?>"/>
					<br />
					<p><span>*</span>为必填项</p>
					<input type="submit" value="提交" class="submit"/>
				</form>
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
