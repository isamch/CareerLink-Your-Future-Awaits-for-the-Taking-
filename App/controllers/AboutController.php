<?php


namespace MyApp\controllers;

class AboutController
{

  public function about() {

    SessionController::checksesession('user', 'login' , false);
    include '../App/view/about.php';
  
  }

}


