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
    <link rel="stylesheet" href="styles.css">
     <!-- Lien vers la feuille de style contact -->
     <link rel="stylesheet" href="contact.css">
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
        <section class="hero-contact">
            <!-- Section d'en-tête visuelle -->
            <div class="hero-image">
                <h2>BESOIN D'UNE INFO ? NOUS SOMMES LÀ POUR Y RÉPONDRE !</h2>
            </div>
        </section>

        <section class="breadcrumb">
            <!-- Fil d'Ariane -->
            <p><a href="index.php">Accueil</a> > <a href="contact.php">Contact</a></p>
        </section>

        <section class="contact-details">
            <!-- Détails de contact avec deux colonnes -->
            <div class="contact-left">
                <!-- Carte et adresse -->
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.999262485588!2d2.294481315674175!3d48.8588440792871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d877f23e6f%3A0x2d62e1d3c4e1ec6c!2sTour%20Eiffel!5e0!3m2!1sen!2sfr!4v1618330547821!5m2!1sen!2sfr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <p>12 Rue des Parfums, 75000 Paris, France</p>
            </div>

            <div class="contact-right">
                <!-- Informations de contact -->
                <h3>Contactez-nous</h3>
                <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
                <p><strong>Email :</strong> <a href="mailto:contact@magasindeparfums.fr">contact@magasindeparfums.fr</a></p>
                <h4>Suivez-nous :</h4>
                <div class="social-media">
                    <a href="#"><img src="logo_facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="logo_insta.webp" alt="Instagram"></a>
                    <a href="#"><img src="logo_x.webp" alt="X"></a>
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