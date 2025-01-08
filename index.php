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
        <!-- Image en fond du header -->
        <div class="header-background">
            <h1>Bienvenue sur CP Parfums</h1>
        </div>

        <!-- Menu de navigation -->
<nav>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="contact.php">Contacter</a></li>
        <li><a href="catalogue.php">Catalogue</a></li>
        <li><a href="panier.php">Panier</a></li>
    </ul>
</nav>

    </header>

    <main>
        <!-- Section 1 : Présentation de la collection de parfums -->
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
                    <source src="video/presentation.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéo.
                </video>
                <figcaption>Découvrez notre histoire, nos valeurs, et ce qui rend nos parfums uniques dans cette courte vidéo.</figcaption>
            </figure>
        </section>
    </main>

    <footer>
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
                <ul>
                    <li>Date de création : 20 décembre 2024</li>
                    <li>Créateurs : Océane Dickson et Betül Celikoz</li>
                </ul>
            </div>
        </div>
        <p style="text-align: center;">&copy; 2024 CP Parfums. Tous droits réservés.</p>
    </footer>
</body>
</html>

