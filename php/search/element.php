<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Description</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb02YwHgTLZMvAZJ5yC32AwCAfkNUcf2eJ4g&usqp=CAU">
</head>
<header>
    <?php include 'php/include/header.php';?>
</header>
<body>

<?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
//$pdo = new PDO("localhost:3306","Gabriel","ViveLeDev","gabriel-rigaud_moduleconnexion");

// Récupération du paramètre "id" dans GET
$id = $_GET['user'];

// Préparation de la requête pour récupérer l'élément correspondant à l'id
$stmt = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
$stmt->execute(['id' => $id]);

// Affichage des informations de l'élément
$row = $stmt->fetch();
echo '<div class="info"><h1>'.$row['titre'].'</h1></div>';
echo '<div class="info"><p>'.$row['articles'].'</p></div>';
?>
</body>
<footer>
    <?php include "php/include/footer.php"; ?>
</footer>
</html>