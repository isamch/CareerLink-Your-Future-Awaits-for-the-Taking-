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


  public function insertPost($category_id, $content, $url, $authorid)
  {


    $query = "INSERT INTO postes (category_id, content, url, createduserid, statusdel) VALUES (:category_id, :content, :url, :createduserid, 'one')";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':url', $url);
    $stmt->bindParam(':createduserid', $authorid);

    if ($stmt->execute()) {

      $lastid = $this->conn->Connection()->lastInsertId();

      // $lastid = $this->lastinsertid($category_id, $content, $url);

      return $lastid;
    }

    return false;
  }


  // // update :

  public function updatepostemodel($id, $content, $url, $category_id)
  {
    $query = "UPDATE postes SET category_id = :category_id, content = :content, url = :url WHERE id = :id";

    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':url', $url);
    $stmt->bindParam(':category_id', $category_id);

    if ($stmt->execute()) {

      return true;
    }

    return false;
  }







  public function getallpostes()
  {
    $query = "SELECT postes.id, postes.url, categories.deleted, users.username , postes.statusdel,  categories.name, postes.content, GROUP_CONCAT(tags.name) AS tags FROM postes 
              LEFT JOIN categories ON category_id = categories.id
              LEFT JOIN post_tags ON postes.id = post_tags.post_id
              LEFT JOIN tags ON post_tags.tag_id = tags.id
              LEFT JOIN users ON users.id = postes.createduserid
              GROUP BY postes.id;";



    $stmt = $this->conn->Connection()->query($query);
    return $stmt->fetchAll();
  }



  // delete poste :
  public function deletepostemodel($id)
  {

    $query = "UPDATE postes SET statusdel = 'off' WHERE postes.id = :posteid";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':posteid', $id);

    if ($stmt->execute()) {
      return true;
    }
    return false;
  }

  // delete poste :
  public function restorepostemodel($id)
  {

    $query = "UPDATE postes SET statusdel = 'one' WHERE postes.id = :posteid";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':posteid', $id);

    if ($stmt->execute()) {
      return true;
    }
    return false;
  }



  // search :

  public function searchmodel($keysearch)
  {

    $query = "SELECT postes.id,  postes.url, users.username , postes.statusdel, categories.deleted, categories.name, postes.content, GROUP_CONCAT(tags.name) AS tags FROM postes 
              LEFT JOIN categories ON category_id = categories.id
              LEFT JOIN post_tags ON postes.id = post_tags.post_id
              LEFT JOIN tags ON post_tags.tag_id = tags.id
              LEFT JOIN users ON users.id = postes.createduserid
              WHERE (LOWER(postes.content) LIKE :keysearch
                 OR LOWER(users.username) LIKE :keysearch
                 OR LOWER(categories.name) LIKE :keysearch
                 OR LOWER(tags.name) LIKE :keysearch)
              AND postes.statusdel = 'one'
              AND categories.deleted = 'one'
              GROUP BY postes.id;";



    $stmt = $this->conn->Connection()->prepare($query);

    $searchwordsql = '%' . strtolower($keysearch) . '%';

    $stmt->bindParam(':keysearch', $searchwordsql);

    $stmt->execute();
    return $stmt->fetchAll();
  }
}
