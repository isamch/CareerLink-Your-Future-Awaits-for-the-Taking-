<?php


namespace MyApp\controllers;
use MyApp\controllers\SessionController;
use MyApp\controllers\PostesController;
use MyApp\controllers\CategoryController;

class HomeController
{
  
  public function home() {

    SessionController::checksesession('user', 'login' , false);


    $postesController = new PostesController();
    $posts = $postesController->displayAllPostes();

    $categoryController = new CategoryController();
    $category = $categoryController->displayAllCategory();
  
    $title = 'home page';
    include '../App/view/home.php';

  }

  // private function includeview(){

  // }

}


