       <?php
session_start();
unset($_SESSION['susername']);
	require_once 'pogoda1234567.ru/model/select.php';
    if($data)
    {
    	echo '<i class="glyphicon glyphicon-ok"><font size="3" face="Comic sans MS"><b style="color: #FFFFFF" class="text-center"><strong>'."РђРІС‚РѕСЂРёР·Р°С†РёСЏ РїСЂРѕС€Р»Р° СѓСЃРїРµС€РЅРѕ".'</strong></b></font></i>';
        $_SESSION['susername'] = $tlogin;
    	$check=true;
    }
    else
    {
    	echo '<p class="text-center"><font size="3" face="Comic sans MS"><b style="color: #FFFFFF"><strong>'."РџРѕР»СЊР·РѕРІР°С‚РµР»СЊ РЅРµ РЅР°Р№РґРµРЅ".'</strong></b></font></p>';
    	$check=false;
    }    
     