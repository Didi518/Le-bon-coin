<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>Le Bon Coin</title>
</head>

<body>
    <div class="container" id="container">
        <?php
        require('navBar.php');
        ?>
        <h1><button id="new" onclick="toggle1();"><a>Nouvel Article</a></button></h1>
        <?php foreach ($products as $product) : ?>
            <div class="card">
                <a href="#">
                    <div class="box">
                        <div class="imgBx">
                            <img src="<?= $product->getImg(); ?>" alt="<?= $product->getName(); ?>">
                        </div>
                        <div class="content">
                            <h2><?= $product->getName(); ?><br><span><?= $product->getDescription(); ?></span></h2>
                        </div>
                    </div>
                </a>
                <div class="btn">
                    <button><a href="?page=adminDelete&id=<?= $product->getId(); ?>">Supprimer</a></button>
                    <button id="edit" onclick="toggle2()">Modifier</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div id="popup">
        <h2>Nouvel article</h2>
        <form method="POST" action="?page=adminCreate">
            <div class="user-box">
                <input type="text" name="name">
                <label>Nom de l'article</label>
            </div>
            <div class="user-box">
                <input type="text" name="description">
                <label>Description</label>
            </div>
            <div class="user-box">
                <input type="text" name="price">
                <label>Prix</label>
            </div>
            <div class="user-box">
                <input type="text" name="type">
                <label>Catégorie</label>
            </div>
            <div class="user-box">
                <input type="text" name="img">
                <label>Image</label>
            </div>
            <div class="user-box">
                <input type="text" name="dpt">
                <label>Département</label>
            </div>
            <button type="submit" onclick="toggle1();">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Valider article
            </button>
        </form>
    </div>
    <div id="modal">
        <div class="create-box">
            <h2>Modifier article</h2>
            <form method="POST" action="?page=adminUpdate">
                <div class="user-box">
                    <input type="text" name="nom">
                    <label>Nom de l'article</label>
                </div>
                <div class="user-box">
                    <input type="text" name="desc">
                    <label>Description</label>
                </div>
                <div class="user-box">
                    <input type="text" name="prix">
                    <label>Prix</label>
                </div>
                <div class="user-box">
                    <input type="text" name="category">
                    <label>Catégorie</label>
                </div>
                <div class="user-box">
                    <input type="text" name="image">
                    <label>Image</label>
                </div>
                <div class="user-box">
                    <input type="text" name="departement">
                    <label>Département</label>
                </div>
                <button type="submit" onclick="toggle2();">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Valider article
                </button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>