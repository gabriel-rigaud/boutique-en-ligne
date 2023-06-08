<?php
session_start();
require 'php/class/panier.class.php';

if(!isset($_SESSION["user"]))
{
    header("Location:index.php");
}
// Affichage du contenu du panier
$panier = isset($_SESSION['panier']) ? unserialize($_SESSION['panier']) : new Panier();
$articles = $panier->getArticles();

// Suppression d'un article du panier
if (isset($_GET['supprimer'])) {
    $id_article_supprimer = $_GET['supprimer'];
    $panier->supprimerArticle($id_article_supprimer);
    $_SESSION['panier'] = serialize($panier);
    header('Location: panier.php');
    exit();
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>
<header>
    <?php require 'php/include/header.php';?>
</header>

<body>
<div class="couverture" ondragstart="return false;">
    <div class="center-content">
        <p class="couv-text">Panier</p>
    </div>
    <img class="couv-img" src="src/image/logo.png" />
</div>
</body>

<div class="panier" style="text-align: center;float: left;margin-left: 32%">
    <h1 class="title">Panier</h1>
    <br>
    <table>
        <tr>
            <td>Quantites</td>
            <td>Images</td>
            <td>Articles</td>
            <td>Prix</td>
            <td>Supprimé</td>
        </tr>

        <tr>
            <?php foreach ($articles as $id_article) { ?>
            <td><?php echo $id_article['quantite']; ?></td>
            <td>
                <a href="article.php?id=<?= $id_article['id'] ?>&p=1">
                    <img ondragstart="return false;" class="image-boutique" style="width: 130px" src="<?php echo $id_article['image']; ?>">
                </a>
            </td>
            <td><?php echo $id_article['titre']; ?></td>
            <td><?php echo $id_article['prix']; ?> €</td>
            <td>
                <a href="panier.php?supprimer=<?php echo $id_article['id']; ?>">
                    <button class="icon-trash"><i class="fa-solid fa-trash"></i></button>
                </a>
            </td>
        </tr>
        <?php } ?>

        <!-- Afficher les produits du panier ici -->
        <tr class="total">
            <td colspan="2">Total:</td>
            <td><?php echo $panier->getTotalPrix(); ?> €</td>
            <td></td>
        </tr>
    </table>
    <div class="continue">
        <a href="chargement.php"><button class="bouton-bleu">Continuer</button></a>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer>
    <?php require 'php/include/footer.php';?>
</footer>
</html>

<style>
    .couverture {
        background: url(src/image/panier.jpg)no-repeat;
        background-size: cover;
        background-position: center;
        height: 50vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    table {
        width: 50%;
        float: left;
    }
    .panier {
        width: 40%;
        float: right;
    }
    .panier table {
        width: 100%;
    }
    .panier th, .panier td {
        padding: 5px;
    }
    .panier .total {
        text-align: right;
        font-weight: bold;
    }
    .continue {
        text-align: center;
        margin-top: 10px;
    }
</style>