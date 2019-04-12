<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>修改用户信息</title>
</head>
<body>
	<h1 style="position:absolute; left:140px; top:10px; "><b>修改用户信息</b></h1>
	<?php
     //获取需要修改的用户的id
	$id = $_GET["id"];
	//数据库连接
	$link = new mysqli("localhost","root","","test_yhf",3316);
     if ($link->connect_errno) {
     	die("connect Error:" . $link->connect_error);
     } else
     {
     	$sql = "select *from tb_admin where admin_id=".$id;

     	$result = $link->query($sql);
     	$admin=$result->fetch_assoc();

     	//关闭数据库
     	$link->close();
     }

	?>

	<section>
		<form action="modify_admin.php" method="post">
			<table>
				<tr>
					<td style="position:absolute; left:90px; top:90px; ">编号:</td>
					<input type="number" id="admin_id" name="id" value=<?php echo $admin["admin_id"]?> readonly="true" style="position:absolute; left:150px; top:90px; "/><br>
				</tr>
				<tr>
					<td style="position:absolute; left:90px; top:120px; ">姓名:</td>
					<input type="text" id="admin_name" name="name" value="<?php echo $admin["admin_name"]?>" style="position:absolute; left:150px; top:120px; "/><br>
				</tr>
				<tr>
					<td style="position:absolute; left:90px; top:150px; ">密码:</td>
					<input type="number" id="admin_pass" name="pass" value=<?php echo $admin["admin_pass"]?> style="position:absolute; left:150px; top:150px; "/><br>
				</tr>
				<tr>
					<td style="position:absolute; left:90px; top:180px; ">电话:</td>
					<input type="text" id="admin_phone" name="phone" value="<?php echo $admin["admin_phone"]?>" style="position:absolute; left:150px; top:180px; "/><br>
				</tr>
				<tr>
					<td style="position:absolute; left:90px; top:210px; ">提交:</td>
					<input type="submit" value="确定" style="position:absolute; left:200px; top:210px; "/>
				</tr>
			</table>
		</form>
	</section>

</body>
</html>