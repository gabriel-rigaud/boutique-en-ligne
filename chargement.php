<?php session_start();

if(!isset($_SESSION["user"]))
{
    header("Location:index.php");
}
require 'php/class/panier.class.php';
$_SESSION['panier'] = serialize(new Panier());
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chargement</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>

<header>
    <?php require 'php/include/header.php';?>
</header>

<body>
<h1>Patienté un instant...</h1>
<div class="loader"></div>

</body>

<style>
    h1 {
        position: fixed;
        top: 36%;
        left: 38%;
    }

    .loader {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 140px;
        height: 140px;
        border: 5px solid #f3f3f3;
        border-top: 5px solid #3498db;
        border-radius: 50%;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }
</style>
<script>
    window.addEventListener('load', function() {
        setTimeout(function() {
            alert("Votre commande bien étés prise en charge merci d'avoir commandé cher nous. Vous allez être redirigé vers l'accueil.");
            window.location.href = "index.php"; // Remplacez "index.php" par l'URL de votre page d'accueil
        }, 2000); // Temps en millisecondes avant la redirection (ici 2 secondes)
    });
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <?php require 'php/include/footer.php';?>
</footer>
</html>
