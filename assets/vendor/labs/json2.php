<?php

function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$url = 'http://localhost/trikphp/json.php';
$data = curl($url);
$data = json_decode($data,true);
print_r($data);
?>