<?php

#具体单页面帖子详情

include_once 'inc/info_web.php';
include_once 'inc/info_ad.php';
include_once 'inc/info_data.php';
if (isset($_GET['id']) && $_GET['id'] !== '' && $row_stat != '0') {
    $id = intval($_GET['id']);
}//如果传值存在且传值不为空、数据库内存在，那么就给对应的页值。
else {
    header("location:index.php");
} //判断传值是否存在，如果不存在，那么就是第1页。
?>
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $title ?> - <?= $xx ?> - <?= $webname; ?></title> 
        <link href="hfmsg.css" rel="stylesheet" type="text/css" />
    </head> 
    <body>
        <!-- 页顶-栏目信息-Start  -->
        <div id="top-header">
            <div class="inner">
                <p class="search-tab">
                    <?php
                    include_once 'head.php';
                    ?>
                </p>
                <ul class="user-toolbar" id="user-toolbar">
                    <li class="item">
                        <a id="setHomepage" class="item-tab" onclick="var strHref = window.location.href;
                                this.style.behavior = 'url(#default#homepage)';
                                this.setHomePage('#');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('#','关键词系统')">收藏本站</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 页顶-栏目信息-End  -->
        <div align="center">
            <p class="title" id="title"><?= $xx ?></p>
            <?= $ad_top; ?> </br><!--顶部广告-->
            <table width='60%' id='cow' cellspacing='0' cellpadding='0'>
                <tr>
                    <td valign='top'>
                        <table width='100%' cellspacing='1' cellpadding='2'>
                            <tr align='left'>
                                <td width='66%' class='infobr'><strong>标题：<font color='blue'><?= $title ?></font></strong></td>
                                <td width='34%' class='infobr'><strong>发布时间：</strong><?= $rs->time ?></td>
                            </tr>
                        </table>
                        <table width='100%' cellspacing='1' cellpadding='2'>	
                            <tr align='left' bgcolor='#EEF2F4'>
                                <td width='33%' class='infobr'><strong>用户名：</strong><?= $name ?></td>
                                <td width='33%' class='infobr'><strong>联系QQ：</strong><a href="http://sighttp.qq.com/msgrd?v=3&uin=<?= $qq ?>&Site=http://bbs.zzzzy.com&Menu=yes" target="_blank"><?= $qq ?></a></td>
                                <td width='34%' class='infobr'><strong>联系电话：</strong><?= $tel ?></td>
                            </tr>
                        </table>  
                        <table width='100%' cellspacing='1' cellpadding='2'>	
                            <tr align='left'><div class='info'><?= $rs->info ?></div></tr><!-- 内容信息 -->
            </table>  
        </td>
    </tr>
</table></br><?= $ad_foot; ?><!--底部广告-->
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