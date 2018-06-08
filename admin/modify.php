<?php



session_start();
include_once '../inc/conn.php';
if (($_SESSION['admin'] == "OK") && isset($_GET['id'])) {
    $exec = "select * from yszl where id=" . $_GET['id'];
    $result = mysql_query($exec);
    $rs = mysql_fetch_object($result);
    $name = $rs->name;
    $qq = $rs->qq;
    $tel = $rs->tel;
    $ip = $rs->ip;
    $title = $rs->title;
    $info = $rs->info;
    $id = $rs->id;
    if (($rs->fabu) == '1') {
        $leibie = '<font color=red>挂失</font>';
    } else {
        $leibie = '<font color=blue>招领</font>';
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>内容信息管理</title> 
            <link href="../hfmsg.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
        </head> 
        <body>
            <div align="center">
                <p class="title" id="title">内容信息管理</p> 
                <?php
                include_once 'head.php';
                ?>
                <p id="hr"></p>
                <form action="updata.php" method="post" name="name1" id="name1">
                    <table width='60%' id='cow' cellspacing='0' cellpadding='0'>
                        <tr>
                            <td valign='top'>
                                <table width='100%' cellspacing='1' cellpadding='2'>
                                    <tr align='left'>
                                        <td width='12%' class='infobr'><strong>ID:</strong><a href='../info.php?id=<?= $id ?>' target='_blank'><?= $id ?></a><input type=hidden name=id value=<?= $id ?> ></td>
                                        <td width='13%' class='infobr'><strong>类别:</strong><?= $leibie ?></td>
                                        <td width='75%' class='infobr'><strong>标题：</strong><input name="post_title" type="text" value="<?= $title ?>" size="60" maxlength="38" /></td>
                                    </tr>
                                </table>
                                <table width='100%' cellspacing='1' cellpadding='2'>
                                    <tr align='left'>
                                        <td width='25%' class='infobr'><strong>用户名:</strong><?= $name ?></td>
                                        <td width='25%' class='infobr'><strong>联系QQ:</strong><a href='http://sighttp.qq.com/msgrd?v=3&uin=<?= $qq ?>&Site=http://bbs.zzzzy.com&Menu=yes' target='_blank'><?= $qq ?></a></td>
                                        <td width='25%' class='infobr'><strong>联系电话:</strong><?= $tel ?></td>
                                        <td width='25%' class='infobr'><strong>IP:</strong><?= $ip ?></td>
                                    </tr>
                                </table>
                                <table width='100%'>
                                    <tr align='center'>
                                        <td width='100%' class='infobr'><strong>详情:</strong><textarea name="post_info" cols="60" rows="10"><?= $info ?></textarea></td>
                                    </tr> 
                                </table>   
                            </td>
                        </tr>
                    </table>
                    <input name="submit" type="submit" value="修改" />
                    <input name="B2" type="reset" value="重置" />
                </form>
                <?php
            } else
                header("location:login.php");
            mysql_close();
            ?>
        </div>
       
    </body>
</html>
