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

  public function Connection()
  {

    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
    $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // try {
    //   $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
    //   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // هذه لتمكين الأخطاء
    //   $this->conn->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
    //   $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // } catch (PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    // }

    return $this->conn;

  }
}
