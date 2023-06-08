<?php
session_start();
include 'php/include/connexion.php';
$id_article = $_GET['id'];

$article = $bd->prepare("SELECT * FROM articles WHERE id = $id_article");
$article->execute();
$resultat_article = $article->fetch();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification Article</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>

<header>
    <?php require 'php/include/header.php'; ?>
</header>
<center>
<body>
    <main >
        <h1 class="text-center">Modification de l'article</h1>

        <?php if (isset($_SESSION['erreur'])) { echo "<p class='alert alert-danger w-75 m-auto'>".$_SESSION['erreur']."</p>" ; } ?>
        <?php if (isset($_SESSION['success'])) { echo "<p class='alert alert-success w-75 m-auto' >".$_SESSION['success']."</p>" ; } ?>

        <form action="php/traitement/formulaire_modification_article.php?id=<?= $id_article ?>" method="POST" enctype="multipart/form-data" class="container">
            <div class="form-group">
                <label for="titre"  >Titre de l'article :</label>
                <input type="text" id="titre" name="titre" class="form-control" value="<?= $resultat_article['titre']?>" >
            </div>

            <div class="form-group">
                <img class="d-block w-25" src="php/traitement/upload/<?= $resultat_article['image'] ?>" alt="">
                <label for="image">Votre image : </label>
                <input type="file" id="image" accept=".jpg,.jpeg,.png,.gif" name="image" class="form-control-file" >
                <!-- On limite le fichier -->
                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            </div>

            <div class="form-group">
                <label for="categorie">Choisir la catégorie : </label>
                <select name="categorie" id="categorie" class="form-control" >
                    <option value="">--Choisir une option--</option>
                    <?php for($i=0; $i<COUNT($categories) ; $i++) : ?>
                        <option value="<?= $categories[$i]['id'] ?>" <?php if($resultat_article[3] == $categories[$i]['id'] ) { echo "selected"; }?>><?= $categories[$i]['nom'] ?> </option>
                    <?php endfor ?>
                    
                </select>
            </div>

            <div class="form-group">
                <label for="article">Texte de votre article :</label>
                <textarea name="article" id="article" cols="30" rows="10" class="form-control"><?= $resultat_article['article'] ?></textarea>  
            </div>

            <div class="form-group">
                <label for="prix">Prix :</label>
                <input type="text" id="prix" name="prix" class="form-control" value="<?= $resultat_article['prix'] ?>">
            </div>


            <input type="submit" name="valider" class="btn btn-danger  m-auto  p-2">
            <a class="btn btn-primary  m-auto p-2" href="admin.php">Retour</a>

        </form>
    </main>
    <?php require 'php/include/footer.php';?>
</body>
</center>
</html>