<?php
session_start();

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

    public function ajouterArticle($id_article,$image,$titre,$prix)
    {
        if (isset($this->articles[$id_article])) {
            // Si l'article est déjà dans le panier, augmenter la quantité
            $this->articles[$id_article]['quantite']++;
        } else {
            // Sinon, ajouter l'article avec une quantité de 1
            $this->articles[$id_article]['id'] = $id_article;
            $this->articles[$id_article]['quantite'] = 1;
            $this->articles[$id_article]['image']=$image;
            $this->articles[$id_article]['titre']=$titre;
            $this->articles[$id_article]['prix']=$prix;

        }
    }
}

if (isset($_GET['id'])) {
    $id_article = $_GET['id'];
    $image = $_GET['image'];
    $titre = $_GET['titre'];
    $prix = $_GET['prix'];
    // Vérifier si l'article existe dans la base de données (vous devez implémenter cette fonctionnalité)
    if (articleExiste($id_article)) {
        // Créer une instance du panier ou récupérer l'instance existante s'il y en a un
        $panier = isset($_SESSION['panier']) ? unserialize($_SESSION['panier']) : new Panier();
        // Ajouter l'article au panier
        if (isset($image)){
            $panier->ajouterArticle($id_article,$image,$titre,$prix);
        } else {
            $panier->ajouterArticle($id_article,'');
        }

        // Sauvegarder le panier dans la session
        $_SESSION['panier'] = serialize($panier);


        // Rediriger l'utilisateur vers la page de l'article ou une autre page appropriée
        header('Location: /panier.php?id=' . $id_article);
        exit();
    }
}
?>
