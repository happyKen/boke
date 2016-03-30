<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登陆</title>
</head>

<body>
<?php
include('db_connect.php');
$usename=$_POST['username'];
$psd=$_POST['password'];
$query=mysql_query("SELECT * FROM user WHERE name='$usename'");
$result=mysql_fetch_array($query);
   if(!$result)
	echo "<script type='text/javascript'>alert('用户名不存在');location='login.php';</script>";
	//返回登陆页面
	else if($psd==$result['password'])
	{
		echo "<script type='text/javascript'>alert('登陆成功');location='index.php';</script>";
		$_SESSION['key']=1;
		$_SESSION['name']=$usename;
		//跳转主页面
	}
	else 
	echo "<script type='text/javascript'>alert('密码错误');location='login.php';</script>";

?>
</body>
</html>