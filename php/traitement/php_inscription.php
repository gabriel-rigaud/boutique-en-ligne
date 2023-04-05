<?php
require 'php/class/class_user.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Informations de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "boutique";

    // Connexion à la base de données
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Définition du mode d'erreur PDO à l'exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie à la base de données";
    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }

    // Récupération des données du formulaire
    $login = $_POST['nom_utilisateur'];
    $email = $_POST['email_utilisateur'];
    $livraison = $_POST['adresse_livraison'];
    $facturation = $_POST['adresse_facturation'];
    $password = $_POST['mot_de_passe'];
    $confirmpassword = $_POST['mot_de_passe2'];

    // Vérification si les mots de passe sont identiques
    if ($password != $confirmpassword) {
        echo "Les mots de passe ne correspondent pas";
    } else {
        // Hashage du mot de passe pour plus de sécurité
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Préparation de la requête SQL avec une requête préparée
        $stmt = $conn->prepare("INSERT INTO Utilisateurs (nom_utilisateur, mot_de_passe, email_utilisateur, adresse_livraison, adresse_facturation) VALUES (:nom_utilisateur, :mot_de_passe, :email_utilisateur, :adresse_livraison, :adresse_facturation)");
        $stmt->bindParam(':nom_utilisateur', $login);
        $stmt->bindParam(':mot_de_passe', $hashed_password);
        $stmt->bindParam(':email_utilisateur', $email);
        $stmt->bindParam(':adresse_livraison', $livraison);
        $stmt->bindParam(':adresse_facturation', $facturation);

        // Exécution de la requête
        try {
            $stmt->execute();
            echo "Inscription réussie";
        } catch(PDOException $e) {
            echo "Erreur d'inscription: " . $e->getMessage();
        }
    }

    // Fermeture de la connexion à la base de données
    $conn = null;
}
?>