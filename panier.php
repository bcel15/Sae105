<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="panier.css">
</head>
<body>
    <header>
        <div class="header-background">
            <h1>Panier</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Votre Panier</h1>
        <table id="panier">
            <thead>
                <tr>
                    <th>Nom du Parfum</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Les éléments du panier seront injectés ici par JavaScript -->
            </tbody>
        </table>

        <button id="validerPanier">Valider le panier</button>
    </main>

    <script src="panier.js"></script>
</body>
</html>
