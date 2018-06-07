<?php

#数据库连接

include_once 'config.php';
$conn = mysql_connect($host,$user,$password) or die("no sql<br /><a href='install.php'>点击安装</a>"); 
mysql_select_db($db);  
mysql_query("set names utf8");  
date_default_timezone_set("Asia/Shanghai");
?>