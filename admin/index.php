<?php



session_start();
include_once '../inc/conn.php';
if ($_SESSION['admin'] == "OK") {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>后台管理首页</title> 
            <link href="../hfmsg.css" rel="stylesheet" type="text/css" />
        </head> 
        <body>
            <div align="center">
                <p class="title" id="title">后台管理首页</p>
                <?php
                require_once 'head.php';
                ?>
                <p id="hr"></p>
                <?php
                echo $_SESSION['user'];
                echo ",欢迎您回来！";
            } else
                header("location:login.php");
            mysql_close();
            ?>
        </div>
     
    </body>
</html>
