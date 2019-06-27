<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>添加信息</title>
</head>
<body>
<?php
session_start();
include_once("../conn.php");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$year = $_POST["year"];
$month = $_POST["month"];
$type = $_POST["type"];
$message = $_POST["message"];
$time = $_POST["time"];
$address = $_POST["address"];
if( $year != ''){
$sql="INSERT INTO play (year,month,type,message,time,address)
VALUES ('$year','$month','$type','$message','$time','$address')";
$result=mysqli_query($conn,$sql);
	if(!$result){
//   	echo '数据查询失败';
        echo "<script>alert('数据插入失败，请确认信息填写是否完整！');location='insertplay.php'</script>";
	}
	else{
		echo "<script>alert('添加成功');location='play.php'</script>";
//		header("location:play.php");
	}
}
mysqli_close($conn);


?>
</body>
</html>