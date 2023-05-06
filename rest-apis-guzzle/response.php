<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

echo $response->getStatusCode() . "</ br>";

$body = $response->getBody();
$string = $body->getContents();
$json = json_decode($string);

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/users/' . $json->userId
);

echo $response->getStatusCode();
echo $response->getReasonPhrase();
if($response->getStatusCode() != 200 ){
    echo "Failure";
}

echo "<pre>";
var_dump(json_decode($response->getBody()));
echo "</pre>";