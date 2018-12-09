  <?php
$connect=mysql_connect('localhost','pogoda123451','240500240500','pogoda.com');
mysql_select_db('db_pogoda123451');
 mysql_query("INSERT INTO feedbacks (`Name`,`Email`,`Feedback`) VALUES ('$fname','$fmail','$ftext')") or die(mysql_error());
