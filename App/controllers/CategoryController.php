<?php


namespace MyApp\controllers;

use MyApp\Model\Category; 

class CategoryController
{


  
  public function addCategory() {

    
  }

  
  public function displayAllCategory() {

    $category = new Category();

    return $category->getallcategory(); 

  }




}


