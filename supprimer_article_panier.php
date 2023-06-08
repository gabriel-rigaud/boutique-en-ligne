<?php
session_start();
require 'php/class/panier.class.php';

if (isset($_POST['id_article'])) {
    $id_article = $_POST['id_article'];

    // Supprimer l'article du panier
    $panier = isset($_SESSION['panier']) ? unserialize($_SESSION['panier']) : new Panier();
    $panier->supprimerArticle($id_article);

    // Mettre à jour le panier dans la session
    $_SESSION['panier'] = serialize($panier);
}

// Rediriger vers la page du panier
header('Location: panier.php');
exit();
?>
