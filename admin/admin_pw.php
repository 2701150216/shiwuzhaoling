<?php

#管理 - 密码

session_start();
include_once '../inc/conn.php';
if ($_SESSION['admin'] == "OK") {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>网站密码修改</title> 
            <link href="../hfmsg.css" rel="stylesheet" type="text/css" />
        </head> 
        <body>
            <div align="center">
                <p class="title" id="title">网站密码修改</p> 
                <?php
                require_once 'head.php';
                ?>
                <p id="hr"></p>
                <table width='20%' id='cow' cellspacing='0' cellpadding='0'>
                    <form action="uppassword.php" method="post" style="background-color:#EEF2F4; width:60%; " >
                        <tr><td width='40%'><strong>帐号：</strong></td>
                            <td width='60%'><?= $_SESSION['user']; ?></td></tr><br />
                        <tr><td width='40%' class='infobr'><strong>密码：</strong></td>
                            <td width='60%'><input name="password" type="password" size="16" maxlength="16" /></td></tr>
                        <tr><td></td>
                            <td width='100%'><input name="submit" type="submit" value="修改" />
                                <input name="B2" type="reset" value="重置" /></td></tr> 
                    </form>
                </table>
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
