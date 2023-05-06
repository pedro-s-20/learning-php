<?php

require 'vendor/autoload.php';
use GuzzleHttp\Psr7\Request;

$request = new Request('GET', 'http://jsonplaceholder.typicode.com/posts/1');
echo "<pre>";
echo $request->getUri() . "</ br>";
echo $request->getUri()->getScheme() . "</ br>";
echo $request->getUri()->getPort() . "</ br>";
echo $request->getUri()->getHost() . "</ br>";
echo $request->getUri()->getPath() . "</ br>";
echo "</pre>";