<?php

namespace App\Controller;


use App\Model\BoardModel;
use App\Controller\AbstractController;

class ArticleController extends AbstractController
{
    public function article()
    {   
        $articleId = $_GET['id'];
        // dd($articleId);
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $articleModel = new BoardModel();
       

        $articles = $articleModel->findAll();
        $articles = $articleModel->findById($articleId);
      

      
        // Pour chaque article
        foreach($articles as $key => $article) {
            // j'initialise une liste de cards vides
            $list_article = [];

            // Pour chaque card
            foreach($articles as $article) {
                // si card_id (l'id de la liste dans la card) est égal à l'id de la liste
                if($article->getList_id() == $article->getId()) {
                    // j'ajoute la card à la liste de cards
                    $list_article[] = $article;
                }
            }

            // j'ajoute l'annonce dans ma liste
            $article[$key]->annonce = $articles;

            // $lists[$key]->cards = array_filter($cards, function($card) use ($list_id) {
            //     return $card->getList_id() == $list_id;
            // });
        }
        $this->render('article.php', [
            'articles' => $articles
        ]);
  
    }
}
