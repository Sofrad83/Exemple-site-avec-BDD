<?php

namespace App\Controller;

use App\Controller\BaseController;

class MonController extends BaseController{
  public function index(){
    
    $sql = 'SELECT * FROM produit';

    $produits = $this->dbQuery->query($sql);

    $this->data = ["produits" => $produits];
    $this->template = "index";
  }
}