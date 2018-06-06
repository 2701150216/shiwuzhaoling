<?php



$result = mysql_query($sql);                 
$amount = mysql_num_rows($result);

if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = intval($_GET['page']);
}
else {
    $page = 1;
} 

$page_size = 10;


$_GET['info'] = isset($_GET['info']) ? $_GET['info'] : '';
$_GET['info_page'] = isset($_GET['info_page']) ? $_GET['info_page'] : '';
switch ($_GET['info']) {
    case 'guashi':
        $sql = "select * from yszl where fabu = 1 ";
        $result = mysql_query($sql);                
        $amount = mysql_num_rows($result);
        $sql = "select * from yszl where fabu = 1 ORDER BY id desc limit " . ($page - 1) * $page_size . ", $page_size"; 
        $info_page = '?info=guashi'; 
        break;
    case 'zhaoling':
        $sql = "select * from yszl where fabu = 2 ";
        $result = mysql_query($sql);                 
        $amount = mysql_num_rows($result);
        $sql = "select * from yszl where fabu = 2 ORDER BY id desc limit " . ($page - 1) * $page_size . ", $page_size"; 
        $info_page = '?info=zhaoling'; 
        break;
    default:
        $sql = "select * from yszl ORDER BY id desc limit " . ($page - 1) * $page_size . ", $page_size"; 
        $info_page = '?info=all'; 
        break;
}
$result = mysql_query($sql);                 
?>