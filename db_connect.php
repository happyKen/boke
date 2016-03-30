<?php 
@header('content-type:text/html;charset=urf-8');
mysql_connect('localhost','root','') or die('数据库连接失败：'.mysql_error());//连接数据库
mysql_select_db('boke') or die(mysql_error());//选择数据库
mysql_query('set names utf8');
?>
