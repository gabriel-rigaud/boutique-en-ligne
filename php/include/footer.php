<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Contact</h3>
            <p>20 Boulevard De Paris
                13002</p>
            <p>Marseille, France</p>
            <p>Téléphone : +123456789</p>
            <p>Email : info@shop.com</p>
        </div>
        <div class="footer-section">
            <h3>Liens rapides</h3>
            <ul>
                <li><a href="/.">Accueil</a></li>
                <li><a href="/articles.php">Produits</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <?php
                if (isset($_SESSION["user"]->id)) {
                    echo ' <li><a href="/panier.php">Panier</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Nos Liens</h3>
            <ul class="social-liens-icons">
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Boutique En Ligne. Tous droits réservés.</p>
    </div>
    <script src="/php/js/app.js"></script>
</footer>