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
    <link rel="stylesheet" href="assets/css/article.css">
    <title>Détails</title>
</head>

<body>
    <div class="container">
        <div class="imgBx">
            <img src="<?= $article->getImg(); ?>" alt="<?= $article->getName(); ?>">
            <span><?= $article->getName(); ?></span>
        </div>
        <div class="detail">
            <div class="content">
                <h2><?= $article->getName(); ?><br /><span><?= $article->getType(); ?></span></h2>
                <p><?= $article->getDescription(); ?></p>
                <div class="details">
                    <h3><?= $article->getPrice(); ?>€</h3>
                    <h3>Ajoutée le: <?= $article->getDate(); ?></h3>
                    <h3>Département: <?= $article->getDpt(); ?></h3>
                </div>
                <button>Acheter</button>
            </div>
        </div>
    </div>
</body>

</html>