<?php

$url = 'https://api.projectoxford.ai/vision/v1.0/analyze?visualFeatures=Categories&language=en';

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);

curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json',
    'Ocp-Apim-Subscription-Key: 7de0d688-ff48-4516-9209-7a45e179bbc6',
    'url: http://www.lessons4living.com/images/penclchk.gif'
));

$result = curl_exec($cURL);

curl_close($cURL);

print_r($result);

?>
