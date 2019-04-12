<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加用户</title>
</head>
<body>

<h1 style="position:absolute; left:140px; top:10px; "><b>添加用户</b></h1>

<section>
	<form action="add_admin.php" method="post">
		<table>
			<tr>
			<tr>
				<td style="position:absolute; left:90px; top:120px; ">姓名:</td>
				<input type="text" name="name" value="" style="position:absolute; left:150px; top:120px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:150px; ">密码:</td>
				<input type="text" name="pass" value="" style="position:absolute; left:150px; top:150px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:180px; ">电话:</td>
				<input type="text" name="phone" value="" style="position:absolute; left:150px; top:180px; "/><br>
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