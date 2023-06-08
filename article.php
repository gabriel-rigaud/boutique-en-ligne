<?php
    session_start();
    require 'php/include/connexion.php';

    setlocale(LC_TIME, "fr_FR","French");

    if (isset($_GET['id'])) {


        $id_article = $_GET['id'];


        $resultat_commentaires = recuperation_join($bd,'commentaires','utilisateurs','commentaires.id_utilisateur','utilisateurs.id','id_article',$id_article);

        $nb_page = ceil(count($resultat_commentaires) / 5) ;

        //verifie le get page
        if(isset($_GET["p"]) && $_GET["p"]>0 && $_GET["p"]<=$nb_page)
        {
            $page = (int) strip_tags($_GET["p"]);
        }
        else
        {
            $page = 1;
        }

        $com=5;
        $debut = (($page-1)*$com);

        $pag = $bd->prepare("SELECT * FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id WHERE id_article = $id_article LIMIT $debut, $com ");
        $pag->execute();
        $res_pag = $pag->fetchall();


        $resultat = recuperation_join($bd,'articles','utilisateurs','articles.id_utilisateur','utilisateurs.id','articles.id',$id_article);

        if (empty($resultat)) {
            header('location: index.php');
        }

        $articles_aleatoire = $bd->prepare("SELECT * FROM articles WHERE id != 2 ORDER BY rand() LIMIT 0,3 ");
        $articles_aleatoire->execute();
        $resultat_aleatoir = $articles_aleatoire->fetchall();

    } else {
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/src/image/logo-onglet.png">
    <title><?= $resultat[0]['titre'] ?></title>
</head>
<body class="article">

    <header><?php require 'php/include/header.php' ?></header>

    <main>
    <?php if (isset($resultat_aleatoir)) :?>

    <section class="section_article">
        <div>
            <img ondragstart="return false;" class="image-article" src="php/traitement/upload/<?=$resultat[0]['image'] ?>" alt="">
            <h1 class="text-center m-4"><?= $resultat[0]['titre']?></h1>
            <p class="m-3 text-justify"><?= $resultat[0]['article']?></p>
            <h1 class="prix"><?= $resultat[0]['prix']?> €</h1>
            <p class="m-3 text-right"><em>Publié par <?= $resultat[0]['login'] ?> , le <?= strftime("%d %B %Y",strtotime($resultat[0]['date'])) ?></em></p>
            <?php
            if (isset($_SESSION["user"]->id)) {
            echo '<a href="php/include/addpanier.php?id=' . $resultat[0][0] . '&titre='.$resultat[0]['titre'].'&prix='.$resultat[0]['prix'].'&image=php/traitement/upload/'.$resultat[0]['image']. '" class="bouton-bleu">Ajouter au panier</a>';
            }
            ?>
        </div><br>

        <div class="container-article">
            <h1>D'autre Produit</h1>
            <?php for ($i=0 ; $i<COUNT($resultat_aleatoir) ; $i++) :?>
            <article>
                <a href="article.php?id=<?= $resultat_aleatoir[$i]['id']?>">
                    <img ondragstart="return false;" src="php/traitement/upload/<?= $resultat_aleatoir[$i]["image"] ?>" alt="photo article" class="image-boutique">
                </a>
                <h1><?= $resultat_aleatoir[$i]['titre'] ?></h1>
                <h1 class="prix"><?= $resultat_aleatoir[$i]['prix'] ?> €</h1>
                <p><?= mb_strimwidth($resultat_aleatoir[$i]['article'],0,200,'...') ?></p>
            </article>

            <?php endfor ;?>
        </div>

    </section>
    <?php else :?>
        <section>
            <div>
                <img class="image-article" src="php/traitement/upload/<?=$resultat[0]['image'] ?>" alt="">
                <h1 class="text-center m-4"><?= $resultat[0]['titre']?></h1>
                <p class="m-3"><?= $resultat[0]['article']?></p>
                <p class="m-3"><em>Publié par <?= $resultat[0]['login'] ?> , le <?= strftime("%d %B %Y",strtotime($resultat[0]['date'])) ?></em></p>
            </div>
        </section>
    <?php endif ;?>
<!-- SI IL Y A DES COMM-->
    <?php if (!empty($resultat_commentaires)) :?>


        <!-- COMPTER LES COMS-->
        <div class="commentaires">
        <h3><?= COUNT($resultat_commentaires) ?> Commentaire(s)</h3>
            <?php for ($i = 0 ; $i<COUNT($res_pag) ; $i++) :?>
                <p class="bg-light m-0 "><b><?= ucfirst($res_pag[$i]['login']) ?></b> , le <?=strftime("%d %B %Y",strtotime($res_pag[$i]['date'])) ?></p>
                <p><?= $res_pag[$i]['commentaire'] ?></p>
            <?php endfor ;?>
        </div>

        <!-- PAGINATION COMM -->

            <div class="text-center m-2">

            <?php for($i= 1 ; $i < $nb_page +1; $i++) :?>
                <?php if ($page== $i) :?>
                <a class="bg-primary text-white p-1" href="article.php?id=<?= $_GET['id']?>&p=<?=$i?>"><?= $i ?></a>
                <?php else :?>
                    <a  href="article.php?id=<?= $_GET['id']?>&p=<?=$i?>"><?= $i ?></a>
                <?php endif ;?>
                <?php $com = $com + 5 ; ?>
            <?php endfor ;?>
            </div>

    <?php endif ;?>

        <!-- SI UTILISATEUR CONNECTE  -->
        <?php if(isset($_SESSION["user"]->id)) :?>

        <form action="php/traitement/formulaire_commentaires.php?id=<?= $_GET['id'] ?>" method="POST" class="form-commentaire">
            <div class="form-group">
                <label for="commentaire">Votre commentaire :</label>
                <textarea name="commentaire" id="commentaire" cols="30" rows="10" class="input-commentaire"></textarea>
            </div><br>
            <input type="submit" name=" valider " class="bouton-bleu">


        </form>
        <?php endif ;?>
    </main>

    <?php require 'php/include/footer.php' ?>

</body>
</html>