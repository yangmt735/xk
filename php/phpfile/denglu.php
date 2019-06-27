<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>添加管理员用户</title>
	</head>
	<body>
<?php
include_once("../conn.php");
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$name = $_POST["account"];
$password = "admin123";
if($name != ''){
$sql = "INSERT INTO admin (account,password)
VALUES ('$name','$password')";
if ($conn->query($sql) === TRUE) {
//  echo "<script>";
	echo "<script>alert('新管理员加入成功！');location='addadmin.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
</body>
</html>