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
    <link rel="stylesheet" href="assets/css/board.css">
    <title>Le Bon Coin</title>
</head>

<body>
    <?php foreach ($products as $product) : ?>
        <a href="?page=article&id=<?= $product->getId() ?>">
            <div class="box">
                <div class="imgBx">
                    <img src="<?= $product->getImg(); ?>" alt="">
                </div>
                <div class="content">
                    <h2><?= $product->getName(); ?><br><span><?= $product->getDescription(); ?></span></h2>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</body>

</html>