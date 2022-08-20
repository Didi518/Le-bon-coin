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
    <div class="create-box">
        <h2>Créer un nouvel article</h2>
        <form method="POST" action="?page=nouveau">
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
                <label>Département d'origine</label>
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Valider article
            </button>
        </form>
    </div>
</body>

</html>