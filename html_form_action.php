<?php
    header("content-type:text/html;charset=utf-8");
 <p>我们会尽快处理您的请求并将反馈结果发送至您的邮箱，请耐心等待，谢谢！</p>
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
    $conn=mysql_connect("localhost","root","Lqa072072");
             
    //选择数据库
    mysql_select_db("test");
 
	//设置客户端和连接字符集
    mysql_query("set names utf8");
 
    //通过php进行insert操作
    $sqlinsert="insert into t1(name,class,id,email,org,pwd) values('{$name}','{$class}','{$id}','{$email}','{$org}','{$pwd}')";
 
    //通过php进行select操作
    $sqlselect="select * from t1 order by id";
 
    //添加用户信息到数据库
    mysql_query($sqlinsert);
             
    //返回用户信息字符集
    $result=mysql_query($sqlselect);
	echo "您的用户名是："$usn<br/>;
	echo "您的密码是："$pwd<br/>;
 
    //释放连接资源
    mysql_close($conn);
?>