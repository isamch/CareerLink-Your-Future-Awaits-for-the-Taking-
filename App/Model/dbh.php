<?php

namespace MyApp\Model;

use PDO;
use PDOException;


class dbh
{

  private $host = 'localhost';
  private $db_name = 'testauth';
  private $username = 'root';
  private $password = '';
  private $conn;

  private static $instancePdo = null;

  public function Connection()
  {

    // $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
    // $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    if (self::$instancePdo === null) {

      self::$instancePdo = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
      self::$instancePdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }

    

    return self::$instancePdo;

  }
}
