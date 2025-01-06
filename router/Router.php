<?php 

namespace Router;

use MyApp\controllers\NotFoundController;
use MyApp\controllers\AuthController;
use MyApp\controllers\PostesController;

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

    $route = str_replace('/brief10/public' , '' , $route);
    $route = str_replace('/BRIEF10/public' , '' , $route);
    $route = str_replace('index.php/' , '' , $route);
    $route = str_replace('index.php' , '' , $route);
    $route = strtok($route , '?');

 

    echo 'rout in handler : ' . $route . " ";

    if (isset($this->routes[$route])) {
      
      $newregister = new AuthController;
      $newpost = new PostesController;

      // check for post method :
      if ( isset($_POST['register']) ) {
        echo 'pots register method';
        $newregister->register();
      }

      if ( isset($_POST['login']) ) {
        echo 'pots login method';
        $newregister->login();
      }

      if ( isset($_POST['post']) ) {
        echo ' pots post method ';
        $newpost->addpostes();
      }

      if ( isset($_POST['deleteposte']) ) {
        echo ' delete post post method ';
        $newpost->deletepostes();
      }
      
      if ( isset($_POST['restoreposte']) ) {
        echo ' restore post post method ';
        $newpost->restorepostes();
      }
      


      call_user_func($this->routes[$route]);

    }else{
      echo 'page 404';
      $notfnd = new NotFoundController();
      $notfnd->notfound();
    
    }
 

  }


}
















