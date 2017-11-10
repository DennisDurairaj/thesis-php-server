<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/api/fibonacci', function (Request $request, Response $response) {
  $x = 0;    
  $y = 1;
  $num = 1400; 
  
  while($num>=0)    
  {    
      $z = $x + $y;         
      $x=$y;       
      $y=$z;
      $num--;
  } 

  return $response->withJson($x);
});
$app->run();
