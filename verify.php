<?php
$access_token = 'xdv18oRM+cwfc/uWvGbitTkwTYaEBkeQM8oDyNdiTnCZQffRqA0pcGQvXFD0b9WstkF6k/hdTGKROO09FpIf6XkcUe9uP2l2V4pNQmyeL1N7PtXMWg51JV1k3jDi9ZWx+YktaTRtXTcrctvr/QsF4wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
