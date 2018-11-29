 <?php
 $connect=mysql_connect('localhost','root','','pogoda.com');
mysql_select_db('pogoda.com');
 mysql_query("INSERT INTO feedbacks (`Name`,`Email`,`Feedback`) VALUES ('$fname','$fmail','$ftext')") or die(mysql_error());
