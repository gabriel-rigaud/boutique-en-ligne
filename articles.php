<?php 
    session_start();    
    require 'php/include/connexion.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boutique</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>

<header>
    <?php require 'php/include/header.php' ?>
</header>

<body>

<div id="boutique">
    <h1>Boutique</h1>
    <a class="dropdown-item" href="articles.php">Tous les articles</a>
    <?php if (isset($categories))  :?>
        <?php for ($i = 0 ; $i<COUNT($categories) ; $i++) :?>
            <a class="dropdown-item" href="articles.php?categorie=<?= $categories[$i]['id']?>&p=1"><?= $categories[$i]['nom'] ?></a>
        <?php endfor ;?>
    <?php endif ;?>
    <p class="promo-text">
        Promotion :
        <button class="promo-btn" onclick="togglePromo()">
            <i class="fas fa-toggle-on"></i>
            <i class="fas fa-toggle-off"></i>
        </button>
    </p>
</div>

<main id="main_articles">
    <?php
    include 'php/traitement/php_articles.php';
    include 'php/include/select_page.php';
    ?>
</main>
</body>
<script src="php/js/anim.js"></script>
<footer>
    <?php require 'php/include/footer.php' ?>
</footer>
</html>