<!DOCTYPE HTML>
<html>
<body>

<?php
    header("content-type:text/html;charset=utf-8");
    //开启session
    session_start();
    //接收表单传递的用户名和密码
    $name=$_POST['name'];
	$class=$_POST['class'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$org=$_POST['org'];
	$usn=$_POST['usn'];
    $pwd=$_POST['pwd'];
     
	//通过php连接到mysql数据库
	$connection = mysql_connect('localhost','root','password') or die("Unable to connect!"); 
	//选择数据库 
	mysql_select_db("test") or die("Unable to select database!"); 
	echo "我们会尽快处理您的请求并将反馈结果发送至您的邮箱，请耐心等待，谢谢！";
	//设置客户端和连接字符集
    mysql_query("set names utf8");
 
    //通过php进行insert操作
    $sqlinsert="INSERT INTO inf(name,class,id,email,org,usn,pwd) VALUE('$name','$class','$id','$email','$org','$usn','$pwd')";
 
    //添加用户信息到数据库
    $result = mysql_query($sqlinsert) or die("Error in query: $query. ".mysql_error());

	echo "您的用户名是：" . $usn . "<br>";
	echo "您的密码是：" . $pwd . "<br>";
	
    //释放连接资源
    mysql_close($connection);
?>

</body>
</html>
