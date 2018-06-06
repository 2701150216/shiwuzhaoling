<?php

#管理 - 信息列表

session_start();
ob_start();
include_once '../inc/conn.php';
include_once '../inc/order_sql.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>信息列表管理</title> 
        <link href="../hfmsg.css" rel="stylesheet" type="text/css" />
    </head> 
    <body>
        <div align="center">
            <p class="title" id="title">信息列表管理</p> 
            <?php
            if ($_SESSION['admin'] == "OK") {
                include_once 'head.php';
                include_once '../pagesql.php';
                include_once '../page.php';
                ?>
                <p id="hr"></p>
                <table width='60%' id='cow' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td valign='top'>
                            <table width='100%' cellspacing='1' cellpadding='2'>
                                <tr align='left'>
                                    <td width='6%' class='infobr'><strong>
                                            <form action='admin_list.php' id="filterForm"> 
                                                <select name='info' onchange="document.getElementById('filterForm').submit()">
                                                    <option value=''>选择</option>
                                                    <option value='guashi'>挂失</option>
                                                    <option value='zhaoling'>招领</option>
                                                    <option value='all'>全部</option>
                                                </select>	
                                            </form>
                                        </strong></td>
                                    <td width='37%' class='infobr'><strong>标题：</strong></td>
                                    <td width='17%' class='infobr'><strong>用户名：</strong></td>
                                    <td width='14%' class='infobr'><strong>IP：</strong></td>
                                    <td width='18%' class='infobr'><strong>发布时间：</strong></td>
                                    <td width='4%' class='infobr'></td>
                                    <td width='4%' class='infobr'></td>
                                </tr>
                            </table>   
                        </td>
                    </tr>
                </table>
    <?php
    while ($rs = mysql_fetch_object($result)) {
        if (($rs->fabu) == '1') {
            $leibie = '<font color=red>挂失</font>';
        } else {
            $leibie = '<font color=blue>招领</font>';
        }
        echo"
		<table width='60%' id='cow' cellspacing='0' cellpadding='0'>
		  <tr>
			<td valign='top'>
			<table width='100%' cellspacing='1' cellpadding='2'>
			<tr align='left'>
				<td width='6%' class='infobr'>$leibie</td>
				<td width='37%' class='infobr'><strong><font color='blue'><a href='../info.php?id=$rs->id' target='_blank'>$rs->title</a></font></strong></td>
				<td width='17%' class='infobr'>$rs->name</td>
				<td width='14%' class='infobr'>$rs->ip</td>
				<td width='18%' class='infobr'>$rs->time</td>
				<td width='4%' class='infobr'><a href='modify.php?id=$rs->id' target=_blank'>修改</a></td>
				<td width='4%' class='infobr'><a href='delete.php?id=$rs->id' target=_blank'>删除</a></td>
			</tr>
		  </table>   
		  </td>
		  </tr>
		</table>";
        /*      echo "<div class=result><ul><li>用户名:".$rs->name."&nbsp;&nbsp;<b>标题:</b>".$rs->title."&nbsp;&nbsp;<b>IP:</b>".$rs->ip."&nbsp;&nbsp;<b>发布时间:</b>".$rs->time."</li>\n";
          echo  "<li><a href=modify.php?id=".$rs->id." >修改</a> <a href=delete.php?id=".$rs->id." >删除</a> <a href='../info.php?id=".$rs->id."' target='_blank'>浏览</a></li></ul></div>";
         */
    }
    echo"
		<table width='60%' cellspacing='1' cellpadding='2'>
			<tr bgcolor='#EEF2F4'><td>&nbsp;</td></tr>
		</table>
		<table width='60%' cellspacing='1' cellpadding='2'>
			<tr bgcolor='#DBE6F5'>
			<td><span style='float:left; text-align:left'><font color=#666666>$page_string</font></span><span style='float:right; text-align:left'><font color=#666666>每页显示<b>$page_size</b>条，总共有&nbsp;<b>$amount</b>&nbsp;条信息。<font></span></td>
			</tr>
		</table>";
} else {
    header("location:login.php");
    ob_end_flush();
}
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