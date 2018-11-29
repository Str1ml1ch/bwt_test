<?php
while($result = mysql_fetch_array($data))
{
	echo "
	<div class='text-left'>
    <span class='badge'>
	№:$result[id]<br>
	Email:$result[Email]<br>
	Name:$result[Name]<br>
	Feedback:$result[Feedback]<br>
</span>
<br><br>
</div>
	";
}
?>