<?php
//Устанавливаем все параметры по умолчанию
$params = ['name' => '','phone' => '','mail' => '','message' => '','question' => '','relative_question' => ''];
$params = array_merge($params,$hook->getValues());
$message ='<b>'.$hook->formit->config['emailSubject'].'  </b> '.PHP_EOL .  $modx->getChunk($hook->formit->config['emailTpl'], $params);
$modx->runSnippet('sendToTG' , ['message' => $message]);
return true;
