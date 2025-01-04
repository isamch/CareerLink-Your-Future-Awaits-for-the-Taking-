<?php


namespace MyApp\controllers;

use MyApp\Model\Postes;
use MyApp\Controllers\TagsController;

class PostesController
{


    public function displayAllPostes()
    {

        $posts = new Postes();

        return $posts->getallpostes();
    }


    public function addpostes()
    {

        $category_id = $_POST['category_id'];
        $tags = $_POST['tags'];
        $content = $_POST['content'];
        $url = $_POST['url'];


        if (empty($category_id) || empty($tags) || empty($content) || empty($url)) {
            header('Location: /brief10/public/index.php/home');
            exit;
        }

        if (!preg_match('/^([a-zA-Z0-9_]+(,[a-zA-Z0-9_]+)*)?$/', $tags)) {
            header('Location: /brief10/public/index.php/home');
            exit;
        }

        if (!preg_match('/^\d+$/', $category_id)) {
            header('Location: /brief10/public/index.php/home');
            exit;
        }

        if (!preg_match('/^.{1,500}$/', $content)) {
            header('Location: /brief10/public/index.php/home');
            exit;
        }

        if (!preg_match('/^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i', $url)) {
            header('Location: /brief10/public/index.php/home');
            exit;
        }


        // call insert fun in model post :
        $postModel = new Postes();
        $post_id = $postModel->insertPost($category_id, $content, $url);

        if (!$post_id) {
            header('Location: /brief10/public/index.php/home?error=post');
            exit;
        }

        $tagController = new TagsController();
        $tags = explode(" ", $tags);
        
        foreach ($tags as $tag) {
            $tag_id = $tagController->addTag(trim($tag)); 

            $tagController->linktagtopost($post_id, $tag_id);
        }



        header('Location: /brief10/public/index.php/home');
        exit;
    }
}
