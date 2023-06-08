<?php 
    include 'php/traitement/php_inscription.php';
    require 'php/include/connexion.php';
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>
<body>
<header>
    <?php require 'php/include/header.php'?>
</header>
<center><br><br>
    <form action="" id="inscription-form" class="container" method="post">
        <h2>Inscription</h2><br>
        <div>
            <label for="login">Login:</label>
            <input type="text" name="login" placeholder="Entre ton login" required>
        </div>

        <div>
            <label for="email">Adresse email:</label>
            <input type="email" name="email" placeholder="Entre ton email" required>
        </div>


        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" placeholder="Entre ton mot de passe" required>
        </div>

        <div>
            <label for="conf_password">Confirmation du mot de passe:</label>
            <input type="password" name="conf_password" placeholder="Retape ton mot de passe" required>
        </div><br>

        <div>
            <button class="bouton-bleu" name="valid_insc" value="Inscription" type="submit">S'inscrire</button>
            <?php if(isset($msg_error)) { echo '<p style="color: white">'.$msg_error.'</p>' ; }?></p>
        </div>
    </form><br><br><br><br><br>

</center>

</body>
<footer>
    <?php require 'php/include/footer.php'?>
</footer>
</html>
