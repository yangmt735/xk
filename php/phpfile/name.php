<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>查询姓名</title>
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
<?php
include_once("../conn.php");
$username = $_POST["username"];
$result = mysqli_query($conn,"SELECT * FROM student
WHERE username LIKE '%{$username}%'");
echo '<table width="950" cellpadding="0" cellspacing="0" class="table2" align="center" style="margin:40px auto">
				<thead>
				<tr align="center">
					<th width="50" height="33" class="td2">姓名</th>
					<th width="50" class="td2">性别</th>
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
				</thead>';
//echo '<table border="1"><tr><td>姓名 </td><td>专业</td><td>年龄 </td><td>性别</td><td>籍贯 </td><td>爱好</td><td>性格</td><td>个人简历</td><td>email</td>';
while($row = mysqli_fetch_array($result))
{
if( $row ){
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
        else{
        	echo "<script>alert('无信息！请重新选择查询方式');location='update.php'</script>";
        }
}

echo "<tr><td colspan='3' class='td2' style='border:none'><a href='update.php'>返回用户信息列表</a></td> </tr>";
echo"</tbody><br></table>";
	
?>
</body>
</html>