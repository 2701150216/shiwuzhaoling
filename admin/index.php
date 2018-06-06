<?php

#管理 - 首页

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
        <!-- 页脚-版权信息-Start  -->
        <div id="footer" >
            ﻿<p id="hr"></p>
            <?php
            include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        </div>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>