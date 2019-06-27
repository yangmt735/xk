<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>删除学生</title>
	</head>
	<body>
<?php
include_once("../conn.php");

$userid = $_POST["userid"];
if($userid!=''){
	$sql="DELETE FROM student WHERE name ='{$userid}'";
$result=mysqli_query($conn,$sql);
	if(!$result){
//   	echo '数据查询失败';
        echo "<script>alert('该学生已被删除或不存在！');location='xiaochu.php'</script>";
	}
	else{
		echo "<script>alert('删除成功！');location='xiaochu.php'</script>";
			}
//echo "删除成功！";

}
mysqli_close($conn);
?>
</body>
</html>