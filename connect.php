﻿
<?php

$dbhost = 127.0.0.1;
$dbuser = 'root';
$dbpass = '';
$db = 'orderup';

$conn = mysql_connect($dbhost , $dbuser , $dbpass);
mysql_select_db($db);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
?>
