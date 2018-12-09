		<?php
	$b="";
	$username=$_POST['username'];
	$surname=$_POST['login'];
	$mail=$_POST['mail'];
	$gender=$_POST['gender'];
	$pass=$_POST['password1'];
	$rpassword=$_POST['retrypassword'];
	$Birthday=$_POST['bday'];
	$Birthmounth=$_POST['bmounth'];
	$Birthyear=$_POST['byear'];
	if($_POST['bday']==="day")
	{
		$Birthday='NULL';
	}
	if($Birthmounth==="Mounth")
	{
		$Birthmounth='NULL';
	}
	if($gender==="Not chose")
	{
		$gender='NULL';
	}
	if($Birthday==="day")
	{
		$Birthday='NULL';
	}
	if($Birthyear==="year")
	{
		$Birthyear='NULL';
	}
	if($rpassword==$pass)
	{
    require_once 'model/baza.php';
    
    echo '<p class="text-center"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong>'."Р’С‹ СѓСЃРїРµС€РЅРѕ Р·Р°СЂРµРіРµСЃС‚СЂРёСЂРѕРІР°РЅС‹,С‚РµРїРµСЂСЊ Р°РІС‚РѕСЂРёР·РёСЂСѓР№С‚РµСЃСЊ".'</strong></b></font></p>';
	}
	else
	{
		echo '<p class="text-center"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong>'."РџР°СЂРѕР»Рё РЅРµ СЃРѕРІРїРѕРґР°СЋС‚,РїРѕРІС‚РѕСЂРёС‚Рµ РїРѕРїС‹С‚РєСѓ СЃРЅРѕРІР°".'</strong></b></font></p>';
}
