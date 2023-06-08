<?php
    session_start();
    require 'php/include/connexion.php';

    $requete_recuperation_articles = $bd->prepare("SELECT * FROM articles ORDER BY `date` DESC LIMIT 3 " );
    $requete_recuperation_articles->execute();
    $resultat_articles = $requete_recuperation_articles->fetchall();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>
<header>
    <?php require 'php/include/header.php';?>
</header>

<body>
<div class="couverture" ondragstart="return false;">
    <div class="center-content">
        <div id="base">
            <div id="texte"></div>
        </div><br><br><br><br><br><br><br><br><br><br>
        <a href="articles.php"><button class="couv-btn">SHOP</button></a>
    </div>
    <img class="couv-img" src="src/image/logo.png" />
</div>

<section>
    <h1 class="title">NEW PRODUIT</h1>
</section>

<section id="main_articles" >
    <?php if(isset($resultat_articles)) : ?>
        <?php for ($i=0 ; $i<COUNT($resultat_articles) ; $i++) :?>
            <div class="card_index">
                <h1 ><?= $resultat_articles[$i]['titre'] ?></h1>
                <a href="article.php?id=<?= $resultat_articles[$i]['id'] ?>&p=1">
                    <img ondragstart="return false;" src="php/traitement/upload/<?= $resultat_articles[$i]['image'] ?>" class="image-boutique" alt="Image de l'article">
                </a><br><br><br><br>
                <h1 class="prix"><?= $resultat_articles[$i]['prix'] ?> €</h1>
                <p><?= mb_strimwidth($resultat_articles[$i]['article'],0,300,'...') ?></p>
            </div>
        <?php endfor ;?>
    <?php endif ;?>
</section>

</body>
<script src="php/js/text-anim.js"></script>
<footer>
    <?php require 'php/include/footer.php';?>
</footer>
</html>
<style>
    .couverture {
        background: url(src/image/couverture.png)no-repeat;
        background-size: cover;
        background-position: center;
        height: 80vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

