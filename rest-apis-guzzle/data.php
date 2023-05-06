<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$response = $client->request(
    'POST',
    'http://jsonplaceholder.typicode.com/posts',
    ['json'=>[
        'title' => 'Guzzle and REST',
        'body' => 'Guzzle makes working with REST APIS easy',
        'userID' => 2,
    ],]
);

echo $response->getStatusCode() . "</ br>";
echo $response->getBody() . "</ br>";

echo "<pre>";
var_dump($response);
echo "</pre>";