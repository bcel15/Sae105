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
        <!-- Titre principal de la page -->
        <h1>Bienvenue sur CP Parfums</h1>

        <!-- Menu de navigation -->
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">A propos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Section 1 : Présentation de la collection de parfums -->
        <section>
            <h2>Notre Collection de Parfums</h2>
            <!-- Paragraphe décrivant l'offre principale -->
            <p>Découvrez notre collection exclusive de parfums, soigneusement sélectionnés pour répondre à tous les goûts et toutes les occasions.</p>
            <!-- Paragraphe ajoutant des détails sur les produits -->
            <p>Nous proposons des créations uniques aux fragrances envoûtantes, réalisées par les meilleurs nez du monde. Chaque parfum est une invitation à un voyage sensoriel.</p>
        </section>

        <!-- Section 2 : Valeurs et engagement de la parfumerie -->
        <section>
            <h2>Pourquoi choisir CP Parfums ?</h2>
            <!-- Paragraphe expliquant la vision de la marque -->
            <p>Chez CP Parfums, nous croyons que le parfum est bien plus qu'une simple fragrance. C'est une expression de votre personnalité.</p>
            <!-- Paragraphe détaillant les standards de qualité -->
            <p>Nos produits sont fabriqués à partir d'ingrédients de la plus haute qualité, garantissant une expérience olfactive exceptionnelle.</p>
        </section>

        <!-- Vidéo de présentation de la marque -->
        <section>
            <h2>Présentation de notre univers</h2>
            <figure>
                <!-- Balise vidéo avec contrôle pour l'utilisateur -->
                <video controls>
                    <source src="video/presentation.mp4" type="video/mp4">
                    <!-- Message affiché si le navigateur ne supporte pas la vidéo -->
                    Votre navigateur ne supporte pas la lecture de vidéo.
                </video>
                <!-- Légende décrivant le contenu de la vidéo -->
                <figcaption>Découvrez notre histoire, nos valeurs, et ce qui rend nos parfums uniques dans cette courte vidéo.</figcaption>
            </figure>
        </section>

        <!-- Section Contact -->
        <section id="contact">
            <h2>Contactez-nous</h2>
            <p>Pour toute question ou information, vous pouvez nous joindre :</p>
            <ul>
                <li>Téléphone : 01 23 45 67 89</li>
                <li>Email : contact@cpparfums.com</li>
            </ul>
        </section>

        <!-- Section À propos -->
        <section id="about">
            <h2>À propos de CP Parfums</h2>
            <p>CP Parfums est une maison de parfum dédiée à créer des expériences olfactives uniques et inoubliables. Nous sommes fiers de notre héritage et de notre engagement envers la qualité.</p>
        </section>
    </main>

    <footer>
        <!-- Informations de copyright dans le pied de page -->
        <div style="display: flex; justify-content: space-between; padding: 20px;">
            <div>
                <h3>Contact</h3>
                <ul>
                    <li>Téléphone : 01 23 45 67 89</li>
                    <li>Email : contact@cpparfums.com</li>
                </ul>
            </div>
            <div>
                <h3>À propos</h3>
                <p>Découvrez l'univers de CP Parfums et notre passion pour les fragrances d'exception.</p>
            </div>
        </div>
        <p style="text-align: center;">&copy; 2024 CP Parfums. Tous droits réservés.</p>
    </footer>
</body>
</html>