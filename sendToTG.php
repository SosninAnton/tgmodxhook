<?php
$token = $modx->getOption('tg_token');
$chat_id =  $modx->getOption('tg_chat'); 


$queryData = http_build_query(array(
    'chat_id' => $chat_id,
    'text' => $message,
    'parse_mode' => 'HTML'
));

$queryUrl = "https://api.telegram.org/bot{$token}/sendMessage?".$queryData;


$curl = curl_init($queryUrl);

curl_setopt_array($curl, array(
CURLOPT_POST => 1,
CURLOPT_HEADER => 0,
CURLOPT_RETURNTRANSFER => 1,

));

$result = curl_exec($curl);
curl_close($curl);

return $result;
