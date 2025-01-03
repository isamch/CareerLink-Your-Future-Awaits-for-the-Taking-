<?php


namespace MyApp\controllers;

use MyApp\Model\Auth;
use MyApp\controllers\SessionController;

class AuthController
{

  public function loginpage()
  {

    // if (isset($_SESSION['user'])) {
    //   header('Location: /brief10/public/index.php/home');
    //   exit;
    // }

    SessionController::checksesession('user', 'home');
    $title = 'Login | page';
    include '../App/view/login.php';
  }

  public function registerpage()
  {
    if (isset($_SESSION['user'])) {
        header('Location: /brief10/public/index.php/home');

      exit;
    }
    $title = 'Refister | page';
    include '../App/view/register.php';
  }




  public function register()
  {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
      header('Location: /brief10/public/index.php/register');
      exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header('Location: /brief10/public/index.php/register');
      exit;
    }


    if (strlen($password) < 8) {
      header('Location: /brief10/public/index.php/register');
      exit;
    }

    if (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
      header('Location: /brief10/public/index.php/register');
      exit;
    }


    // after validation ;
    $authregister = new Auth();

    if ($authregister->registermodel($username, $email, $password)) {
      
      header('Location: /brief10/public/index.php/login');
      exit;
    } else {

      echo 'email exist';

    }
    
  }




  public function login()
  {

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
      header('Location: /brief10/public/index.php/login');
      exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header('Location: /brief10/public/index.php/login');
      exit;
    }


    if (strlen($password) < 8) {
      header('Location: /brief10/public/index.php/login');
      exit;
    }

    if (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
      header('Location: /brief10/public/index.php/login');
      exit;
    }


    
    // send data to model login :
    $authloging = new Auth();
    
    if ($result = $authloging->loginmodel($email, $password)) {
      
      // dump($result);

      if(password_verify($password, $result['password']) || $password == $result['password']){
        $_SESSION['user'] = $result;
        header('Location: /brief10/public/index.php/home');
        exit; 
      }else{
        header('Location: /brief10/public/index.php/login');
        exit;
      }

    }else{
      echo 'user  not found';
      header('Location: /brief10/public/index.php/login');
      exit;
    }


  }

}
