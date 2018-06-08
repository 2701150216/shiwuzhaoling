<?php



include_once 'inc/info_web.php';   
include_once 'inc/info_ad.php';    
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $addname; ?> - <?= $webname; ?></title>
    <link href="hfmsg.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        function check_message() {
            if (window.document.leavemsg.user_name.value == "") {
                alert("请填写用户名");
                document.leavemsg.user_name.focus();
                return false;
            }
            if (document.leavemsg.post_title.value == "") {
                alert("请填写留言标题.");
                document.leavemsg.post_title.focus();
                return false;
            }
            if (CKEDITOR.instances.content.getData() == "") {
                alert("请填写留言内容.");
                document.leavemsg.post_info.focus();
                return false;
            }
        }
    </script>
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
        <p class="title" id="title"><?= $addname; ?></p>
        <form action="add_updata.php" method="post" name="leavemsg" id="leavemsg">
            <table width="60%" id="cow" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top">
                        <table width="100%" cellspacing="1" cellpadding="2">
                            <tr align="left">
                                <td width="33%" class="infobr"><strong>分类：</strong>
                                    <select name="post_fabu">
                                        <option value="1" selected>挂失</option>
                                        <option value="2">招领</option>
                                    </select></td>
                                <td width="67%" class="infobr"><strong>标题：</strong><input name="post_title" type="text" size="38" maxlength="38" /></td>
                            </tr>
                        </table>
                        <table width="100%" cellspacing="1" cellpadding="2">	
                            <tr align="left" bgcolor="#EEF2F4">
                                <td width="33%" class="infobr"><strong>用户名：</strong><input name="user_name" type="text" maxlength="16" /></td>
                                <td width="33%" class="infobr"><strong>联系QQ：</strong><input name="user_qq" type="text" maxlength="10" /></td>
                                <td width="34%" class="infobr"><strong>联系电话：</strong><input name="user_tel" type="text" maxlength="12" /></td>
                            </tr>
                        </table>  
                        <table width="100%" cellspacing="1" cellpadding="2">	
                            <tr align="center" valign="middle" bgcolor="#DBE6F5" width="100%"><textarea name="post_info" cols="100%" rows="10"  wrap="virtual"></textarea></tr><!-- 内容信息 -->
            </table>  
            </td>
            </tr>
            </table>
            <input name="submit" type="submit" value="提交" onclick="return check_message()" />&nbsp;<input name="B2" type="reset" value="清空"/>
        </form>
        </br><?= $ad_foot; ?>
    </div>


</body>
</html>
