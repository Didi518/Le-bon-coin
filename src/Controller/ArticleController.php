<?php

namespace App\Controller;


use App\Model\ProductModel;
use App\Controller\AbstractController;

class ArticleController extends AbstractController
{
    public function index()
    {
        $articleModel = new ProductModel;

        $article = $articleModel->findById($_GET['id']);
        // ma logique métier ici

        $this->render('article.php', [
            'article' => $article
        ]);
    }
}
