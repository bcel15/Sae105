<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Magasin de Parfums</title>
    <!-- Lien vers les feuilles de styles -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <div class="header-banner">
            <img src="baniere_cp" alt="Bannière Magasin de Parfums">
            <h1>Magasin de Parfums</h1>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="panier.php">Panier</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-contact">
            <div class="hero-image">
                <h2>BESOIN D'UNE INFO ? NOUS SOMMES LÀ POUR Y RÉPONDRE !</h2>
            </div>
        </section>

        <section class="contact-form">
            <h3>Contactez-nous</h3>
            <!-- Le formulaire redirige maintenant vers confirmation.html -->
            <form action="confirmation.html" method="post">
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
                    <a href="404.php" class="facebook"><img src="logo_facebook.png" alt="Facebook"></a>
                    <a href="404.php" class="instagram"><img src="logo_insta.webp" alt="Instagram"></a>
                    <a href="404.php" class="twitter"><img src="logo_x.webp" alt="X"></a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; padding: 20px 50px; font-size: 18px;">
            <!-- Section Contact (Gauche) -->
            <div style="text-align: center;">
                <h3 style="font-size: 22px;">Contact</h3>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>Téléphone : 01 23 45 67 89</li>
                    <li>Email : contact@cpparfums.com</li>
                </ul>
            </div>

            <!-- Section À propos (Droite) -->
            <div style="text-align: center;">
                <h3 style="font-size: 22px;">À propos</h3>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>Date de création : 20 décembre 2024</li>
                    <li>Créateurs : Océane Dickson et Betül Celikoz</li>
                </ul>
            </div>
        </div>

        <!-- Liens Contact et Mentions Légales centrés -->
        <div style="text-align: center; margin-top: 16px;">
            <ul style="list-style: none; padding: 0; line-height: 1.8; display: inline-flex; gap: 20px;">
                <li><a href="contact.php" style="text-decoration: none; color: #ffffff; font-size: 18px;">Contact</a></li>
                <li><a href="copyright.php" style="text-decoration: none; color: #ffffff; font-size: 18px;">Mentions Légales</a></li>
            </ul>
        </div>

        <!-- Mention Légale centrée en bas -->
        <p style="text-align: center; font-size: 16px; margin-top: 10px;">&copy; 2025 CP Parfums. Tous droits réservés.</p>
    </footer>
</body>
</html>