<?php



session_start();
session_unset();
session_destroy();
include_once '../inc/info_web.php';
include_once '../inc/info_ad.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $webname; ?></title>
        <link href="../hfmsg.css" rel="stylesheet" type="text/css" />
        <script>
            setTimeout("location.href='../'", 3000);
        </script>
    </head>
    <body>
        <div align="center">
            <p class="title" id="title"><?= $webname; ?></p>

            <?php include_once 'head.php';
            ?>
            <div style="color:#FF0000"><b>您已退出管理，正在返回网站首页……</b></div>
        </div>
      
    </body>
</html>
