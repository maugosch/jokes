<?php
require_once __DIR__.'/vendor/autoload.php';
use Mkindrat\Jokes\OpenJokesApi;

$http = new \GuzzleHttp\Client();
$api = new OpenJokesApi($http);
$joke = $api->getRandomJoke();

echo sprintf(
  'Joke is super awesome as follows: %s \n',
  $joke
);
 
