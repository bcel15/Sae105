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
            <li><a href="contact.php" style="text-decoration: none; color: #000; font-size: 18px;">Contact</a></li>
            <li><a href="copyright.php" style="text-decoration: none; color: #000; font-size: 18px;">Mentions Légales</a></li>
        </ul>
    </div>

    <!-- Mention Légale centrée en bas -->
    <p style="text-align: center; font-size: 16px; margin-top: 10px;">&copy; 2025 CP Parfums. Tous droits réservés.</p>
</footer>

    <script src="panier.js"></script>
</body>
</html>
