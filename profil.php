<?php 
    include 'php/traitement/php_profil.php'; 
    require 'php/include/connexion.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Compte</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>

<header>
    <?php require 'php/include/header.php';?>
</header>

<body>

<center><br><br>
<form  action="" id="login-form" class="container" method="post">
    <h2>Modifier mes informations</h2><br>

    <!-- Affichage des messages -->
    <?php if(!empty($user->msg_error)) { echo '<p class="alert alert-danger w-75 p-3 m-auto text-center">'.$user->msg_error.'</p>' ; }?></p>
    <?php if(!empty($user->msg_valid)) { echo '<p class="alert alert-success w-75 p-3 m-auto text-center">'.$user->msg_valid.'</p>' ; }?></p>
    <?php if(isset($msg_error_mdp)) { echo '<p class="alert alert-danger w-75 p-3 m-auto text-center">'.$msg_error_mdp.'</p>' ; }?></p>


    <div class="form-group">
        <label for="login">Login :</label>
        <input type="text" aria-describedby="emailHelp" name="login" value="<?= $_SESSION["user"]->login ?>" required>
    </div><br>

    <div class="form-group">
        <label for="email" >Email :</label>
        <input type="text" aria-describedby="emailHelp" name="email" value="<?= $_SESSION["user"]->email ?>" required>
    </div><br>

    <div class="form-group">
        <label for="old_password">Mot de passe actuel :</label>
        <input type="password" placeholder="Entre ton mots de passe actuel" aria-describedby="emailHelp" name="old_password" required>
    </div>

    <div class="form-group">
        <label for="nw_password">Nouveau mot de passe :</label>
        <input type="password" placeholder="Entre ton nouveau mots de passe" aria-describedby="emailHelp" name="nw_password">
    </div>

    <div class="form-group">
        <label for="conf_password">Confirmer mot de passe :</label>
        <input type="password" placeholder="Confirme ton nouveau mots de passe" aria-describedby="emailHelp" name="conf_password">
    </div>

    <div>
        <input class="bouton-bleu" type="submit" name="valid_modif" value="Modifier">
    </div>

</form><br><br><br><br><br>
</center>

</body>
<footer>
    <?php require 'php/include/footer.php';?>
</footer>
</html>