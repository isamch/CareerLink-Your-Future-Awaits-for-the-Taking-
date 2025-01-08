<?php


namespace MyApp\controllers;
use MyApp\controllers\SessionController;

class LandingepageController
{
  
  public function landingepage() {

    SessionController::checksesession('user', 'home');
    $title = 'Welcome | landing page';
    include '../App/view/landingpage.php';

  }

  // private function includeview(){

  // }

}


