<?php

namespace MyApp\Model;

use MyApp\Model\dbh;
use \PDO;



class Category
{

  private $conn;

  public function __construct()
  {
    $this->conn = new dbh();
  }


  public function getallcategory() {
    $query = "SELECT * FROM categories;";

    $stmt = $this->conn->Connection()->query($query);
    return $stmt->fetchAll();

  }


}

