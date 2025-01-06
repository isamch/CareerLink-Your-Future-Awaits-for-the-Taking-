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

        if (!preg_match('/^([a-zA-Z0-9]+( [a-zA-Z0-9]+)*)?$/', $tags)) {
            header('Location: /brief10/public/index.php/home?error=1');
            exit;
        }

        if (!preg_match('/^\d+$/', $category_id)) {
            header('Location: /brief10/public/index.php/home?error=2');
            exit;
        }

        if (!preg_match('/^.{1,500}$/', $content)) {
            header('Location: /brief10/public/index.php/home?error=3');
            exit;
        }

        if (!preg_match('/^(https?|ftp):\/\/([a-zA-Z0-9.-]+(:[a-zA-Z0-9.&%$-]*)?@)?([a-zA-Z0-9.-]+|\[[a-fA-F0-9:]+\])(:[0-9]+)?(\/[^\s]*)?$/', $url)) {
            header('Location: /brief10/public/index.php/home?error=4');
            exit;
        }



        // call insert fun in model post :
        $postModel = new Postes();
        $authorid = $_SESSION['user']['id'];
        $post_id = $postModel->insertPost($category_id, $content, $url, $authorid);

        if (!$post_id) {
            header("Location: /brief10/public/index.php/home?error=post$post_id");
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




    // delete postes :

    public function deletepostes()
    {
        $id = $_POST['iddeleteposte'];
        $postsmodel = new Postes();
        if (!$postsmodel->deletepostemodel($id) ) {
            echo 'delete feild';
        }


    }

    // restore poste :
    public function restorepostes()
    {
        $id = $_POST['idrestoreposte'];
        $postsmodel = new Postes();
        if (!$postsmodel->restorepostemodel($id) ) {
            echo 'restore feild';
        }


    }














}
