<?php
$host = 'localhost';
$user = 'root'; 
$pass = '';
$dbname = 'sms';
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
$dbselect = mysql_select_db($dbname);
//test
?>