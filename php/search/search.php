<?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
//$pdo = new PDO('mysql:host=localhost:3306;dbname=boutique', 'gabrielm', 'ViveLeDev', 'gabriel-rigaud_autocompletion');
$sql = "SELECT * FROM articles";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Récupération du paramètre "search" dans GET
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}


// Préparation de la requête pour rechercher les éléments correspondant à la recherche
$stmt = $pdo->prepare('SELECT * FROM articles WHERE nom LIKE :search');
$stmt->execute(['search' => '%'.$search.'%']);

// Génération de la barre d'autocomplétion
echo '<datalist id="liste_articles">';
foreach ($articles as $article) {
    echo '<option value="' . $article['titre'] . '">';
}

echo '</datalist>';

?>