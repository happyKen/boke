<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发表文章</title>
</head>

<body>
<?php
if($_SESSION['key']!=1)
{
    echo "<script type='text/javascript'>alert('请先登录');location='login.php';</script>";

}
else {
    include('db_connect.php');
    $title = $_POST['title'];
    $content = $_POST['content'];
    $time = date("y-m-d H:i");
    $insert = "insert into article(title,time,content) values('$title','$time','$content')";
    $qu = mysql_query($insert);
    if (!$qu)
        echo "<script type='text/javascript'>alert('发布失败');location='blog_post.php';</script>";
    else
        echo "<script type='text/javascript'>alert('发布成功');location='blog_post.php';</script>";
}
?>
</body>
</html>