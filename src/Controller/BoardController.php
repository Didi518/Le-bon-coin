<?php

namespace App\Controller;

use App\Model\ProductModel;
use App\Controller\AbstractController;

class BoardController extends AbstractController
{
    public function index()
    {
        $productModel = new ProductModel();

        $products = $productModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('board.php', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $productModel = new ProductModel();

        // je récupère le name depuis le formulaire
        $product_name = trim($_POST['board_name']);
        $product_description = trim($_POST['board_name']);
        $product_price = trim($_POST['board_name']);
        $product_date = trim($_POST['board_name']);
        $product_type = trim($_POST['board_name']);
        $product_img = trim($_POST['board_name']);
        $product_dpt = trim($_POST['board_name']);

        if (!empty($product_name)) {
            // je crée
            $productModel = new ProductModel();
            $product_id = $productModel->create($product_name, $product_description, $product_price, $product_date, $product_type, $product_img, $product_dpt);
        }
        header('Location:http://localhost/le_bon_coin/');
        exit();
    }
}
