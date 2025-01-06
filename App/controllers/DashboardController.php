<?php


namespace MyApp\controllers;
use MyApp\controllers\SessionController;

class DashboardController
{
  
  public function dashboardpage() {

    SessionController::checksesession('user', 'login' , false);

    SessionController::sessionDeniedRole('user', 'home', 'client');

    $title = 'Welcome | dashboard page';
    include '../App/view/dashboard.php';

  }

  // private function includeview(){

  // }

}


