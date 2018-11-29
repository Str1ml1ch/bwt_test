 <?php
 mysql_query("INSERT INTO users (`Name`,`Surname`,`Email`,`Gender`,`Birthday`,`Birthmounth`,`Birthyear`,`password`) VALUES ('$username','$surname','$mail','$gender','$Birthday','$Birthmounth','$Birthyear','$rpassword')") or die(mysql_error());
