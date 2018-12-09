<?php
$connect=mysql_connect('localhost','pogoda123451','240500240500','pogoda.com');
mysql_select_db('db_pogoda123451');
$data=mysql_query("SELECT * FROM feedbacks");
require_once '/www/vhosts/107584/pogoda1234567.ru/control/feedback.php';