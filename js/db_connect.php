<?php
// defined('myeshop') or die('Доступ запрещён!');
$db_host		= "localhost";
$db_user		= "admin";
$db_pass		= "123456";
$db_database	= "db_shop"; 

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_database);
$mysqli->query ("SET NAMES 'utf8'"); 

/*
$link = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_database,$link) or die("Нет соединения с БД ".mysql_error());
mysql_query("SET names cp1251"); // UTF-8 когда переносим сайт в и-нет  */
?>
