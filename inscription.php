<?php
include 'php/traitement/php_inscription.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
<header>
    <?php include 'php/include/header.php'?>
</header>
<center>
    <form id="inscription-form" class="container" method="post">
        <h2>Inscription</h2><br>
        <div>
            <label for="login">Login:</label>
            <input type="text" id="login" name="nom_utilisateur" placeholder="Entre ton login" required>
        </div>

        <div>
            <label for="email">Adresse email:</label>
            <input type="email" id="email" name="email_utilisateur" placeholder="Entre ton email" required>
        </div>

        <div>
            <label for="livraison">Adresse de livraison:</label>
            <input type="text" id="livraison" name="adresse_livraison" placeholder="Entre ton adresse de livraison" required>
        </div>

        <div>
            <label for="facturation">Adresse de facturation:</label>
            <input type="text" id="facturation" name="adresse_facturation" placeholder="Entre ton adresse de facturation" required>
        </div>

        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="mot_de_passe" placeholder="Entre ton mot de passe" required>
        </div>

        <div>
            <label for="confirmpassword">Confirmation du mot de passe:</label>
            <input type="password" id="confirmpassword" name="mot_de_passe2" placeholder="Retape ton mot de passe" required>
        </div><br>

        <div>
            <button class="bouton-bleu" type="submit">S'inscrire</button>
        </div>
    </form>

    <div id="error-message"></div>
</center>

<footer>
    <?php include 'php/include/footer.php'?>
</footer>
</body>
</html>
