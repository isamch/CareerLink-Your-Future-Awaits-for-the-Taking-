<?php


namespace MyApp\controllers;
use MyApp\controllers\SessionController;

class HomeController
{
  
  public function home() {

    SessionController::checksesession('user', 'login' , false);
    $title = 'home page';
    include '../App/view/home.php';


  }

  // private function includeview(){

  // }

}


