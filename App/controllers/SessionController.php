<?php

namespace MyApp\controllers;

class SessionController
{

    public static function checksesession($sesname, $redirectpage)
    {
  
      if (isset($_SESSION[$sesname])) {
        header("Location: /brief10/public/index.php/$redirectpage");
        exit;
      
      }
  
      }
}
