<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("db_connect.php");
$name=$_POST['username'];
$password=$_POST['password'];
$insert="insert into user(name,password) values('$name','$password')";
$qu=mysql_query($insert);
if(!$qu)
    echo "<script type='text/javascript'>alert('注册失败');location='register.php';</script>";
else
    echo "<script type='text/javascript'>alert('注册成功');location='login.php';</script>";

?>
</body>
</html>