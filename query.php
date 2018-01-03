<?php require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$res = $client->request(
  'GET',
  'http://jsonplaceholder.typicode.com/posts',
  [
    'query' => [
      'userId' => 3
    ]
  ]
);

// var_dump($res);
echo $res->getBody();
