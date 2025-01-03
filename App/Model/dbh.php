<?php

namespace MyApp\Model;

use PDO;

class dbh
{
  
  private $host = 'localhost';
  private $db_name = 'testauth';
  private $username = 'root';
  private $password = '';
  private $conn;

  public function Connection()
  {

    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
    $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $this->conn;

  }
}
