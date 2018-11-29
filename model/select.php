	<?php
	$connect=mysql_connect('localhost','root','','pogoda.com');
    mysql_select_db('pogoda.com');
	$tlogin=$_POST['inlogin'];
	$tpass=$_POST['inpass'];
    $data=mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE `Email`='$tlogin'AND `Password`='$tpass'"));