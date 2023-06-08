<?php

// Vérifier si le paramètre d'ID de produit est présent
if (isset($_GET['id'])) {
$id_article = $_GET['id'];
}

// Fonction pour vérifier si un article existe dans la base de données (exemple fictif)
function articleExiste($id_article)
{
    // Votre logique pour vérifier l'existence de l'article dans la base de données
    // Retournez true si l'article existe, sinon false
return true;
}

// Classe Panier
class Panier
{
private $articles;

public function __construct()
{
    $this->articles = array();
}

public function ajouterArticle($id_article,$image)
{
    if (isset($this->articles[$id_article])) {
        // Si l'article est déjà dans le panier, augmenter la quantité
        $this->articles[$id_article]['quantite']++;
    } else {
        // Sinon, ajouter l'article avec une quantité de 1
        $this->articles[$id_article]['id'] = $id_article;
        $this->articles[$id_article]['quantite'] = 1;
        $this->articles[$id_article]['image']=$image;
    }
}

public function supprimerArticle($id_article)
{
    if (isset($this->articles[$id_article])) {
        unset($this->articles[$id_article]);
    }
}

public function getArticles()
{
    return $this->articles;
}

public function getTotalPrix()
{
    $total = 0;
    foreach ($this->articles as $article) {
        $total += $article['quantite'] * $article['prix'];
    }
    return $total;
}

public function viderPanier()
{
    $this->articles = array();
}
}
?>