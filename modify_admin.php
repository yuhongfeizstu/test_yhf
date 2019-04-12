<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>修改用户信息结果</title>
</head>
<body>
<?php
$id=$_POST["id"];
$name=$_POST["name"];
$pass=$_POST["pass"];
$phone=$_POST["phone"];
//数据库连接
$link = new mysqli("localhost","root","","test_yhf",3316);
     if ($link->connect_errno) {
     	die("connect Error:" . $link->connect_error);
     } else
     {
     	$sql = "update tb_admin set admin_name='{$name}',admin_pass='{$pass}',admin_phone='{$phone}' 
     	    where admin_id='{$id}'";

     	$result = $link->query($sql);
     	if($result)
     		echo "更新成功";
     	else
     		echo "更新失败";
     }

     $link->close();

?>
<br>
<a href="show_admin.php">返回</a>

</body>
</html>