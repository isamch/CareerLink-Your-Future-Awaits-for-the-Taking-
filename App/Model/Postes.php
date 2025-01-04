<?php

namespace MyApp\Model;

use MyApp\Model\dbh;
use \PDO;



class Postes
{

  private $conn;

  public function __construct()
  {
    $this->conn = new dbh();
  }


  public function insertPost($category_id, $content, $url)
  {
      $query = "INSERT INTO postes (category_id, content, url) VALUES (:category_id, :content, :url)";
      $stmt = $this->conn->Connection()->prepare($query);
      $stmt->bindParam(':category_id', $category_id);
      $stmt->bindParam(':content', $content);
      $stmt->bindParam(':url', $url);

      if ($stmt->execute()) {
        return $this->conn->Connection()->lastInsertId();
      }

      return false;
  }


  public function getallpostes() {
    $query = "SELECT postes.id, postes.title, postes.url, categories.name, postes.content, GROUP_CONCAT(tags.name) AS tags FROM postes 
              INNER JOIN categories ON category_id = categories.id
              INNER JOIN post_tags ON postes.id = post_tags.post_id
              INNER JOIN tags ON post_tags.tag_id = tags.id
              GROUP BY postes.id;";

    $stmt = $this->conn->Connection()->query($query);
    return $stmt->fetchAll();

  }


}

