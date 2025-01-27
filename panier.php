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
                <li><a href="creation.php">Création</a></li>
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
            <tfoot>
                <tr>
                    <td colspan="2" style="text-align: right; font-weight: bold;">Total :</td>
                    <td id="total">0 €</td>
                </tr>
            </tfoot>
        </table>

        <form action="achat.php" method="GET">
            <button id="validerPanier">Valider le panier</button>
        </form>
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

    <script src="panier.js"></script>
</body>
</html>
