<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="icon" href="/src/image/logo-onglet.png">
    <link rel="stylesheet" href="src/css/contact.css">
</head>

<header>
    <?php require 'php/include/header.php';?>
</header>

<body class="contact">
<center>
<div class="background">
    <div class="container">
        <div class="style">
            <div class="style-header">
                <div class="style-header-left">
                    <div class="style-button close"></div>
                    <div class="style-button maximize"></div>
                    <div class="style-button minimize"></div>
                </div>
            </div>
            <div class="style-body">
                <div class="style-body-item left">
                    <div class="title">
                        <span>CONTACT</span>
                        <span>FR</span>
                    </div>
                    <div class="form-contact">CONTACT INFO : +33 6 55 32 45 65</div>
                </div>
                <div class="style-body-item">
                    <div class="champ">
                        <input class="form-text" placeholder="NAME">
                    </div>
                    <div class="champ">
                        <input class="form-text" placeholder="EMAIL">
                    </div>
                    <div class="champ">
                        <label class="form-contact" style="font-size: 13px">Quel est le sujet de votre message ?</label>
                        <select name="sujet" class="form-contact-color" required>
                            <option class="color" value="probleme-compte">Problème sur le site</option>
                            <option class="color" value="question-produit">Beug récurrent</option>
                            <option class="color" value="suivi-commande">Je ne retrouve pas ma commande</option>
                            <option class="color" value="postule">Postuler</option>
                            <option class="color" value="autre">Autre...</option>
                        </select>
                    </div>
                    <div class="champ message">
                        <input class="form-text" placeholder="MESSAGE">
                    </div>
                    <div>
                        <button class="button" type="reset">CANCEL</button>
                        <button class="button" type="submit">ENVOYE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
</body>

<footer>
    <?php require 'php/include/footer.php';?>
</footer>
</html>