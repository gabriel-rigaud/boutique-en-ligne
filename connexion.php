<?php 
    require 'php/traitement/php_connexion.php';
    require 'php/include/connexion.php';

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>
<header>
    <?php require 'php/include/header.php'?>
</header>
<body>
<center><br><br>
    <form id="login-form" class="container" method="post">
        <h2>Connexion</h2><br>
        <div>
            <label for="login" name="login">Login</label>
            <input type="text" id="login" name="login" placeholder="Entre ton login" required>
        </div>

        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" placeholder="Entre ton password" required>
        </div>

        <div><br>
            <button class="bouton-bleu" name="valid_co" value="Connexion" type="submit">Se connecter</button>
        </div>
    </form>
    <div id="error-message"></div><br><br><br><br><br>
</center>
</body>

<footer>
    <?php require 'php/include/footer.php'?>
</footer>
</html>