<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Déclaration du jeu de caractères et des informations de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page affiché dans l'onglet du navigateur -->
    <title>Accueil - CP Parfums</title>
    <!-- Lien vers le fichier CSS global partagé par tout le site -->
    <link rel="stylesheet" href="styles.css">
    <!-- Lien vers le fichier CSS spécifique à cette page -->
    <link rel="stylesheet" href="homepage.css"> 
</head>
<body>
    <header>

        <div class=head-container>
            <a href="panier.php">
                <img src="caddie.png" alt="Caddie" class="caddie">
            </a>
        </div>

        <!-- Image en fond du header -->
        <div class="header-background">
            <a href="#section-suivante" class="no-link-style">
                <h1>Bienvenue sur CP Parfums</h1>
            </a>
        </div>

        <!-- Menu de navigation -->
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="panier.php">Panier</a></li>
                <li><a href="creation.php">Création</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Carrousel d'aperçus parfums -->
        <section id="section-suivante">
            <h2 class="carrousel-title">Meilleures ventes</h2>
            <div class="carrousel">
                <div class="carrousel-images">
                    <img src="photo parfum/parfum blanc.jpg" alt="Parfum 1">
                    <img src="photo parfum/parfum blanc2.jpg" alt="Parfum 2">
                    <img src="photo parfum/parfum fleur.jpg" alt="Parfum 3">
                    <img src="photo parfum/parfum jaune.jpg" alt="Parfum 4">
                </div>
            </div>
        </section>

        <section>
            <h2>Notre Collection de Parfums</h2>
            <p>Découvrez notre collection exclusive de parfums, soigneusement sélectionnés pour répondre à tous les goûts et toutes les occasions.</p>
            <p>Nous proposons des créations uniques aux fragrances envoûtantes, réalisées par les meilleurs nez du monde. Chaque parfum est une invitation à un voyage sensoriel.</p>
        </section>

        <!-- Section 2 : Valeurs et engagement de la parfumerie -->
        <section>
            <h2>Pourquoi choisir CP Parfums ?</h2>
            <p>Chez CP Parfums, nous croyons que le parfum est bien plus qu'une simple fragrance. C'est une expression de votre personnalité.</p>
            <p>Nos produits sont fabriqués à partir d'ingrédients de la plus haute qualité, garantissant une expérience olfactive exceptionnelle.</p>
        </section>

        <!-- Vidéo de présentation de la marque -->
        <section>
            <h2>Présentation de notre univers</h2>
            <figure>
                <video controls>
                    <source src="Video.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéo.
                </video>
                <figcaption>Découvrez notre histoire, nos valeurs, et ce qui rend nos parfums uniques dans cette courte vidéo.</figcaption>
            </figure>
        </section>
    </main>

    <footer>
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

    <script src="homepage.js"></script>
</body>
</html>
