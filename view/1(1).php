
<meta charset="utf-8">
<style>
body{
 background:  url(images/register.jpg);
 background-attachment: fixed;
  background-size: 110%;
}
</style>
    <head>
      
 <link rel="shortcut icon" href="pogoda1234567.ru/images/123.png" type="image/png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Page of registration</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>
<body>



<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="text-right">
<form method="POST" class="form-inline">
 <div class="form-group">
<div class="text-left">
<?php
require_once 'view/1.php';
?>
</div>
</div>
 <label><font size="4"><b style="color: #FFFFFF">Р’С…РѕРґ:</b></font></label>
<div class="form-group">
  <!--  <div class=""> <font size="4" face="Comic sans MS" ><b style="color: #000000"  ><strong  >Р’С…РѕРґ:</strong></b></font></div> -->
<input class="form-control" type="email" name="inlogin" placeholder="РІРІРµРґРёС‚Рµ РІР°С€Сѓ РµР».РїРѕС‡С‚Сѓ" autocomplete="of" required>
</div>
<div class="form-group">
<input class="form-control" type="password" name="inpass" placeholder="РІРІРµРґРёС‚Рµ РІР°С€ РїР°СЂРѕР»СЊ" autocomplete="of" required="">
</div>
<button class="btn btn-primary" type="submit" name="logining">login</button>
 <br>
<?php

if(isset($_POST['logining']))
{
  require_once 'control/checklogin.php';
}
?>
</div>
</form>





</div>
</nav>

<div class="text-left">

<form method="POST" class="form-inline">
  <div class="form-group">
<p class="text-left"><font size="7" face = "Comic sans MS"><b style="color: #000000"><strong>Р РµРіРёСЃС‚СЂР°С†РёСЏ:</strong></b></font></p>
</div>
<br>
<!-- С„РѕСЂРјР° -->
<div class="form-group">

<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Name:</strong></b></font></p><!-- РРњРЇ -->
<input class="form-control" type ="username" name="username" placeholder="РІРІРµРґРёС‚Рµ РІР°С€Рµ РёРјСЏ" autocomplete="of"  required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Surname:</strong></b></font></p><!-- Р¤Р°РјРёР»РёСЏ -->
<input class="form-control" type ="login" name="login" placeholder="РІРІРµРґРёС‚Рµ РІР°С€Сѓ С„Р°РјРёР»РёСЋ" autocomplete="of" required>
</div>
<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Email:</strong></b></font></p><!-- РјС‹Р»Рѕ -->
<input class="form-control" type ="email" name="mail" placeholder="РІРІРµРґРёС‚Рµ РІР°С€ РёРјРµР№Р»" autocomplete="of" required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Gender:</strong></b></font></p><!-- РїРѕР» -->
<select class="form-control" name="gender">
<option>Not chose</option>
<option >Man</option>
<option >Woman</option>
</select></p>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Birthday:</strong></b></font></p><!-- РґРµРЅСЊ СЂРѕР¶Рґ -->
<select class="form-control" name ="bday">
	<option>day</option>
<?php
    for($i=1; $i<=31; $i++)
    {
        echo '<option>' .$i. '</option>';
    }
     ?>
 </select>

<select name="bmounth" class="form-control"><!-- РјРµСЃСЏС† СЂРѕР¶Рґ -->
<option>Mounth</option>
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option>
</select>


<select class="form-control" name="byear"><!-- РіРѕРґ СЂРѕР¶Рґ -->
	<option>year</option>
	<?php
    for($p=1900;$p<=2018;$p++)
    	echo '<option>'.$p.'</option>';
	?>
</select></p>
 </div>

<br>


<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Password:</strong></b></font></p><!-- РїР°СЂРѕР»СЊ -->
<input class="form-control" type ="password" placeholder="РІРІРµРґРёС‚Рµ РІР°С€ РїР°СЂРѕР»СЊ" name="password1" autocomplete="of" "required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Repeat password:</strong></b></font></p><!-- РїРѕРІС‚РѕСЂРёС‚СЊ РїР°СЂРѕР»СЊ -->
<input class="form-control" type ="password" name="retrypassword" autocomplete="of" placeholder="РїРѕРІС‚РѕСЂРёС‚Рµ РІР°С€ РїР°СЂРѕР»СЊ"  required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br><br>

<div class="form-group">
  <p class="text-left"><button class="btn btn-primary" type ="submit" name="submit_value=">Register</button></p><!-- РєРЅРѕРїРєР° -->
  </div>


<?php
if(isset($_POST['submit_value=']))
{
    require_once 'control/1page.php';
    echo $b;
}
?>


</div>
</form> 





  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</div>
</body>


