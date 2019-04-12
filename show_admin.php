
<!DOCTYPE html>
<html>
<head lang="en">
	<title>用户列表</title>
</head>
<body>
    <div>
        <form action="search_admin.php" method="post">
            <table>
                <tr>
                    <td>根据用户名查找:
                        <input type="text" name="name" value=""/>
                        <input type="submit" value="确定"  />
                    </td>            
                </tr>
            </table>
        </form> 
    </div>
    <br>
      
     <?php
     //数据库连接
     $link = new mysqli("localhost","root","","test_yhf",3316);
     if ($link->connect_errno) {
     	die("connect Error:" . $link->connect_error);
     } else
     {
     	$sql = "select *from tb_admin";
     	$result= $link->query($sql);
        
        echo "<table border=1 width=80%>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NAME</th>";
        echo "<th>PASSWORD</th>";
        echo "<th>PHONE</th>";
         echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        while($row = $result->fetch_assoc())
        {
        	echo "<tr>";
        	echo "<td>".$row["admin_id"]."</td>";
        	echo "<td>".$row["admin_name"]."</td>";
        	echo "<td>".$row["admin_pass"]."</td>";
        	echo "<td>".$row["admin_phone"]."</td>";
            echo "<td><a href=modify_admininfo.php?id=".$row["admin_id"].">修改</a>
                  <a href=delete_admin.php?id=".$row["admin_id"].">删除</a>
                  </td>";
          //  echo "<td><a href=update_admin.php?id=".$row["admin_id"].">删除</a></td>";
            echo "</td>";
        }
        echo "</table>";

        //关闭数据库
        $link->close();
     }
  ?>

<a href="add_admininfo.php">添加管理员</a>
</body>
</html>