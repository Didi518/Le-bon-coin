<?php

namespace App\Controller;

use App\Model\ProductModel;
use App\Controller\AbstractController;


class AdminController extends AbstractController
{
    public function index()
    {
        $productModel = new ProductModel();
        $id = $productModel->getId();
        $products = $productModel->findAll();
        $this->render('admin.php', [
            'products' => $products,
            'id' => $id
        ]);
    }

    public function findOne()
    {
        $id = $_GET['id'];
        $products = new ProductModel();
        $product = $products->findById($id);

        $this->render('article.php', [
            'product' => $product
        ]);
    }

    public function create()
    {
        if (isset($_POST['name'])) {
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            $price = trim($_POST['price']);
            $type = trim($_POST['type']);
            $img = trim($_POST['img']);
            $dpt = trim($_POST['dpt']);
        }
        if (!empty($name) && !empty($description) && !empty($price) && !empty($type) && !empty($img) && !empty($dpt)) {
            $create = new ProductModel();
            $create = $create->create($name, $description, $price, $type, $img, $dpt);
        }
        header('Location: ?page=admin');
    }

    public function delete()
    {
        $id = $_GET["id"];
        $delete = new ProductModel();
        $delete->delete($id);
        header('Location: ?page=admin');
    }

    public function edit($id)
    {
    }
}
