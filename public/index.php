<?php 

echo 'start';

require_once '../vendor/autoload.php';

// use :
use Router\Router;
use Pub\Application;


// router class :
$router = new Router();

$routes = [
  '/' => ['LandingepageController', 'landingepage'],
  '/about' => ['AboutController', 'about'],
  '/login' => ['AuthController', 'loginpage'],
  '/register' => ['AuthController', 'registerpage'],
];


foreach ($routes as $key => $values) {
  $values_1 = 'MyApp\\controllers\\'.$values[0];
  $router->addrout($key, [new $values_1(), $values[1]]);
}


// $router->routecheck($_SERVER['REQUEST_URI']);

// app :
$myapp = new Application();

$myapp->run($router);

// dump($_SERVER['REQUEST_URI']);

// // "/testautoloadcomposer/public/"

// dump($router->diplay());

// dump($_SERVER['DOCUMENT_ROOT']);