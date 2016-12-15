<?php
namespace Mkindrat\Jokes;

class OpenJokesApi 
{
  const END_POINT = 'http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list';
  private $http; 
  public function __construct($http)
  {
     $this->http = $http;
  }  

  public function getRandomJoke()
  {
    $jokeUrl = sprintf(
      '%s',
      self::END_POINT
    );

    $joke = json_decode(
      $this->http->request('GET', $jokeUrl)->getBody(),
      true
    );
    
    return $joke[rand(0,9)]['content'];
  }
}
 
