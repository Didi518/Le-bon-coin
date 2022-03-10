<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/test.css">
    <title>Détails</title>
</head>
<body>
    <div class="container">
        <div class="imgBx">
            <img src="<?= $article->getImg(); ?>" alt="">
        </div>
        <div class="detail">
            <div class="content">
                <h2><?= $article->getName(); ?></h2>
                <p><?= $article->getCommentaire(); ?></p>
                <h3><?= $article->getPrice(); ?></h3>
                <button>Buy Now</button>
            </div>
        </div>
    </div>
</body>
</html>