    <?php
	require_once 'E:\ospanel\domains\Pogoda.com123\model\select.php';
    if($data)
    {
    	echo '<i class="glyphicon glyphicon-ok"><font size="3" face="Comic sans MS"><b style="color: #FFFFFF" class="text-center"><strong>'."Авторизация прошла успешно".'</strong></b></font></i>';
        $_SESSION['susername'] = $tlogin;
    	$check=true;
    }
    else
    {
    	echo '<p class="text-center"><font size="3" face="Comic sans MS"><b style="color: #FFFFFF"><strong>'."Пользователь не найден".'</strong></b></font></p>';
    	$check=false;
    }
    if(isset($_SESSION['susername']))
    {    
    echo "пользователь авторизован";
    
    	require_once 'view/1.php';
    }
    else
    {
    	
    }
