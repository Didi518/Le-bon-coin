<?php

namespace App\Controller;

use App\Model\ProductModel;
use App\Controller\AbstractController;

class ProductController extends AbstractController
{
    public function index()
    {
        $productModel = new ProductModel();
        $id = $productModel->getId();
        $products = $productModel->findAll();
        $this->render('products.php', [
            'products' => $products,
            'id' => $id
        ]);
    }

    public function findOne($id)
    {
        $id = $_GET["id"];
        $one = new  ProductModel();
        $article = $one->findById($id);
        $this->render('article.php', [
            'article' => $article,
        ]);
    }

    public function create()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $img = $_POST['img'];
        $dpt = $_POST['dpt'];

        $create = new ProductModel();
        $create->create($name, $description, $price, $type, $img, $dpt);
        header('Location: ?page=nouveau');
    }

    public function delete()
    {
        $id = $_GET["id"];
        $delete = new ProductModel();
        $delete->delete($id);
        header('Location: ?page=products');
    }
}
