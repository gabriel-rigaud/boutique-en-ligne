<?php
require 'php/include/connexion.php';
$id_categorie = $_GET['id'];

$requete = $bd->prepare("SELECT * FROM categories WHERE id = $id_categorie ");
$requete->execute();
$resultat = $requete->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier une catégorie</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
</head>
<body>
    <header><?php require 'php/include/header.php';?></header>
<center>
    <main  class="container">
        <h1>Modification de la catégorie</h1>

        <?php if (isset($_SESSION['erreur'])) { echo "<p>".$_SESSION['erreur']."</p>" ;} ?>
        <form action="php/traitement/modification_categorie.php?id=<?= $resultat['id'] ?>" method="POST" >
        
            <input type="text" name="categorie" value="<?= $resultat['nom'] ?>">

            <input type="submit" value="Modifier" name="modifier">
        
        </form>

        <a class="btn btn-danger mt-4 mb-4 ml-auto mr-auto" href="admin.php">Retour</a>
    
    </main>
</center>
    <?php require 'php/include/footer.php';?>
</body>
</html>