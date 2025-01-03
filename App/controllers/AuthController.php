<?php


namespace MyApp\controllers;

class AuthController
{
  
  public function loginpage() {
      $title = 'Login | page';
      include '../App/view/login.php';

  }
  
  public function registerpage() {

    $title = 'Refister | page';
    include '../App/view/register.php';
  }


  // private function includeview(){

  // }

}


