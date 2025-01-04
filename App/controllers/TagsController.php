<?php

namespace MyApp\Controllers;

use MyApp\Model\Tags;
use MyApp\Model\PostTag;

class TagsController
{



  public function addTag($tagName)
  {
    $tagModel = new Tags();

    $tag_id = $tagModel->gettagidbyname($tagName);
    if (!$tag_id) {
      $tag_id = $tagModel->inserttag($tagName);
    }

    return $tag_id;
  }



  public function linkTagToPost($post_id, $tag_id)
  {
    $postTagModel = new PostTag();
    $postTagModel->insertPostTag($post_id, $tag_id);
  }
}
