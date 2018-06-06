<?php

#登陆页面

session_start();
$_SESSION['admin'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';
include_once '../inc/info_web.php';
include_once '../inc/info_ad.php';
if ($_SESSION['admin'] == "OK") {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $webname; ?> 后台管理登陆</title>
        <style type="text/css">
            * { font-family: verdana; font-size: 10pt; COLOR: gray; }
            b { font-weight: bold; }
            table { border: 1px solid gray;}
            td { text-align: center; padding: 25;}
            #title {font-size: 16px;font-weight:bold;text-decoration:none;color:#007eb5;}
        </style>
        <script type="text/javascript">
            function check_message() {
                if (window.document.adminlogin.username.value == "") {
                    alert("请输入用户名称");
                    document.adminlogin.username.focus();
                    return false;
                }
                if (document.adminlogin.password.value == "") {
                    alert("请输入密码");
                    document.adminlogin.password.focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body style="text-align:center">
        </br></br></br></br>
        <p class='title' id='title'><?= $webname; ?></br>后台管理登陆</p>
        </br></br>
        <p><strong><!-- 加粗start -->
                <form action='check.php' method='post' name='adminlogin' id='adminlogin'><!-- 表单start -->
                    <div>
                        用户名：<input name='username' type='text' maxlength='20' /></br>
                        密&nbsp;&nbsp;&nbsp;&nbsp;码：<input name='password' type='password' maxlength='20' />
                        </br></br>
                        <input name='submit' type='submit' value='提交' onclick='return check_message()'/>&nbsp;&nbsp;&nbsp;&nbsp;<input name='reset' type='reset' value='重置' />
                    </div>
                </form><!-- 表单end -->
            </strong></p><!-- 加粗end -->
        <?php
        include('foot.php'); //页脚版权信息
        ?>
    </body>
</html>
