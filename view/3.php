<?php
require_once 'E:\ospanel\domains\Pogoda.com123\model\recaptchalib.php';
?>

<?php
 //секретный ключ
$secret = "6LfhtnwUAAAAAH2oXKMjIhsQ-fp-8i_QaRIQrk_L";
//ответ
$response = null;
//проверка секретного ключа
$reCaptcha = new ReCaptcha($secret);
 
if (!empty($_POST)) {
 
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            
            $_POST["g-recaptcha-response"]
        );
    }
 
    if ($response != null && $response->success) {
        echo "Все хорошо.";
    } else {
        echo "Вы точно человек?";
    }
 
}
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
     <title>Оставить фидбек</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>




<form method="POST" class="form-inline">
	<p class="text-center"><font size="5" face="Comic sans MS"><b style="color: #000000"><strong >Тут вы можете оставить ваш фидбек:</strong></b></font></p>
<br>
  <div class="form-group">
<strong>Email:</strong>
<input class="form-control" type="email" name="feedmail" autocomplete="of" placeholder="введите ваш емейл" required>
</div>
<br>
<div class="form-group">
<strong>Name:</strong>
<input class="form-control" type="text" name="feedname" autocomplete="of" placeholder="ведите ваше имя" required><br><br>
</div>
<br>
<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #000000">Feedback</b></font></p>
<p class="text-center"><textarea  name="feedtext" autocomplete="of" placeholder="Ваш фидбек" cols="180" rows="20" required></textarea></p>
<br>
<div class="g-recaptcha" data-sitekey="6LfhtnwUAAAAAEKMlYLYPX9f0iEk2gmryO3gCZ6q"></div>
<p class="text-center"><button class="btn btn-primary" type="sumbit" name="feedsumbit">Оставить</button></p>
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
require_once 'E:\ospanel\domains\Pogoda.com123\control\feeda.php';
?>