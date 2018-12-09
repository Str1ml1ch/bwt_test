<?php
session_start();
$name1=$_SESSION['susername'];
$error="You are not user of this site, please go to the registration page and logining or registration";
if(isset($_SESSION['susername']))
{
echo '<div class="text-left"><font size="5" face="Comic sans MS"><b style="color: #800080"><strong>'.Hello .'</strong></b></font>';
echo" ";
echo '<font size="6" face="Comic sans MS"><b style="color: #008000"><strong>'.$_SESSION['susername'].'</strong></b></font></div><br><br>';
while($result = mysql_fetch_array($data))
{
	echo "
	<div class='text-left'>
    <span class='badge'>
	в„–:$result[id]<br>
	Email:$result[Email]<br>
	Name:$result[Name]<br>
	Feedback:$result[Feedback]<br>
</span>
<br><br>
</div>
	";
}
}
else
{
echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #FF0000"><strong>'.$error.'</strong></b></font></p>';
}
?>