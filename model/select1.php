<?php
$connect=mysql_connect('localhost','root','','pogoda.com');
$select_db=mysql_select_db('pogoda.com');
$data=mysql_query("SELECT * FROM feedbacks");
require_once 'E:\ospanel\domains\Pogoda.com123\control\feedback.php';