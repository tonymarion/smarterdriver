<?php

$data = array('host'=>'api.projectoxford.ai','url'=>'http://www.lessons4living.com/images/penclchk.gif','Ocp-Apim-Subscription-Key'=>'7de0d688-ff48-4516-9209-7a45e179bbc6');
$data_json = json_encode($data);

$url = 'https://api.projectoxford.ai/vision/v1.0/analyze?visualFeatures=Categories&language=en';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);

var_dump($response);

curl_close($ch);

?>
