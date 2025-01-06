<?php

namespace MyApp\Model;

use MyApp\Model\dbh;
use \PDO;



class Tags
{

  private $conn;

  public function __construct()
  {
    $this->conn = new dbh();
  }




  public function getalltags()
  {
    $query = "SELECT postes.id, postes.title, postes.url, categories.name, postes.content, GROUP_CONCAT(tags.name) AS tags FROM postes 
              INNER JOIN categories ON category_id = categories.id
              INNER JOIN post_tags ON postes.id = post_tags.post_id
              INNER JOIN tags ON post_tags.tag_id = tags.id
              GROUP BY postes.id;";

    $stmt = $this->conn->Connection()->query($query);
    return $stmt->fetchAll();
  }



  public function gettagidbyname($name)
  {
    $query = "SELECT id FROM tags WHERE name = :name";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->execute();

    return $stmt->fetchColumn();
  }


  public function inserttag($name)
  {
    $query = "INSERT INTO tags (name) VALUES (:name)";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':name', $name);

    if ($stmt->execute()) {
      // $lastidtag = $this->gettagidbyname($name);
      $lastidtag = $this->conn->Connection()->lastInsertId();
      return $lastidtag;
    }

    return false;
  }

}
