<?php

$url = 'https://api.projectoxford.ai/vision/v1.0/analyze?visualFeatures=Categories&language=en HTTP/1.1';
$data = array('url' => 'http://example.com/images/test.jpg');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);

?>
