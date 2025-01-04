<?php

namespace MyApp\controllers;

class SessionController
{

  public static function checksesession($sesname, $redirectpage, $checkstatus = true)
  {

    if ($checkstatus && isset($_SESSION[$sesname])) {
      header("Location: /brief10/public/index.php/$redirectpage");
      exit;
    } elseif (!$checkstatus && !isset($_SESSION[$sesname])) {
      header("Location: /brief10/public/index.php/$redirectpage");
      exit;
    }
  }
}
