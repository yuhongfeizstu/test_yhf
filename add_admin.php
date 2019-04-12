<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加用户</title>
</head>
<body>
	<?php  
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$phone=$_POST["phone"];

	 //数据库连接（id属性设置为了数据库自增）
	$link = new mysqli("localhost","root","","test_yhf",3316);
	if ($link->connect_errno) 
	{
		die("connect Error:" . $link->connect_error);
	} else
	{
        //插入之前先判断是否存在该用户名
		$sql = "select * from tb_admin where admin_name='{$name}'";

 
		$result = $link->query($sql);
		$num = $result->num_rows;
		if ($num >= 1) {
			echo "该用户名已存在，添加失败";
		} else
		{
			$sql="insert into tb_admin(admin_name,admin_pass,admin_phone) values('$name', '$pass', '$phone')";
			$result =$link->query($sql);

			if($result)
				echo "添加成功";
			else
				echo "添加失败";

		}
		$link->close();
	}
	?>

	<br>
	<a href="show_admin.php">返回</a>

</body>
</html>