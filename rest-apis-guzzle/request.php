<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$response = $client->get(
    'posts/1'
);
$response = $client->get(
    'posts/2'
);
$response = $client->get(
    'comments/1'
);
$response = $client->get(
    'https://httpbin.org/ip'
);

echo $response->getStatusCode() . "</ br>";
echo $response->getBody() . "</ br>";

echo "<pre>";
var_dump($response);
echo "</pre>";