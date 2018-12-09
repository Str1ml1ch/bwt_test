<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>РџРѕРіРѕРґР° РІ Р—Рџ</title>
    <!-- Bootstrap -->
 <link rel="shortcut icon" href="images/321.png" type="image/png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>
   <body>


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</div>
</body>
</style>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body{
 background:  url(images/pogoda.jpg);
 background-attachment: fixed;
  background-size: 100%;
}
</style>
<?php
session_start();
$error="You are not user of this site, please go to the registration page and loggining or registration";
if(isset($_SESSION['susername']))
{
 function Parse($p1, $p2, $p3)
 {
    $num1 = strpos($p1, $p2);
   if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
 
$String = file_get_contents('http://www.gismeteo.ua/city/daily/5093/');
echo '<p class="text-center"><font size="5" face="Comic sans MS"><b style="color: #000000"><strong>'."РџРѕРіРѕРґР° РІ Р—Р°РїРѕСЂРѕР¶СЊРµ:".'</strong></b></font></p>';
 $Pars = Parse($String, '<div class="scity" xmlns:v="http://rdf.data-vocabulary.org/#">', '-->');
 echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #000000"><strong>'.$Pars.'</strong></b></font></p>';
echo '<div class="text-left"><font size="3" face="Comic sans MS"><b style="color: #800080"><strong>'.Hello .'</strong></b></font>';
echo" ";
echo '<font size="4" face="Comic sans MS"><b style="color: #008000"><strong>'.$_SESSION['susername'].'</strong></b></font></div><br><br>';
}
else 
{
echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #FF0000"><strong>'.$error.'</strong></b></font></p>';
}
