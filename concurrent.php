<?php require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$promise = $client->requestAsync(
  'GET',
  'http://jsonplaceholder.typicode.com/posts/1'
);

$promise2 = $client->requestAsync(
  'GET',
  'http://jsonplaceholder.typicode.com/posts/2'
);
//pushes the two get requests into a single array named $promises
$promises = [$promise, $promise2];
//Takes two or more promise results and handles them concurrently.
$results = GuzzleHttp\Promise\settle($promises)->wait();

foreach ($results as $result) {
    echo $result['value']->getBody();
}
