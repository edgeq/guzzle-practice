<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$res = $client->get(
  'posts/1'
);

// var_dump($res);
echo $res->getBody();

$res = $client->get(
  'posts/2'
);

// var_dump($res);
echo $res->getBody();

$res = $client->get(
  'comments/1'
);

// var_dump($res);
echo $res->getBody();

$res = $client->get(
  'https://httpbin.org/ip'
);

// var_dump($res);
echo $res->getBody();
