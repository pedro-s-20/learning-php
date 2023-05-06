<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();
echo "<pre>";

try{
    $response = $client->request(
        'GET',
        'https://httpbin.org/status/503'
    );
}catch(\GuzzleHttp\Exception\ClientException $e){
    echo $e->getCode() . "\r\n";
    echo $e->getMessage() . "\r\n";
}

echo "</pre>";