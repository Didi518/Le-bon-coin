<?php

namespace App\Model;

use PDO;
use App\database\Database;

class AdminModel
{
    protected $id;

    protected $category;

    protected $name;

    protected $quantity;

    protected $price;

    protected $description;

    protected $date_de_parution;

    protected $commentaire;

    protected $img;

    protected $pdo;

    const TABLE_NAME = 'admin';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function byPage($page, $order, $research)
    {
        $byPage = 10;
        $pageStart = ($page - 1) * $byPage;

        if ($order == 1) {
            $order = 'DESC';
        } else {
            $order = "ASC";
        }
    }
}
