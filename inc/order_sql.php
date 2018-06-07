<?php



$sql = "select * from yszl ORDER BY id DESC";
$result = mysql_query($sql);                  
$amount = mysql_num_rows($result);
?>