<?php
// contact.php
// Page de contact du site sur les parfums.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Magasin de Parfums</title>
    <!-- Lien vers la feuille de style principale -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Lien vers la feuille de style spécifique à la page contact -->
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <!-- Logo du magasin de parfums -->
                <img src="img/logo.png" alt="Logo Magasin de Parfums">
            </div>
            <h1>Magasin de Parfums</h1>
            <div class="cart-link">
                <!-- Lien vers le panier -->
                <a href="cart.php">Panier</a>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <!-- Menu de navigation -->
            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Produits</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section class="contact-content">
            <div class="contact-left">
                <h2>Notre Adresse</h2>
                <!-- Plan intégré via Google Maps -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434508616!2d144.95373631590438!3d-37.81627944202196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577fc351f69e0f!2sSome%20Address!5e0!3m2!1sen!2sfr!4v1692124678222!5m2!1sen!2sfr" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <p>123 Rue des Parfums, Ville, Code Postal</p>
            </div>

            <div class="contact-right">
                <h2>Contactez-Nous</h2>
                <!-- Informations de contact -->
                <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
                <p><strong>Email :</strong> contact@parfumshop.fr</p>
                <div class="social-links">
                    <!-- Liens vers les réseaux sociaux avec leurs icônes -->
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="img/facebook.png" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="img/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <img src="img/twitter.png" alt="Twitter">
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <!-- Pied de page avec copyright et liens -->
            <p>&copy; 2025 Magasin de Parfums</p>
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="legal.php">Mentions Légales</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
