<?php
$cfg_server="localhost";
$cfg_database="websms";
$cfg_username="root";
$cfg_password="";

$conn = mysql_connect($cfg_server, $cfg_username, $cfg_password) or die(mysql_error());
mysql_select_db($cfg_database);
?>

