<!DOCTYPE html>
<html lang="en">
<head>
	<title>删除用户</title>
</head>

<body>
   <?php
   //获取id
   $id=$_GET["id"];
   //数据库连接
   $link = new mysqli("localhost", "root", "", "test_yhf",3316);
   if ($link->connect_errno)
   {
   	die("connect Error:" . $link->connect_error);
   } else
   {
   	$sql = "delete from tb_admin where admin_id=" . $id;
  
   	$result = $link->query($sql);
   	if ($result)
   		echo "删除成功";
   	else
   		echo "删除失败";

    //关闭数据库
   	$link->close();
   }

   ?>
<br>
<a href=show_admin.php>返回</a>
</body>
</html>