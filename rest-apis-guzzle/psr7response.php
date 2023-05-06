<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

echo $response->getStatusCode() . "</ br>";
echo $response->getReasonPhrase() . "</ br>";

$response = $response->withStatus(418);
echo $response->getStatusCode() . "</ br>";
echo $response->getReasonPhrase() . "</ br>";

$response = $response->withStatus(419, "Coffee is better than tea.");
echo $response->getStatusCode() . "</ br>";
echo $response->getReasonPhrase() . "</ br>";