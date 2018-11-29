<?php
if(isset($_SESSION['susername']))    {
echo '<button type="button" class="btn btn-outline-primary"><a href="model/parse.php">'."Узнать погоду в городе Запорожье".'</a></button>';
echo '<button type="button" class="btn btn-outline-primary"><a href="view/3.php">'."Оставить фидбек".'</a></button>';
echo '<button type="button" class="btn btn-outline-primary"><a href="control/4a.php">'."Просмотреть фидбеки".'</a></button>';
}
else
{
	echo "Вы не зашли в свой аккаунт";
}