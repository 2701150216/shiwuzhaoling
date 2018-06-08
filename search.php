<?php



session_start();
include_once 'inc/info_web.php';
include_once 'inc/info_ad.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>信息搜索 - <?= $webname; ?></title>
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
            <p class="title" id="title">信息搜索</p>
            <?php
            echo "<div id='search'>
		<form action='search.php' method='post'>
		<input type='text' name='key' />
		<input type='submit' value='搜索' />
		</form>
	</div>";
            error_reporting(E_ALL ^ E_NOTICE);
            if ($_POST[key]) {
                $key = explode(" ", $_POST[key]); 
                foreach ($key as $mkey) { 
                }
                $sql = "select * from yszl where info like '%$mkey%'"; 
                $query = mysql_query($sql);

                if (@mysql_num_rows($query) == 0) {
                    echo "<center>没有搜索到相关内容</center>";
                   
                }

                while ($row = mysql_fetch_array($query)) {
                    foreach ($key as $mkey) {
                        $row["info"] = preg_replace("/$mkey/i", "<font color=red><b>\\0</b></font>", $row["info"]);
                    }
                    ?>
                    <table width='60%' id='cow' cellspacing='0' cellpadding='0'>
                        <tr>
                            <td valign='top'>
                                <table width='100%' cellspacing='1' cellpadding='2'>
                                    <tr align='left' bgcolor='#DBE6F5'>
                                        <?php
                                        if (($row["fabu"]) == "1") {
                                            echo "<strong>类别:<font color=red>遗失</font></strong>\n";
                                        } else {
                                            echo "<strong>类别:<font color=blue>招领</font></strong>\n";
                                        }
                                        ?>
                                        <td width='33%'><strong>标题：<font color='blue'><a href='info.php?id=<?= $row["id"] ?>' target='_blank' title='<?= $row["title"] ?>'><?= $row["title"] ?></a></font></strong></td>
                                        <td width='34%'><strong>发布时间：</strong><?= $row["time"] ?></td>
                                    </tr>
                                </table> 
                                <table width='100%' cellspacing='1' cellpadding='2'>	
                                    <tr><div class='info'><?= $row["info"] ?></div></tr>
                    </table>  
                </td>
            </tr>
        </table>
        <?php
    }
}
?>

</body>
</html>