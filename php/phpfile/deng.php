		<?php
								
session_start();
include_once("../conn.php");
 $_SESSION['account']=$_POST["account"];
$account = $_POST["account"];
$password = $_POST["password"];
$result = mysqli_query($conn,"SELECT * FROM admin
WHERE account='{$account}'");
if($row = mysqli_fetch_array($result)){
	if($possword=="admin")
{
 header("location:update.php");
}
else
	echo "无此账号！";
}

	
?>

