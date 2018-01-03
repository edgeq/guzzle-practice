<?php require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$res = $client->request(
  'POST',
  'http://jsonplaceholder.typicode.com/posts',
  [
    'json' => [
      'title' => 'Guzzle and REST',
      'body' => 'Guzzle makes working with REST APIs easy',
      'userId' => 2,
    ],
  ]
);

// var_dump($res);
echo $res->getBody();
