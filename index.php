<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$ip1=$_SERVER['HTTP_X_FORWARDED_FOR'];
$connect=mysql_connect('localhost','pogoda123451','240500240500','pogoda.com');
mysql_select_db('db_pogoda123451');
unset($_SESSION['susername']);
$connect=mysql_connect('localhost','pogoda123451','240500240500','pogoda.com');
mysql_select_db('db_pogoda123451');
 mysql_query("INSERT INTO IPha (`IP1`) VALUES ('$ip')") or die(mysql_error());
require_once 'view/1(1).php';
?>