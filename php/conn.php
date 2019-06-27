<?php
//	连接数据库
$conn=mysqli_connect("localhost","root","root","software");

$conn->set_charset('utf8');

if (!$conn){
  		die('Could not connect: ' . mysql_error());
 	}
?>