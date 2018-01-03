<?php require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
  'GET',
  'http://jsonplaceholder.typicode.com/posts/1'
);

// var_dump($res);
echo $response->getStatusCode() . "\r\n";
echo $response->getReasonPhrase() . "\r\n";
//responses need to be reassigned since they are immutable.
$response = $response->withStatus(418);
echo $response->getStatusCode() . "\r\n";
echo $response->getReasonPhrase() . "\r\n";

$response = $response->withStatus(419, "Coffee is better than anything");
echo $response->getStatusCode() . "\r\n";
echo $response->getReasonPhrase() . "\r\n";
