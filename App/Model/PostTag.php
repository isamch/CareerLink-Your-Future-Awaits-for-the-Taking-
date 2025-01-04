<?php

namespace MyApp\Model;

use PDO;

class PostTag
{


  private $conn;

  public function __construct()
  {
    $this->conn = new dbh();
  }



  public function insertPostTag($post_id, $tag_id)
  {
    $query = "INSERT INTO post_tags (post_id, tag_id) VALUES (:post_id, :tag_id)";
    $stmt = $this->conn->Connection()->prepare($query);
    $stmt->bindParam(':post_id', $post_id);
    $stmt->bindParam(':tag_id', $tag_id);
    $stmt->execute();
  }
}
