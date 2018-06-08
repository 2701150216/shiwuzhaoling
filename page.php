<?php



if ($amount) {
    if ($amount < $page_size) {
        $page_count = 1;
    }             
    if ($amount % $page_size) {                               
        $page_count = (int) ($amount / $page_size) + 1;           
    } else {
        $page_count = $amount / $page_size;                    
    }
} else {
    $page_count = 0;
}

$page_string = '';
if ($page == 1) {
    $page_string .= '首页|上一页|第<b>' . ($page) . '</b>页|共<b>' . ($page_count) . '</b>页|';
} else {
    $page_string .= '<a href=' . $info_page . '&page=1>首页</a>|<a href=' . $info_page . '&page=' . ($page - 1) . '>上一页</a>|第<b>' . ($page) . '</b>页|共<b>' . ($page_count) . '</b>页|';
}
if (($page == $page_count) || ($page_count == 0)) {
    $page_string .= '下一页|尾页';
} else {
    $page_string .= '<a href=' . $info_page . '&page=' . ($page + 1) . '>下一页</a>|<a href=' . $info_page . '&page=' . $page_count . '>尾页</a>';
}
?>