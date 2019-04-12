<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>查找用户</title>
</head>
<body>
	<?php
	$name=$_POST["name"];
	//数据库连接
	$link = new mysqli("localhost","root","","test_yhf",3316);
	if ($link->connect_errno) {
		die("connect Error:" . $link->connect_error);
	} else
	{
	   $sql= "select *from tb_admin where admin_name='{$name}'"	;

	   $result = $link->query($sql);
	   $num_rows = mysqli_num_rows($result);
   	   if ($num_rows==0)
   	   	echo "用户名为 {$name} 的用户不存在";
   	   else
   	   {
   	   	echo "<table border=1 width=80%>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NAME</th>";
        echo "<th>PASSWORD</th>";
        echo "<th>PHONE</th>";
        echo "</tr>";
        echo "</thead>";
        while($row = $result->fetch_assoc())
        {
        	echo "<tr>";
        	echo "<td>".$row["admin_id"]."</td>";
        	echo "<td>".$row["admin_name"]."</td>";
        	echo "<td>".$row["admin_pass"]."</td>";
        	echo "<td>".$row["admin_phone"]."</td>";
            echo "</td>";
        }
        echo "</table>";
        //关闭数据库
        $link->close();

   	   }

	}


	?>
<br>
<a href="show_admin.php">返回</a>

</body>
</html>