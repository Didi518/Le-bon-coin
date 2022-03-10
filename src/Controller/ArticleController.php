<?php

namespace App\Controller;


use App\Model\BoardModel;
use App\Controller\AbstractController;

class ArticleController extends AbstractController
{
    public function article() {
        $articleModel = new BoardModel;

        $article = $articleModel->findById($_GET['id']);
        // ma logique métier ici

        $this->render('article.php', [
            'article'=>$article
        ]);
    }
}