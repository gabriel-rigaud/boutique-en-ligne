<?php include 'php/traitement/php_connexion.php'; ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<header>
    <?php include 'php/include/header.php'?>
</header>
<body>
<center>
<form id="login-form" class="container" method="post">
    <h2>Connexion</h2><br>
    <div>
        <label for="login">Login</label>
        <input type="login" id="login" name="login" placeholder="Entre ton login" required>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" placeholder="Entre ton password" required>
    </div>
    <div><br>
        <button class="bouton-bleu" type="submit">Se connecter</button>
    </div>
</form>
<div id="error-message"></div>
</center>
</body>

<footer>
    <?php include 'php/include/footer.php'?>
</footer>
</html>