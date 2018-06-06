<?php

#管理 - 广告

session_start();
include_once '../inc/conn.php';
if ($_SESSION['admin'] == "OK") {
    $exec = "select * from ad";
    $result = mysql_query($exec);
    $rs = mysql_fetch_object($result);
    $ad_top = isset($rs->ad_top) ? $rs->ad_top : '';
    $ad_foot = isset($rs->ad_foot) ? $rs->ad_foot : '';
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>网站广告管理</title> 
            <link href="../hfmsg.css" rel="stylesheet" type="text/css" />
        </head> 
        <body>
            <div align="center">
                <p class="title" id="title">网站广告管理</p> 
                <?php
                include_once 'head.php';
                ?>
                <p id="hr"></p>
                <form action="adupdata.php" method="post" name="name1" id="name1">
                    <strong>顶部广告：</strong>
                    <textarea name="post_adtop" cols="83" rows="4"><?= $ad_top ?></textarea></br>
                    <strong>底部广告：</strong>
                    <textarea name="post_adfoot" cols="83" rows="4"><?= $ad_foot ?></textarea></br>
                    <input name="submit" type="submit" value="修改" />
                    <input name="B2" type="reset" value="重置" />
                </form>
                <?php
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
