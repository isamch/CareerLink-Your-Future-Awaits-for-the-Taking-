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

  public function lastinsertid($category_id, $content, $url)
  {

    $query = "SELECT id FROM postes WHERE category_id = :category_id AND content = :content AND url = :url LIMIT 1";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':url', $url);

    $stmt->execute();

    $id = $stmt->fetchColumn();

    return $id;
  }


  public function insertPost($category_id, $content, $url)
  {


    $query = "INSERT INTO postes (category_id, content, url) VALUES (:category_id, :content, :url)";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':url', $url);

    if ($stmt->execute()) {

      $lastid = $this->conn->Connection()->lastInsertId();
      
      // $lastid = $this->lastinsertid($category_id, $content, $url);
      $_SESSION['err'] = $lastid;
      
      return $lastid;
    }

    return false;
  }


  public function getallpostes()
  {
    $query = "SELECT postes.id, postes.title, postes.url, users.username , categories.name, postes.content, GROUP_CONCAT(tags.name) AS tags FROM postes 
              LEFT JOIN categories ON category_id = categories.id
              LEFT JOIN post_tags ON postes.id = post_tags.post_id
              LEFT JOIN tags ON post_tags.tag_id = tags.id
              LEFT JOIN users ON users.id = postes.createduserid
              GROUP BY postes.id;";



    $stmt = $this->conn->Connection()->query($query);
    return $stmt->fetchAll();
  }
}
