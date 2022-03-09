<?php

namespace App;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

# connection bdd
use App\Database;

$db = new Database();
$db->connect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/article.css">
    <title>Détails</title>
</head>
<body>
    <?php foreach ($articles as $article) : ?>
        <div class="container">
            <div class="imgBx"></div>
            <img src="<?= $article->getImg(); ?>" alt="">
        <div class="details">
            <div class="content">
                <h2><?= $article->getName(); ?><br><span><?= $article->getCategory(); ?></span></h2>>
                <p><?= $article->getCommentaire(); ?></p>
                <h3><?= $article->getPrice(); ?></h3>
                <button>Commander</button>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</body>
</html>