<meta charset="utf-8">
<?php
$url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";

$secret_key = '6LcLAn8UAAAAAITCV6qBR6UocPyvSeltqa6uBfoI';

$query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
$r = $_POST['g-recaptcha-response'];
$data = json_decode(file_get_contents($query));
$fmail = $_POST['feedmail'];
$fname = $_POST['feedname'];
$ftext = $_POST['feedtext'];
require_once '/www/vhosts/107584/pogoda1234567.ru/model/feedd.php';
echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #000000"><strong>"Vash otziv uspeshno prinyat!"</strong></b></font></p>';

?>