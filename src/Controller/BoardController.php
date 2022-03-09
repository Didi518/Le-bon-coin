<?php

namespace App\Controller;

use App\Model\BoardModel;
use App\Controller\AbstractController;

class BoardController extends AbstractController
{
    public function index()
    {
        $boardModel = new BoardModel();

        $boards = $boardModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
       
        $this->render('board.php', [
            'boards' => $boards
        ]);
    }

    public function create()
    {
        $boardModel = new boardModel();

        // je récupère le name depuis le formulaire
        $board_name = trim($_POST['board_name']);

        if (!empty($board_name)) {
            // je crée
            $boardModel = new boardModel();
            $board_id = $boardModel->create($board_name);
        }    
        header('Location:http://localhost/le_bon_coin/');
        exit();
    }
}