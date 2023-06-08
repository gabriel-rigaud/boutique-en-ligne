<head>
    <link rel="stylesheet" href=" /src/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


    <!-- SI L UTILISATEUR CONNECTE -->
    <?php if (isset($_SESSION['user']->id)) :?>
        <div class="nav-bottom">
            <div class="nav-top">
                <div class="nav-top-log">
                    <a href="/panier.php">Panier <i class="fa-solid fa-cart-shopping fa-bounce"></i></a>
                    <a href="/profil.php">Profil <i class="fa-solid fa-pen-to-square fa-bounce"></i></a>
                    <a href="/php/traitement/deconnexion.php">Déconnexion <i class="fa-solid fa-right-from-bracket fa-bounce"></i></a>
                </div>
                <div class="nav-top-link">
                    <a><i class="fa-brands fa-instagram"></i></a>
                    <a><i class="fa-brands fa-facebook"></i></a>
                    <a><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <nav>
                <a href='.'><img ondragstart="return false;" src='../src/image/logo.png' class='logo'></a>

                <div class='nav-top-link'>
                    <form action='/php/search/recherche.php' method='GET'>
                        <input type='text' class='form-control' name='search' id='search' list='liste_articles' placeholder='Entrez votre recherche'>
                        <button type='submit' class='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                    </form>
                </div>

                <div class='nav-top-log'>
                    <a href="/articles.php">Boutique <i class="fa-solid fa-star"></i></a>
                    <a href="/contact.php">Contact <i class="fa-solid fa-message"></i></a>
                </div>
            </nav>
        </div>


        <!-- SI MODERATEUR OU ADMIN  -->
        <?php if( $_SESSION['user']->id_droits == 42 || $_SESSION['user']->id_droits == 1337 ) :?>
            <div class="nav-bottom">
                <div class="nav-top">
                    <div class="nav-top-log">
                        <a href="/panier.php">Panier <i class="fa-solid fa-cart-shopping fa-bounce"></i></a>
                        <a href="/profil.php">Profil <i class="fa-solid fa-pen-to-square fa-bounce"></i></a>
                        <a href="/php/traitement/deconnexion.php">Déconnexion <i class="fa-solid fa-right-from-bracket fa-bounce"></i></a>
                    </div>
                    <div class="nav-top-link">
                        <a><i class="fa-brands fa-instagram"></i></a>
                        <a><i class="fa-brands fa-facebook"></i></a>
                        <a><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <nav>
                    <a href='.'><img ondragstart="return false;" src='../src/image/logo.png' class='logo'></a>

                    <div class='nav-top-link'>
                        <form action='/php/search/recherche.php' method='GET'>
                            <input type='text' class='form-control' name='search' id='search' list='liste_villes' placeholder='Entrez votre recherche'>
                            <button type='submit' class='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                        </form>
                    </div>

                    <div class='nav-top-log'>
                        <a href="/creer-article.php">Crée un article <i class="fa-solid fa-plus"></i></a>
                        <a href="/articles.php">Boutique <i class="fa-solid fa-star"></i></a>
                        <a href="/contact.php">Contact <i class="fa-solid fa-message"></i></a>
                    </div>
                </nav>
            </div>
        <?php endif ?>

        <!--Espace admin-->
        <?php if( $_SESSION['user']->id_droits == 1337 ) :?>
            <div class="nav-bottom">
                <div class="nav-top">
                    <div class="nav-top-log">
                        <a href="/admin.php">Espace Administrateur <i class="fa-solid fa-user fa-bounce"></i></a>
                        <a href="/profil.php">Profil <i class="fa-solid fa-pen-to-square fa-bounce"></i></a>
                        <a href="/php/traitement/deconnexion.php">Déconnexion <i class="fa-solid fa-right-from-bracket fa-bounce"></i></a>
                    </div>
                    <div class="nav-top-link">
                        <a><i class="fa-brands fa-instagram"></i></a>
                        <a><i class="fa-brands fa-facebook"></i></a>
                        <a><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <nav>
                    <a href='.'><img ondragstart="return false;" src='../src/image/logo.png' class='logo'></a>

                    <div class='nav-top-link'>
                        <form action='/php/search/recherche.php' method='GET'>
                            <input type='text' class='form-control' name='search' id='search' list='liste_villes' placeholder='Entrez votre recherche'>
                            <button type='submit' class='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                        </form>
                    </div>

                    <div class='nav-top-log'>
                        <a href="/creer-article.php">Crée un article <i class="fa-solid fa-plus"></i></a>
                        <a href="/articles.php">Boutique <i class="fa-solid fa-star"></i></a>
                        <a href="/panier.php">Panier <i class="fa-solid fa-cart-shopping"></i></a>
                        <a href="/contact.php">Contact <i class="fa-solid fa-message"></i></a>
                    </div>
                </nav>
            </div>
        <?php endif ?>
        <!-- --->

        <?php else :?>
        <div class="nav-bottom">
            <div class="nav-top">
                <div class="nav-top-log">
                    <a href="connexion.php">LOGIN <i class="fa-solid fa-user fa-bounce"></i></a>
                    <a href="inscription.php">SIGN IN <i class="fa-solid fa-user-plus fa-bounce"></i></a>
                </div>
                <div class="nav-top-link">
                    <a><i class="fa-brands fa-instagram"></i></a>
                    <a><i class="fa-brands fa-facebook"></i></a>
                    <a><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <nav>
                <a href='.'><img ondragstart="return false;" src='../src/image/logo.png' class='logo'></a>

                <div class='nav-top-link'>
                    <form action='/php/search/recherche.php' method='GET'>
                        <input type='text' class='form-control' name='search' id='search' list='liste_villes' placeholder='Entrez votre recherche'>
                        <button type='submit' class='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                    </form>
                </div>

                <div class='nav-top-log'>
                    <a href="/articles.php">Boutique <i class="fa-solid fa-star"></i></a>
                    <a href="/contact.php">Contact <i class="fa-solid fa-message"></i></a>
                </div>
            </nav>
    <?php endif ;?>

        </div>
