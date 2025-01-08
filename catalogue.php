<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - CP Parfums</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="catalogue.css">
    <script defer src="catalogue.js"></script>
</head>
<body>
<header>
        <!-- Image en fond du header -->
        <div class="header-background">
            <div class="logo">
                <img src="img/logo.png" alt="Logo Magasin de Parfums">
            </div>
            <h1>Notre catalogue</h1>
        </div>

        <!-- Menu de navigation -->
<nav>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="contact.php">Contacter</a></li>
        <li><a href="panier.php">Panier</a></li>
    </ul>
</nav>

    </header>

    <main>
        <section id="nos-parfums">
            <h1>Nos Parfums</h1>
            <div class="parfums-container">
                <!-- Exemple de carte de parfum -->
                <!-- Génération des parfums -->
                <div class="parfum" onclick="showDetails('parfum1')">
                    <img src="images/parfum1.jpg" alt="Parfum Élégance">
                    <h2>Élégance</h2>
                    <p>Raffiné et classique</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum2')">
                    <img src="images/parfum2.jpg" alt="Parfum Mystère">
                    <h2>Mystère</h2>
                    <p>Envoutant et charismatique</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum3')">
                    <img src="images/parfum3.jpg" alt="Parfum Horizon">
                    <h2>Horizon</h2>
                    <p>Frais et dynamique</p>
                </div>
                
                <!-- Ajouter 17 parfums supplémentaires de la même manière -->
                <!-- Utilisation d'un modèle JavaScript pour réduire la redondance -->
            </div>
        </section>

        <section id="details-parfum" class="hidden">
            <div class="details-content">
                <button onclick="closeDetails()">Fermer</button>
                <img id="details-image" src="" alt="">
                <h2 id="details-title"></h2>
                <p id="details-description"></p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 CP Parfums. Tous droits réservés.</p>
    </footer>
</body>
</html>
