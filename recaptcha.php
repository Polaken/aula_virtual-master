<?php 
if (isset($_POST["g-recaptcha-response"])&& $_POST["g-recaptcha-response"]) 
{
	var_dump($_POST);
	$secret="6LeWAQkUAAAAAMpn1S_XhFgkpKIuvd8TEb9-mA84";
	$ip = $_SERVER["REMOTE_ADDR"];
	$captcha = $_POST["g-recaptcha-response"];
	$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
	echo "<br>";
	var_dump($result);
	$array = json_decode($result,true);
	if ($array["success"]) 
	{
	
	}else {
		echo "Eres un robot";
	}
}
 ?>