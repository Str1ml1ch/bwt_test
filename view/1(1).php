<meta charset="utf-8">
<style>
body{
 background:  url(images/register.jpg);
 background-attachment: fixed;
  background-size: 110%;
}
</style>
    <head>
      
 <link rel="shortcut icon" href="/images/123.png" type="image/png">

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
    <label><font size="4"><b style="color: #FFFFFF">Вход:</b></font></label>
  </div>
  <div class="form-group">
  <!--  <div class=""> <font size="4" face="Comic sans MS" ><b style="color: #000000"  ><strong  >Вход:</strong></b></font></div> -->
<input class="form-control" type="email" name="inlogin" placeholder="введите вашу ел.почту" autocomplete="of" required>
</div>
<div class="form-group">
<input class="form-control" type="password" name="inpass" placeholder="введите ваш пароль" autocomplete="of" required="">
</div>
<button class="btn btn-primary" type="submit" name="logining">login</button>
 <br>
<?php

if(isset($_POST['logining']))
{
  require_once 'control/checklogin.php';
}
?>
</form>


</div>



</div>


</nav>


<div class="text-left">

<form method="POST" class="form-inline">
  <div class="form-group">
<p class="text-left"><font size="7" face = "Comic sans MS"><b style="color: #000000"><strong>Регистрация:</strong></b></font></p>
</div>
<br>
<!-- форма -->
<div class="form-group">

<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Name:</strong></b></font></p><!-- ИМЯ -->
<input class="form-control" type ="username" name="username" placeholder="введите ваше имя" autocomplete="of"  required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Surname:</strong></b></font></p><!-- Фамилия -->
<input class="form-control" type ="login" name="login" placeholder="введите вашу фамилию" autocomplete="of" required>
</div>
<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Email:</strong></b></font></p><!-- мыло -->
<input class="form-control" type ="email" name="mail" placeholder="введите ваш имейл" autocomplete="of" required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Gender:</strong></b></font></p><!-- пол -->
<select class="form-control" name="gender">
<option>Not chose</option>
<option >Man</option>
<option >Woman</option>
</select></p>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Birthday:</strong></b></font></p><!-- день рожд -->
<select class="form-control" name ="bday">
	<option>day</option>
<?php
    for($i=1; $i<=31; $i++)
    {
        echo '<option>' .$i. '</option>';
    }
     ?>
 </select>

<select name="bmounth" class="form-control"><!-- месяц рожд -->
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


<select class="form-control" name="byear"><!-- год рожд -->
	<option>year</option>
	<?php
    for($p=1900;$p<=2018;$p++)
    	echo '<option>'.$p.'</option>';
	?>
</select></p>
 </div>

<br>


<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Password:</strong></b></font></p><!-- пароль -->
<input class="form-control" type ="password" placeholder="введите ваш пароль" name="password1" autocomplete="of" "required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Repeat password:</strong></b></font></p><!-- повторить пароль -->
<input class="form-control" type ="password" name="retrypassword" autocomplete="of" placeholder="повторите ваш пароль"  required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br><br>

<div class="form-group">
  <p class="text-left"><button class="btn btn-primary" type ="submit" name="submit_value=">Register</button></p><!-- кнопка -->
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

