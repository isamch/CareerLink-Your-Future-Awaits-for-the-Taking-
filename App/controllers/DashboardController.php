<?php


namespace MyApp\controllers;
use MyApp\controllers\SessionController;
use MyApp\controllers\PostesController;
use MyApp\Model\Category; 

class DashboardController
{
  
  public function dashboardpage() {

    SessionController::checksesession('user', 'login' , false);

    SessionController::sessionDeniedRole('user', 'home', 'client');

    // get all data for dashboard here :

    $postes = (new PostesController)->displayAllPostes();

    $category = (new Category())->getallcategory();


    $title = 'Welcome | dashboard page';
    include '../App/view/dashboard.php';

  }

  // private function includeview(){

  // }

}


