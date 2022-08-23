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
    <section>
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
                    <div class="form">
                        <form method="POST">
                            <h3 id="logo">Répondre</h3>
                            <label for="firstName">Votre nom</label>
                            <input type="text" id="firstName" name="firstName" placeholder="Entrez votre nom" />
                            <label for="lastName">Votre prénom</label>
                            <input type="text" id="lastName" name="lastName" placeholder="Entrez votre prénom" />
                            <label for="email">Votre e-mail</label>
                            <input type="text" id="email" name="email" placeholder="Entrez votre e-mail" />
                            <label for="message">Votre message</label>
                            <textarea id="message" name="message" placeholder="Votre réponse..."></textarea>
                            <button type="submit">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>