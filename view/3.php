<head>
<link rel="shortcut icon" href="images/213.png" type="image/png">
</head>
<?php

require_once '/www/vhosts/107584/pogoda1234567.ru/model/recaptchalib.php';
?>

<?php
 //СЃРµРєСЂРµС‚РЅС‹Р№ РєР»СЋС‡
$secret = "6LcLAn8UAAAAAITCV6qBR6UocPyvSeltqa6uBfoI";
//РѕС‚РІРµС‚
$response = null;
//РїСЂРѕРІРµСЂРєР° СЃРµРєСЂРµС‚РЅРѕРіРѕ РєР»СЋС‡Р°
?>


<!DOCTYPE html>
<html>
    <head>
       <link rel="shortcut icon" href="images/213.png" type="image/png">
      <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
     <body>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>РћСЃС‚Р°РІРёС‚СЊ С„РёРґР±РµРє</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>




<form method="POST" class="form-inline">
	<p class="text-center"><font size="5" face="Comic sans MS"><b style="color: #000000"><strong >РўСѓС‚ РІС‹ РјРѕР¶РµС‚Рµ РѕСЃС‚Р°РІРёС‚СЊ РІР°С€ С„РёРґР±РµРє:</strong></b></font></p>
<br>
  <div class="form-group">
<strong>Email:</strong>
<input class="form-control" type="email" name="feedmail" autocomplete="of" placeholder="РІРІРµРґРёС‚Рµ РІР°С€ РµРјРµР№Р»" required>
</div>
<br>
<div class="form-group">
<strong>Name:</strong>
<input class="form-control" type="text" name="feedname" autocomplete="of" placeholder="РІРµРґРёС‚Рµ РІР°С€Рµ РёРјСЏ" required><br><br>
</div>
<br>
<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #000000">Feedback</b></font></p>
<p class="text-center"><textarea  name="feedtext" autocomplete="of" placeholder="Р’Р°С€ С„РёРґР±РµРє" cols="180" rows="20" required></textarea></p>
<br>
<div class="g-recaptcha" data-sitekey="6LcLAn8UAAAAAPw88kPtICf0bbl66-tB6yxwLdy5"></div>
<p class="text-center"><button class="btn btn-primary" type="sumbit" name="feedsumbit">РћСЃС‚Р°РІРёС‚СЊ</button></p>
</form>






    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <body>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
<style>
body{
 background:  url(images/feed.jpg);
 background-attachment: fixed;
  background-size: 120%;
}
</style>
<?php
if(isset($_POST['feedsumbit']))
{
require_once '/www/vhosts/107584/pogoda1234567.ru/control/feeda.php';
}
else
{

}
?>