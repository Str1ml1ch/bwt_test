		<?php
$connect=mysql_connect('localhost','pogoda123451','240500240500','pogoda.com');
mysql_select_db('db_pogoda123451');
	$tlogin=$_POST['inlogin'];
	$tpass=$_POST['inpass'];
    $data=mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE `Email`='$tlogin'AND `Password`='$tpass'"));