<?php

namespace App\Controller;


use App\Model\ProductModel;
use App\Model\CommentModel;
use App\Controller\AbstractController;

class ArticleController extends AbstractController
{
    public function index()
    {
        $productId = $_GET['id'];
        $articleModel = new ProductModel;
        $sendMessage = new CommentModel;

        $message = $sendMessage->findById($_GET['id']);
        $article = $articleModel->findById($_GET['id']);
        // ma logique métier ici


        if (isset($_POST['firstName'])) {
            $firstName = trim($_POST['firstName']);
            $lastName = trim($_POST['lastName']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);
        }
        if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($message)) {
            $sendMessage = new CommentModel();
            $sendMessage = $sendMessage->create($firstName, $lastName, $email, $message, $productId);
        }

        $this->render('article.php', [
            'article' => $article,
            'message' => $message,
            'productId' => $productId
        ]);
    }
}
