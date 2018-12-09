<?php
session_start();
$connect=mysql_connect('localhost','pogoda123451','240500240500','pogoda.com');
mysql_select_db('db_pogoda123451');
unset($_SESSION['susername']);
require_once 'view/1(1).php';
?>