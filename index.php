<?php



include_once 'inc/info_web.php';
include_once 'inc/order_sql.php';
include_once 'inc/info_ad.php';
if (isset($_GET['info']) && $_GET['info'] == 'guashi') {
    $topic = '挂失信息';
} elseif (isset($_GET['info']) && $_GET['info'] == 'zhaoling') {
    $topic = '招领信息';
} else {
    $topic = '全部信息';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $topic; ?> - <?= $webname; ?></title>
        <link href="hfmsg.css" rel="stylesheet" type="text/css" />
    </head> 
    <body>
       
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
        
        <div align="center">
            <p class="title" id="title"><?= $topic; ?></p>
            <?= $ad_top; ?> </br>
          
            <table width='60%' id='cow' cellspacing='0' cellpadding='0'>
                <tr><td valign='top'>
                        <table width='100%' cellspacing='1' cellpadding='2'>	
                            <tr align='left' class='infobr'>
                                <td width='4%'><strong>分类</strong></td>
                                <td width='66%'><strong>标题</strong></td>
                                <td width='30%'><strong>提交时间</strong></td>
                            </tr>
                        </table> 
                    </td></tr>
            </table>
          
            <?php
            include_once 'pagesql.php';
            include_once 'page.php';
            while ($rs = mysql_fetch_object($result)) {
                if (($rs->fabu) == "1") {
                    $leibie = '<font color=red>挂失</font>';
                } else {
                    $leibie = '<font color=blue>招领</font>';
                }
                echo"
		   <table width='60%'>	
			<tr align='left'>
				<td width='4%' class='infobr'>$leibie</td>
				<td width='66%' class='infobr2'><a href='info.php?id=" . $rs->id . "' target='_blank' title='$rs->title'>$rs->title</a></td>
				<td width='34%' class='infobr'>$rs->time</td>
			</tr>
		  </table>	  
	  ";
            }
            echo"
	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#EEF2F4'>
      <td>&nbsp;</td>
   </tr>
   </table>
	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:left; text-align:left'><font color=#666666>$page_string</font></span><span style='float:right; text-align:left'><font color=#666666>每页显示<b>$page_size</b>条，总共有&nbsp;<b>$amount</b>&nbsp;条";
            echo $topic;
            echo"。<font></span></td>
   </tr>
   </table>";
            mysql_close();
            ?>
        </td>
    </tr>
</table>

</body>
</html>