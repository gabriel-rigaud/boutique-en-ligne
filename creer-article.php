<?php
    session_start();
    require 'php/include/connexion.php';

    if ($_SESSION['user']->id_droits != 1337 && $_SESSION['user']->id_droits != 42  ) {
        $_SESSION['erreur'] = "Vous n'avez pas les droits necessaire pour acceder à cette page";
        header('location: index.php');
    }

    $requete = $bd->prepare("SELECT * FROM categories");
    $requete->execute();
    $resultat = $requete->fetchall();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création D'Article</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>
<body>

<header>
    <?php require 'php/include/header.php' ?>
</header>


<center>
    <form action="php/traitement/formulaire_creer_article.php" method="POST" enctype="multipart/form-data" class="container">
        <h1 class="title">Créer un article</h1>
        <?php if(isset($_SESSION['erreur'])) { echo '<p class="alert alert-danger w-75 p-3 m-auto">'.$_SESSION['erreur'].'</p>' ; }?></p>
        <?php if(isset($_SESSION['success'])) { echo '<p class="alert alert-success w-75 p-3 m-auto">'.$_SESSION['success'].'</p>' ; }?></p>
        <div class="form-group">
            <label for="titre"  >Titre de l'article :</label>
            <input type="text" id="titre" name="titre" class="form-control">
        </div>

        <div class="form-group">
            <label for="image">Votre image : </label>
            <input type="file" id="image" accept=".jpg,.jpeg,.png,.gif" name="image" class="form-control-file" >
            <!-- On limite le fichier -->
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        </div>

        <div class="form-group">
            <label for="categorie">Choisir la catégorie : </label>
            <select name="categorie" id="categorie" class="form-control" >
                <option value="">--Choisir une option--</option>
                <?php for($i=0; $i<COUNT($resultat) ; $i++) : ?>
                    <option value="<?= $resultat[$i]['id'] ?>"> <?= $resultat[$i]['nom'] ?> </option>
                <?php endfor ?>

            </select>
        </div>

        <div class="form-group">
            <label for="article">Texte de votre article :</label>
            <textarea name="article" id="article" cols="30" rows="10" class="form-commentaire"></textarea>
        </div>

        <div class="form-group">
            <label for="prix">Prix :</label>
            <input type="text" id="prix" name="prix" class="form-control">
        </div>


        <input type="submit" name="valider" class="btn btn-danger d-block m-auto w-25 p-2">
    </form>
</center>

<?php require 'php/include/footer.php' ?>

</body>
</html>

<?php unset($_SESSION['success'], $_SESSION['erreur']); ?>
