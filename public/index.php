<?php 

// echo 'start';

session_start();

// session_unset();

require_once '../vendor/autoload.php';

// use :
use Router\Router;
use Pub\Application;


// router class :
$router = new Router();

$routes = [
  '/' => ['LandingepageController', 'landingepage'],
  '/home' => ['HomeController', 'home'],
  '/about' => ['AboutController', 'about'],
  '/login' => ['AuthController', 'loginpage'],
  '/register' => ['AuthController', 'registerpage'],
  '/dashboard' =>['DashboardController', 'dashboardpage'],
  '/dashboard' =>['DashboardController', 'dashboardpage'],
  
  '/search' =>['PostesController', 'search'],
  '/logout' =>['AuthController', 'logout']

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