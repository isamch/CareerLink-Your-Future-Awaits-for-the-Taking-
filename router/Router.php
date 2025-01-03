<?php 

namespace Router;

use MyApp\controllers\NotFoundController;

class Router
{

  private $routes = [];

  // public function diplay(){
  //   return $this->routes;
  // }

  public function addrout($route , $routemethod) {
    
    $this->routes[$route] = $routemethod;
  }



  public function routecheck($route) {

    $route = str_replace('/testautoloadcomposer/public' , '' , $route);
    $route = str_replace('index.php/' , '' , $route);
    $route = strtok($route , '?');

    echo 'rout in handler : ' . $route;

    if (isset($this->routes[$route])) {
      call_user_func($this->routes[$route]);
    }else{
      echo 'page 404';
      $notfnd = new NotFoundController();
      $notfnd->notfound();
    
    }
 

  }


}
















