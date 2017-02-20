<?php 
require 'connect.php';

$short_problem = $_REQUEST['short_problem'];
$full_problem = $_REQUEST['full_problem'];
$info = $_REQUEST['info'];
$notice = $_REQUEST['notice'];

$insert_sql = "INSERT INTO general_problems (short_problem, full_problem, info, notice)" .
"VALUES('{$short_problem}', '{$full_problem}', '{$info}', '{$notice}');";
mysql_query($insert_sql);
exit('<meta http-equiv="refresh" content="0; url=../index.php" />');
?>