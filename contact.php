<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Magasin de Parfums</title>
    <!-- Liens vers les feuilles de styles -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!-- En-tête -->
    <header>
        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <img src="img/logo.png" alt="Logo Magasin de Parfums">
            </div>
            <!-- Titre principal -->
            <h1>Magasin de Parfums</h1>
        </div>
    </header>

    <!-- Navigation principale -->
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Produits</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="cart.php">Panier</a></li> <!-- Lien panier ajouté -->
        </ul>
    </nav>

    <!-- Contenu principal -->
    <main>
        <!-- Section Hero -->
        <section class="hero-contact">
            <div class="hero-image">
                <h2>BESOIN D'UNE INFO ? NOUS SOMMES LÀ POUR Y RÉPONDRE !</h2>
            </div>
        </section>

        <!-- Formulaire de contact -->
        <section class="contact-form">
            <h3>Contactez-nous</h3>
            <form action="submit_contact.php" method="post">
                <div class="form-group">
                    <label for="prenom">Prénom <span>*</span></label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="nom">Nom <span>*</span></label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse postale</label>
                    <textarea id="adresse" name="adresse" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone">
                </div>
                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </section>

        <!-- Détails de contact -->
        <section class="contact-details">
            <div class="contact-left">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <p>12 Rue des Parfums, 75000 Paris, France</p>
            </div>
            <div class="contact-right">
                <h3>Contactez-nous</h3>
                <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
                <p><strong>Email :</strong> <a href="mailto:contact@magasindeparfums.fr">contact@magasindeparfums.fr</a></p>
                <h4>Suivez-nous :</h4>
                <div class="social-media">
                    <a href="#" class="facebook"><img src="logo_facebook.png" alt="Facebook"></a>
                    <a href="#" class="instagram"><img src="logo_insta.webp" alt="Instagram"></a>
                    <a href="#" class="twitter"><img src="logo_x.webp" alt="X"></a>
                </div>
            </div>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Magasin de Parfums</p>
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="legal.php">Mentions Légales</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
