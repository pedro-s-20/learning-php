<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

echo $response->getStatusCode() . "</ br>";
echo $response->getBody() . "</ br>";

echo "<pre>";
var_dump($response);
echo "</pre>";