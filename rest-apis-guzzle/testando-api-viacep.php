<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$base_url = 'https://viacep.com.br/ws/';

$value = '01001000';

$response = $client->request(
    'GET', $base_url . $value . '/json/'
);

$info = $response->getBody();
$info = json_decode($info);
echo "Logradouro: " . $info->logradouro;